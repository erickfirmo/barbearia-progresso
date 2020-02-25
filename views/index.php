<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Barbearia Progresso</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php asset('css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('js/isotope/isotope.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('js/flexslider/flexslider.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('js/owl-carousel/owl.carousel.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('js/owl-carousel/owl.theme.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('js/owl-carousel/owl.transitions.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('css/dark.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('css/responsive.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php asset('css/custom.css'); ?>">


	<!-- JS Font Script -->
	<script src="http://use.edgefonts.net/bebas-neue.js"></script>

	<!-- Modernizer -->
	<script src="<?php asset('js/modernizr.custom.97074.js'); ?>"></script>
	<script src="<?php asset('js/modernizr.custom.js'); ?>"></script>

	<!-- Google reCaptcha API -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body id="onepage">

<div class="wrapper">
    <?php

		include 'partials/_header.php'; 
		
        include 'partials/_services.php';
    
        include 'partials/_gallery.php';

		include 'partials/_pricing.php';
		
		//include 'partials/_stats.php';
	?>

	

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.243718293199!2d-46.447388684884935!3d-23.523735066089227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66ac69ad6321%3A0x65a29988978314e5!2sR.%20Santo%20Cristo%2C%207%20-%20Jardim%20Norma%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008240-410!5e0!3m2!1spt-BR!2sbr!4v1580405058822!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;width:100%;height:400px;" allowfullscreen=""></iframe>

	<?php

		include 'partials/_contact.php';
	?>

	<?php

		include 'partials/_footer.php'; 

    ?>


</div>
<!-- Javascript -->
<script src="<?php asset('js/jquery.min.js'); ?>"></script>
<script src="<?php asset('js/navigation/jquery.sticky.js'); ?>"></script>
<script src="<?php asset('js/bootstrap.min.js'); ?>"></script>
<script src="<?php asset('js/dialogFx.js'); ?>"></script>
<script src="<?php asset('js/dialog-js.js'); ?>"></script>
<script src="<?php asset('js/navigation/jquery.easing.js'); ?>"></script>
<script src="<?php asset('js/flexslider/jquery.flexslider.js'); ?>"></script>
<script src="<?php asset('js/navigation/scroll.js'); ?>"></script>
<script src="<?php asset('js/owl-carousel/owl.carousel.min.js'); ?>"></script>
<script src="<?php asset('js/isotope/isotope.pkgd.js'); ?>"></script>
<script src="<?php asset('js/superfish/js/hoverIntent.js'); ?>"></script>
<script src="<?php asset('js/superfish/js/superfish.js'); ?>"></script>
<script src="<?php asset('js/tweecool.js'); ?>"></script>
<script src="<?php asset('js/jquery.bpopup.js'); ?>"></script>
<script src="<?php asset('js/pikaday/pikaday.js'); ?>"></script>
<script src="<?php asset('js/classie.js'); ?>"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?php asset('js/rs-plugin/js/jquery.themepunch.tools.min.js'); ?>"></script>   
<script src="<?php asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>"></script>
<script src="<?php asset('js/jquery.prettyphoto.js'); ?>"></script>
<script src="<?php asset('js/script.js'); ?>"></script>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?php asset('js/gmap.js'); ?>"></script>

<!-- Google reCaptcha site_key -->
<script>
	var recaptcha_site_key = '<site_key>';
	for (var i = 0; i < $('.g-recaptcha').length; i++) {
		$('.g-recaptcha').eq(i).attr('data-sitekey', recaptcha_site_key);
	}
</script>

<script>
	$('.inner-price button.main-btn').on('click', function() {
		$('#senderService option[value="'+$(this).attr('data-service-type')+'"]').prop('selected', true);
			$('html, body').animate({
				scrollTop: $("#contact").offset().top
			}, 1500);
	});
</script>

</body>
</html>
