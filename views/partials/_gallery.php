<!-- GALLERY -->
<section id="gallery" class="gallery">
		<div class="container">
			<div class="h-page-title">
				<h1>Galeria</h1>
				<span class="sub-title">nosso trabalho</span>
				<div class="mustache">
					<span><img class="img-responsive" src="<?php asset('/images/home-page/mustache.png'); ?>" alt=""></span>
				</div>
			</div>
		</div>
		<div id="portfolio-gal">
			<div class="col-md-12 main-navigation">
				<ul id="filters" class="clearfix portfolio-gal-filter" data-option-key="filter">
					<li><a href="#filter" class="active" data-option-value="*">Todos</a></li>
					<li><a href="#filter" data-option-value=".corte">Cortes</a></li>
					<li><a href="#filter" data-option-value=".barba">Barba</a></li>
					<li><a href="#filter" data-option-value=".luzes">Luzes</a></li>
					<li><a href="#filter" data-option-value=".relaxamento">Relaxamento</a></li>
					<li><a href="#filter" data-option-value=".sobrancelhas">Sobrancelhas</a></li>
				</ul>
			</div>
			<div class="col-md-12">
				<div class="portfolio-gal corte">
					<div class="folio-item corte col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<div class="overlay-bg"></div>
							<img src="<?php asset('images/cortes/gallery/1.jpg'); ?>" onclick="openModal();currentSlide(1)" class="img-responsive" alt="Corte de Cabelo Masculino"/>
						</div>
					</div>
					<div class="folio-item corte col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<div class="overlay-bg"></div>
							<img src="<?php asset('images/cortes/gallery/2.jpg'); ?>" onclick="openModal();currentSlide(2)" class="img-responsive" alt="Corte de Cabelo Masculino"/>
						</div>
					</div>
					<div class="folio-item corte col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<div class="overlay-bg"></div>
							<img src="<?php asset('images/cortes/gallery/3.jpg'); ?>" onclick="openModal();currentSlide(3)" class="img-responsive" alt="Corte de Cabelo Masculino"/>
						</div>
					</div>
					<div class="folio-item corte col-sm-12 col-sm-6 col-md-6 col-lg-6">
						<div class="folio-thumb">
							<div class="overlay-bg"></div>
							<img src="<?php asset('images/cortes/gallery/4.jpg'); ?>" onclick="openModal();currentSlide(4)" class="img-responsive" alt="Corte de Cabelo Masculino"/>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="space30"></div>
				<a href="https://www.instagram.com/vncsss/?hl=pt-br" target="_blank" class="main-btn">Ver no Instagram</a>
			</div>
		</div>
	</section>
	<!-- GALLERY -->

<div id="lightbox-model" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="lightbox-slides">
      <div class="numbertext">1 / 4</div>
      <img src="<?php asset('images/cortes/gallery/1.jpg'); ?>" style="width:100%">
    </div>

    <div class="lightbox-slides">
      <div class="numbertext">2 / 4</div>
      <img src="<?php asset('images/cortes/gallery/2.jpg'); ?>" style="width:100%">
    </div>

    <div class="lightbox-slides">
      <div class="numbertext">3 / 4</div>
      <img src="<?php asset('images/cortes/gallery/3.jpg'); ?>" style="width:100%">
    </div>
    
    <div class="lightbox-slides">
      <div class="numbertext">4 / 4</div>
      <img src="<?php asset('images/cortes/gallery/4.jpg'); ?>" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="<?php asset('images/cortes/gallery/1.jpg'); ?>" style="width:100%" onclick="currentSlide(1)" alt="Corte">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php asset('images/cortes/gallery/2.jpg'); ?>" style="width:100%" onclick="currentSlide(2)" alt="Corte">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php asset('images/cortes/gallery/3.jpg'); ?>" style="width:100%" onclick="currentSlide(3)" alt="Corte">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php asset('images/cortes/gallery/4.jpg'); ?>" style="width:100%" onclick="currentSlide(4)" alt="Corte">
	</div>
	
  </div>
</div>