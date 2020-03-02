/* Google reCaptcha site_key --> */
var recaptcha_site_key = '<site_key>';
for (var i = 0; i < $('.g-recaptcha').length; i++) {
    $('.g-recaptcha').eq(i).attr('data-sitekey', recaptcha_site_key);
}

/* scroll to form on click in price box */
$('.inner-price').on('click', function() {
    $('#senderService option[value="'+$(this).find('button').attr('data-service-type')+'"]').prop('selected', true);
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1500);
});
