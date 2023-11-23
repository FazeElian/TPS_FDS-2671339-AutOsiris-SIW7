<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutOsiris | Iniciar Sesión</title>

    {{-- Estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Users/auth-styles.css") }}">
</head>
<body>
    <div class="header">
        <img src="{{ asset("assets/img/Admin/modules/Logo S.I. AutOsiris.png") }}" alt="Logo AutOsiris">
        Miscelánea y Papelería Osiris
    </div>
    <section class="content">
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <div class="content-form">
                <div class="title-form">
                    <h2>Iniciar Sesión</h2>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                    <label for="email">Contraseña</label>
                    <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Escribe tu Contraseña">
                    <div class="cont-reset-pass">
                        Olvidó su contraseña? <a href="{{ route("password.request") }}">Reestablézcala dando click aquí</a>
                    </div>
                </div>

                <div class="cont-btn">
                    <button class="btn" type="submit">
                        Iniciar Sesión
                    </button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>

{{-- @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderr
{{-- @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderr
{{-- @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
@endif --}}

