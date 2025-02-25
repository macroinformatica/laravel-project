<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ __('Purple Admin - Login') }}</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('admin/asset/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/vendors/font-awesome/css/font-awesome.min.css') }}">
    
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/asset/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/asset/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo text-center">
                                <img src="{{ asset('admin/asset/images/logo.svg') }}" alt="Logo">
                            </div>
                            <h4>{{ __('¡Hola! Vamos a comenzar') }}</h4>
                            <h6 class="font-weight-light">{{ __('Inicia sesión para continuar.') }}</h6>

                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <!-- Email -->
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" 
                                           placeholder="{{ __('Correo electrónico') }}" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" 
                                           placeholder="{{ __('Contraseña') }}" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Botón de inicio de sesión -->
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                        {{ __('INICIAR SESIÓN') }}
                                    </button>
                                </div>

                                <!-- Opciones adicionales -->
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> {{ __('Mantener sesión iniciada') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="auth-link text-primary">{{ __('¿Olvidaste tu contraseña?') }}</a>
                                    @endif
                                </div>

                                <!-- Registro -->
                                @if (Route::has('register'))
                                    <div class="text-center mt-4 font-weight-light">
                                        {{ __('¿No tienes una cuenta?') }} <a href="{{ route('register') }}" class="text-primary">{{ __('Crear cuenta') }}</a>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Plugins -->
    <script src="{{ asset('admin/asset/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/asset/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/asset/js/misc.js') }}"></script>
    <script src="{{ asset('admin/asset/js/settings.js') }}"></script>
    <script src="{{ asset('admin/asset/js/todolist.js') }}"></script>
    <script src="{{ asset('admin/asset/js/jquery.cookie.js') }}"></script>
</body>

</html>
