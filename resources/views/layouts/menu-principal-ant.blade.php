<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Menú Principal</title>	
		{{-- FAVICON --}}
			<link
				rel="shortcut icon"
				href="{{ asset('images/mainPage/icon.png') }}"
				type="image/x-icon"
			/>
		{{-- CSS --}}
			{{-- NORMALIZE --}}
				<link rel="stylesheet" href="{{ asset('css/mainPage/normalize.css') }}" />
			{{-- REMIX ICON --}}
				<link href="{{ asset('css/mainPage/remixicon/remixicon.css') }}" rel="stylesheet" />
			{{-- SWIPER CSS --}}
				<link rel="stylesheet" href="{{ asset('css/mainPage/swiper-bundle.min.css') }}" />
			{{-- CUSTOM CSS --}}
				<link rel="stylesheet" href="{{ asset('css/mainPage/style.css') }}" />
		@livewireStyles
		@stack('styles')
		
	</head>
	<body>
		{{-- HEADER --}}
			<header class="header" id="header">
				<div class="nav container">
					<figure class="nav__logo">
						<img src="{{ asset('images/mainPage/logo.png') }}" alt="Logo" class="nav__img" />
					</figure>

					<div class="nav__menu" id="nav-menu">
						<ul class="nav__list">
							<li>
								<a href="#" class="nav__link">Inicio</a>
							</li>

							<li>
								<a href="https://ismac.edu.ec/" target="_blank" class="nav__link">Webpage DanteSGA</a>
							</li>

							<li>
								<a href="https://www.soporte.ismac.online/" target="_blank" class="nav__link">Mesa de Ayuda</a>
							</li>

							<li>
								<a href="#" class="nav__link">Contáctanos</a>
							</li>
						</ul>

						{{-- BOTON CERRAR --}}
						<div class="nav__close" id="nav-close">
							<i class="ri-close-large-line"></i>
						</div>
					</div>

					{{-- TOGGLE BUTTON --}}
					<div class="nav__toggle" id="nav-toggle">
						<i class="ri-apps-2-line"></i>
					</div>

					<div class="nav__controls">
						<ul class="nav__icons">
							<li class="nav__icon" style="opacity: 0; pointer-events: none;">
								<i class="ri-settings-fill"></i>
							</li>

							<li class="nav__icon" style="opacity: 0; pointer-events: none;">
								<i class="ri-notification-line"></i>
							</li>

							<li class="nav__icon" style="opacity: 0; pointer-events: none;">
								<i class="ri-user-fill"></i>
							</li>
						</ul>
					</div>
				</div>
			</header>
		{{-- MAIN --}}
		<main class="main">
			{{-- HOME --}}
			<div class="home">
				<img src="{{ asset('images/mainPage/fondo.png') }}" alt="FondoWeb" class="home__bg" />
				<img
					src="{{ asset('images/mainPage/graduada.png') }}"
					alt="Graduada"
					class="home__graduada"
				/>

				<div class="home__container container">
					{{-- HOMEDATA --}}
					<div class="home__data">
						<h2 class="home__subtitle">
							Sistema de Gestión Académica y Administrativa
						</h2>

						<h1 class="home__title">DanteSGA</h1>
					</div>
					
					<!-- GESTION ACADEMICA -->
						<div class="home__content">
							<h2 class="home__subtitle">Gestión Académica</h2>

							<div class="home__gestion swiper" >
							<div class="swiper-wrapper">
								<figure class="home__figure swiper-slide" onclick="Livewire.find(document.querySelector('[wire\\:id]').getAttribute('wire:id')).call('accesoBloque', 1)">
								<img
									src="{{ asset('images/mainPage/academicaImg1.jpg') }}"
									alt="Tecnicatura"
									class="home__categoria"
								/>
								<h4 class="home__topic">Tecnicatura</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg2.jpg') }}"
									alt="Tecnologias Superiores"
									class="home__categoria"
								/>
								<h4 class="home__topic">Tecnologias Superiores</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg3.jpg') }}"
									alt="Tecnologias Universitarias"
									class="home__categoria"
								/>
								<h4 class="home__topic">Tecnologias Universitarias</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg4.jpg') }}"
									alt="Tecnologias Universitarias"
									class="home__categoria"
								/>
								<h4 class="home__topic">Maestrías Tecnológicas</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg5.jpg') }}"
									alt="Especializaciones"
									class="home__categoria"
								/>
								<h4 class="home__topic">Especializaciones</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg6.jpg') }}"
									alt="Formación Profesional"
									class="home__categoria"
								/>
								<h4 class="home__topic">Formación Profesional</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg7.jpg') }}"
									alt="Idiomas"
									class="home__categoria"
								/>
								<h4 class="home__topic">Idiomas</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/academicaImg8.jpg') }}"
									alt="Idiomas"
									class="home__categoria"
								/>
								<h4 class="home__topic">Validación Conocimientos</h4>
								</figure>
							</div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
							</div>
						</div>

						<!-- GESTION ADMINISTRATIVA -->
						<div class="home__content">
							<h2 class="home__subtitle">Gestión Administrativa</h2>

							<div class="home__administrativa swiper">
							<div class="swiper-wrapper">
								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/administrativaImg1.jpg') }}"
									alt="Tecnicatura"
									class="home__categoria"
								/>
								<h4 class="home__topic">Administración Académica</h4>
								</figure>

								<figure class="home__figure swiper-slide">
								<img
									src="{{ asset('images/mainPage/administrativaImg2.jpg') }}"
									alt="Tecnicatura"
									class="home__categoria"
								/>
								<h4 class="home__topic">Reportes y BI</h4>
								</figure>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
							</div>
						</div>
					{{-- modo dinamico
					<?php 
						foreach ($tipoBloques as $ktb => $tb) {
							if (isset($bloques[$ktb]) && count($bloques[$ktb])>0) {
							?>
								<div class="home__content">
									<h2 class="home__subtitle"><?php echo $tb ?></h2>
									<div class="home__administrativa swiper">
										<div class="swiper-wrapper">
											<?php
												foreach ($bloques[$ktb] as $kb => $bloque) {
												?>
													<figure class="home__figure swiper-slide" 
														href="<?php echo base_url("index.php/admin/login/cpanel").'/'.$bloque['ID_BLOQUE'];?>"
														onclick="accesoBloque(<?= $bloque['ID_BLOQUE'] ?>)"
													>
														<img
															src="<?= base_url('assets/librerias/imagesNew/mainPage/'.$bloque['IMAGEN_BLOQUE']) ?>"
															alt="<?= $bloque['BLOQUE'] ?>"
															class="home__categoria" 
														/>
														<h4 class="home__topic"><?php echo $bloque['BLOQUE'] ?></h4>
													</figure>
												<?php
												}
											?>
										</div>
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
										<div class="swiper-pagination"></div>
									</div>
								</div>
							<?php
							}
						}
					?>--}}
				</div>
			</div>
		</main>
		
		{{-- SWIPER JS --}}
			<script src="{{ asset('js/mainPage/swiper-bundle.min.js') }}"></script>
		{{-- MAIN --}}
			<script src="{{ asset('js/mainPage/main.js') }}"></script>
		@livewireScripts
    	@stack('scripts')
</body>
</html>
{{--  
	<body>
		<script type="text/javascript">
			function accesoBloque(idBloque){
				console.log(idBloque);
				$.ajax({
					type: 'POST',
					dataType: 'json',
					data: {idBloque:idBloque},
					url: '<?php echo base_url(); ?>index.php/admin/login/accesoBloque',
					success: function (data){     
						//console.log("acceso");
						//return false;
						if(data['estado']){
								window.location.href='<?php echo base_url(); ?>index.php/admin/login/cpanel';
						}else{
							Swal.fire({
								icon: 'error',
								title: "No se puede acceder al bloque."
							});
						}
					}
				});
			}
		</script>
	</body>
</html>

--}}