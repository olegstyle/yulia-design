<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteUnneededFieldsInProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['description_ru', 'gist_ru', 'gist_en', 'description_en', 'date_end', 'link']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->string('gist_ru', 100);
            $table->string('gist_en', 100);
            $table->date("date_end")->nullable();
            $table->string("link")->nullable();
        });
    }
}
