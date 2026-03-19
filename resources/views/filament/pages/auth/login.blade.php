{{-- CSS --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
    <link href="{{ asset('css/mainPage/remixicon/remixicon.css') }}" rel="stylesheet">
@endpush
<div>
    <main class="main">

        <section class="login">

            {{-- IMPORTANTE: Livewire --}}
            <form wire:submit.prevent="authenticate" class="login__form">

                {{-- LOGO --}}
                <figure class="login__logo">
                    <img src="{{ asset('images/login/icon.png') }}" class="login__img">
                </figure>

                <h1 class="login__title">DanteSGA</h1>
                <p class="login__version">Versión 3.0.0</p>

                {{-- MENSAJES DE ERROR --}}
                @error('data.email')
                    <span class="login__respuesta">
                        {{ $message }}
                        <i class="ri-information-2-line"></i>
                    </span>
                @enderror

                <div class="login__content">

                    {{-- USUARIO --}}
                    <div class="login__box inicial">
                        <i class="ri-user-3-line login__icon"></i>

                        <div class="login__box-input">
                            <input
                                type="text"
                                class="login__input"
                                placeholder="Usuario"
                                wire:model.defer="data.email"
                                required
                            >
                        </div>
                    </div>

                    {{-- PASSWORD --}}
                    <div class="login__box inicial">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                            <input
                                type="password"
                                class="login__input"
                                placeholder="Contraseña"
                                wire:model.defer="data.password"
                                required
                            >
                            <i class="ri-eye-off-line login__eye" id="loginEye"></i>
                        </div>
                    </div>

                </div>

                {{-- BOTÓN LOGIN --}}
                <button type="submit" class="login__button">
                    Ingresar
                </button>

                {{-- <div class="login__restore">
                    <span class="login__forgot">
                        ¿Olvidaste tu contraseña?
                    </span>
                </div> --}}

            </form>
        </section>

        <footer class="footer">Creado por Ismac ❤️</footer>

    </main>

    <section class="background" id="particles-js" wire:ignore></section>
</div>
{{-- JS --}}
@push('scripts')
    <script src="{{ asset('js/login/particles.min.js') }}"></script>
    <script src="{{ asset('js/login/main.js') }}"></script>
@endpush
