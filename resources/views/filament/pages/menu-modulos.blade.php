@push('styles')
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Menú Modulos</title>	
		{{-- FAVICON --}}
			<link
				rel="shortcut icon"
				href="{{ asset('images/mainPage/icon.png') }}"
				type="image/x-icon"
			/>
		{{-- CSS --}}
			{{-- NORMALIZE --}}
				<link rel="stylesheet" href="{{ asset('css/modulePage/normalize.css') }}" />
			{{-- REMIX ICON --}}
				<link href="{{ asset('css/mainPage/remixicon/remixicon.css') }}" rel="stylesheet" />

            {{-- CUSTOM CSS --}}
				<link rel="stylesheet" href="{{ asset('css/modulePage/style.css') }}" />
            <style>
                .fi-sidebar { display: none !important; }
                .fi-topbar { display: none !important; }
                .fi-main { padding: 0 !important; }
            </style>
@endpush

<main class="main">
    <section class="content container">
        {{-- HEADER --}}
            <header class="header">
                <div class="header__content">
                    <figure class="header__logo">
                        <img
                        src="{{ asset('images/global/dante_sga_icono.png') }}"
                        alt="Logo DanteSGA"
                        class="header__img"
                        />
                    </figure>
                    <h1 class="header__title">
                        Sistema de Gestión Académica y Administrativa SGA (V. {{-- <?php echo $version; ?> --}})
                    </h1>
                </div>
                <div class="header__controls">
                    <div class="header__search">
                        <i class="ri-search-line header__icon header__icon-glass"></i>
                        <input
                        type="text"
                        class="header__input"
                        id="search"
                        placeholder="Buscar"
                        autocomplete="off"
                        />
                    </div>

                    <button class="header__btn" id="headerMenu">
                        <i class="ri-align-justify header__icon header__icon-menu"></i>
                    </button>
                </div>

                <!-- === TEMPLATE === -->
                <div class="template" id="template">
                    <a class="template__link" wire:click="irMenuPrincipal">
                        <i class="ri-arrow-go-back-line template__icon"></i> Menú Principal
                    </a>
                    <a class="template__link" wire:click="logout">
                        <i class="ri-logout-box-line template__icon"></i> Cerrar Sesión
                    </a>
                </div>
            </header>
        {{-- CARDS --}}
            <div class="cards">
                {{-- CARDS TITLE --}}
                    <h2 class="cards__title">
                    <i class="ri-arrow-right-s-fill"></i> Menu
                    </h2>
                {{-- CARDS GRID --}}
                    <div class="cards__grid">
                        @foreach ($modulos as $modulo)
                            <article class="card">
                                <a wire:click="irModulo('{{ $modulo['RUTA'] }}')" class="card__action">
                                    <i class="ri-arrow-right-fill card__icon"></i>
                                </a>

                                <div class="card__picture">
                                    <img
                                        src="{{ asset('images/iconos_modulos/'.$modulo['ICONO']) }}"
                                        alt="<?= $modulo['MODULO']; ?>"
                                        class="card__img"
                                    />
                                    <figcaption class="card__title">{{ $modulo['NOMBRE_MODULO'] }}</figcaption>
                                </div>
                            </article>
                        @endforeach
                    </div>
            </div>
        
    </section>
</main>

@push('scripts')
    <!-- === CUSTOM JS === -->
	<script src="{{ asset('js/modulePage/main.js') }}"></script>
@endpush