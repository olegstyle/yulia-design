/** MARK - global
 **************************************************/

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }

    document.cookie = updatedCookie;
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-full-width",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};


/** MARK - page
 **************************************************/

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
           }, 500);
       });
   });
});