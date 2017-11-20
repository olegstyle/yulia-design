<?php
/**
 * Created by PhpStorm.
 * User: olegs
 * Date: 18.01.2017
 * Time: 8:59
 */

namespace App\Http\Controllers;


use App\Http\Requests\ContactSendRequest;
use App\Mail\ContactMail;
use App\Project;
use App\ProjectTechnicalStack;
use App\TechnicalStack;
use App\TechnicalStackGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Voyager;

class MainController extends Controller {
    /**
     * Show the profile for the given user.
     *
     * @return \Response
     */
    public function index() {
        $locale = Lang::getLocale();
        $imageStorage = '/storage/';

        $data = [];

        $now = date_create(date("Y-m-d", time()));

        $techGroup = TechnicalStackGroup::orderBy('order', 'asc')->get();
        $techStacks = TechnicalStack::orderBy('date_start', 'desc')->orderBy('group_id', 'asc')->get();
        $projects = Project::orderBy('date_start', 'desc')->get();
        $p2ts = ProjectTechnicalStack::all();


        $techGroupList = [];
        foreach ($techGroup as $tg) {
            $techGroupList[$tg->id] = [
                'id' => $tg->id,
                'name' => $tg->name
            ];
        }


        $techStackList = [];
        foreach ($techStacks as $ts) {
            $techStackList[$ts->id] = [
                'id' => $ts->id,
                'group_id' => $ts->group_id,
                'name' => $ts->name,
                'image_url' => $imageStorage . $ts->image_url,
                'date_start' => $ts->date_start
            ];
            if ($ts->level >= 5) {
                $techStackList[$ts->id]['level'] = 'strong';
            } else if ($ts->level == 4) {
                $techStackList[$ts->id]['level'] = 'very good';
            } else if ($ts->level == 3) {
                $techStackList[$ts->id]['level'] = 'good';
            } else if ($ts->level == 2) {
                $techStackList[$ts->id]['level'] = 'not bad';
            } else {
                $techStackList[$ts->id]['level'] = 'bad';
            }
            $start = date_create($ts->date_start);
            $diff = date_diff($start, $now);
            $tDiff = '';
            if ($diff->y > 0) {
                $tDiff .= $diff->y;
                $tDiff .= ' year';
                if ($diff->y > 1) {
                    $tDiff .= 's ';
                } else {
                    $tDiff .= ' ';
                }
            }
            $tDiff .= "<br>";
            if ($diff->m <= 0) {
                $diff->m = 1;
            }
            $tDiff .= $diff->m;
            $tDiff .= ' month';
            if ($diff->m > 1) {
                $tDiff .= 's';
            }
            $techStackList[$ts->id]['start'] = $tDiff;
        }


        $projectsList = [];
        foreach ($projects as &$project) {
            $projectsList[$project->id] = [
                'id' => $project->id,
                'name' => $project->{'name_'.$locale},
                'image_url' => $imageStorage . $project->image_url,
                'date_start' => $project->date_start,
                'stack' => [],
                'groups' => []
            ];
            foreach ($p2ts as &$ts) {
                if ($ts->project_id == $project->id) {
                    if (!empty($techStackList[$ts->tech_id])) {
                        $projectsList[$project->id]['stack'][$ts->tech_id] = $techStackList[$ts->tech_id];
                        $projectsList[$project->id]['groups'][$ts->tech_id] = $ts->tech_id;
                    }
                }
            }
            usort($projectsList[$project->id]['stack'], function($a, $b) {
                if (!isset($a['group_id']) || !isset($b['group_id'])) {
                    return 0;
                }
                if ($a['group_id'] == $b['group_id']) {
                    return $a['group_id'] < $b['group_id'] ? -1 : 1;
                }
                if ($a['date_start'] == $b['date_start']) {
                    return 0;
                }
                return $a['date_start'] < $b['date_start'] ? -1 : 1;
            });
        }

        $data['tech_groups'] = $techGroupList;
        $data['tech_stacks'] = $techStackList;
        $data['projects'] = $projectsList;
        $data['about_me_long'] = setting('site.about_me_long_' . $locale);
        $data['about_me_short'] = setting('site.about_me_short_' . $locale);
        $data['email'] = setting('site.email');
        $data['skype'] = setting('site.skype');
        $data['locale'] = $locale;
        $data['seo_title'] = setting('site.seo_title');
        $data['seo_keywords'] = setting('site.seo_keywords');
        $data['seo_description'] = setting('site.seo_description');
        $data['seo_image'] = '/images/me.jpg';

        return view('main', $data);
    }

    /**
     * sendMail
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param ContactSendRequest $request
     * @return \Response
     */
    public function sendMail(ContactSendRequest $request)
    {
        Mail::send(new ContactMail($request->input('name'), $request->input('email'), $request->input('message')));
        return response(['success' => true]);
    }
}