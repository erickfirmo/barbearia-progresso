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


/* Lightbox gallery */

function openModal() {
  document.getElementById("lightbox-model").style.display = "block";
}

function closeModal() {
  document.getElementById("lightbox-model").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("lightbox-slides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}