
	{{-- FAVICON --}}
		<link
			rel="shortcut icon"
			href="{{ asset('images/mainPage/icon.png') }}"
			type="image/x-icon"
		/>
	{{-- CSS --}}
	@push('styles')
		{{-- NORMALIZE --}}
			<link rel="stylesheet" href="{{ asset('css/mainPage/normalize.css') }}" />
		{{-- REMIX ICON --}}
			<link href="{{ asset('css/mainPage/remixicon/remixicon.css') }}" rel="stylesheet" />
		{{-- SWIPER CSS --}}
			<link rel="stylesheet" href="{{ asset('css/mainPage/swiper-bundle.min.css') }}" />
		{{-- CUSTOM CSS --}}
			<link rel="stylesheet" href="{{ asset('css/mainPage/style.css') }}" />
	@endpush
	<!-- === HEADER === -->
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

					<!-- === BOTON CERRAR === -->
					<div class="nav__close" id="nav-close">
						<i class="ri-close-large-line"></i>
					</div>
				</div>

				<!-- === TOGGLE BUTTON === -->
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

{{--  
	<body>
		
		<!-- === MAIN === -->
		<main class="main">
			<!-- === HOME === -->
			<div class="home">
				<img src="<?= base_url('assets/librerias/imagesNew/mainPage/fondo.png') ?>" alt="FondoWeb" class="home__bg" />
				<img
					src="<?= base_url('assets/librerias/imagesNew/mainPage/graduada.png') ?>"
					alt="Graduada"
					class="home__graduada"
				/>

				<div class="home__container container">
					<!-- === HOMEDATA === -->
					<div class="home__data">
						<h2 class="home__subtitle">
							Sistema de Gestión Académica y Administrativa
						</h2>

						<h1 class="home__title">DanteSGA</h1>
					</div>
					<?php //print_r($bloques) ?>
					
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
					?>
				</div>
			</div>
		</main>

		<!-- SWIPER JS -->
		<script src="<?= base_url('assets/librerias/jsNew/mainPage/swiper-bundle.min.js') ?>"></script>
		<!-- MAIN -->
		<script src="<?= base_url('assets/librerias/jsNew/mainPage/main.js') ?>"></script>
		<script src="<?= base_url('assets/librerias/jsNew/jquery-3.5.1.min.js') ?>" type="text/javascript"></script>
		<script src="<?= base_url('assets/librerias/jsNew/sweetalert.js') ?>" type="text/javascript"></script>
		<script type="text/javascript">
			function accesoBloque(idBloque){
				console.log(idBloque);
				//return false;
				$.ajax({
					type: 'POST',
					dataType: 'json',
					data: {idBloque:idBloque},
					url: '<?php echo base_url(); ?>index.php/admin/login/accesoBloque',
					success: function (data){     
						//console.log("acceso");
						//return false;
						if(data['estado']){
							//var url="<?php echo base_url(); ?>index.php/admin/login/getPeriodo_actualizado";
							//$.post(url, {}, function(respuesta){ 
								// window.location.href='<?php echo base_url(); ?>index.php/index/index';
								window.location.href='<?php echo base_url(); ?>index.php/admin/login/cpanel';
							//});

						}else{
							//var text = 'No se puedo activar';
							//$.notific8(text, params);  
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