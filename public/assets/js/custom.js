/* Google reCaptcha site_key --> */
var recaptcha_site_key = '<site_key>';
for (var i = 0; i < $('.g-recaptcha').length; i++) {
    $('.g-recaptcha').eq(i).attr('data-sitekey', recaptcha_site_key);
}

function scrollTopAnimate(selector, time) {
    $(function() {
        $('html, body').animate({
            scrollTop: $(selector).offset().top
        }, time);
    });
}

function statusMessage(status, parent_selector, json_file)
{
    $.getJSON(json_file, function(messages) {
        $(parent_selector).html(messages.status);
    });
}

/* scroll to form on click in price box */
$('.inner-price').on('click', function() {
    $('#senderService option[value="'+$(this).find('button').attr('data-service-type')+'"]').prop('selected', true);
        scrollTopAnimate('#contact', 1500);
});

