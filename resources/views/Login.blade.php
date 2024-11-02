@include('layouts.headerindex')

<style>
    /* CSS de Inicio de Sesion */
    .contenedor-login {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .caja-login {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 30px;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .logo-login img {
        max-width: 240px;
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        color: #333;
        text-align: left;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: left;
    }

    .boton-login {
        width: 100%;
        padding: 10px;
        background-color: #c00;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .boton-login:hover {
        background-color: #900;
    }

    .olvido-contrasena {
        display: block;
        margin-top: 10px;
        font-size: 12px;
        color: #007bff;
        text-decoration: none;
    }

    .olvido-contrasena:hover {
        text-decoration: underline;
    }

</style>

<br>
<br>
<!-- Inicio de Sesion -->
<div class="contenedor-login">
    <div class="caja-login">
        <div class="logo-login">
            <img src="{{ asset('images/logo_eduplus.jpeg') }}" alt="EduPlus Logo">
        </div>
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="DNI" class="form-label">DNI</label>
                <input type="text" class="form-control" id="DNI" name="DNI" required>
                @error('DNI')
                    <div class="text-danger">{{ $message }}</div> <!-- Mensaje de error -->
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div> <!-- Mensaje de error -->
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>
</div>
