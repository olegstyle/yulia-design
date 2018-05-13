
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(function () {
    $(document).ready(function () {
        $('#contact-me').submit(function () {
            var form = $(this);
            var name = form.find('input[name="name"]').val();
            var email = form.find('input[name="email"]').val();
            var message = form.find('textarea[name="message"]').val();

            if (name.trim() == '') {
                toastr["error"](BODev.Lang.name_empty);
                return false;
            } else if (email.trim() == '') {
                form.find('input[name="name"]').val('');
                toastr["error"](BODev.Lang.email_empty);
                return false;
            } else if (message.trim() == '') {
                toastr["error"](BODev.Lang.message_empty);
                return false;
            }
            toastr["info"](BODev.Lang.sending);
            $.ajax('/angi/contact/send', {
                type: "POST",
                data: form.serialize(),
                precessData: false,
            }).done(function () {
                toastr["success"](BODev.Lang.send_success);
                form.trigger('reset');
                if (window.grecaptcha) grecaptcha.reset();
            });
            return false;
        });

        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, ($(this).offset().top + $($.attr(this, 'href')).offset().top) / 1.2);
        });
    });
});