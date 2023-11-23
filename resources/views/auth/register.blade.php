<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutOsiris</title>

    {{-- Estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Users/auth-styles.css") }}">
</head>
<body>
    <div class="header">
        <img src="{{ asset("assets/img/Admin/modules/Logo S.I. AutOsiris.png") }}" alt="Logo AutOsiris">
        Miscelánea y Papelería Osiris
    </div>
    <section class="content">
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf
            <div class="content-form">
                <div class="title-form">
                    <h2>Registrarse</h2>
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Escribe tu Nombre">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Escribe tu Correo Electrónico">
                </div>
                <div class="form-group">
                    <label for="email">Contraseña</label>
                    <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Escribe tu Contraseña">
                </div>
                <div class="cont-btn">
                    <button class="btn" type="submit">
                        Registrarse
                    </button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
