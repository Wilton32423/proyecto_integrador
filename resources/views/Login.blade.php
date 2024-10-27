<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPlus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* CSS de Encabezado */
        .encabezado {
        display: flex;
        align-items: center;
        background-color: #1F308A;
        padding: 10px 20px;
        color: white;
        justify-content: space-between; 
        }

        .contenedor-logo {
            flex: 0 0 auto;
            margin-right: 10px;
            flex: 1;
            display: flex; 
            align-items: center; 
            margin-right: 0px; 
        }

        .logo {
            width: 60px; 
            height: auto;
            margin-right: 0;
        }

        .contenedor-nav {
            display: flex;
            align-items: center;
            justify-content: flex-end; 
            flex: 1; 
        }

        .titulo {
            font-size: 24px;
            margin: 0;
            padding-left: 5px;
            color: white;
            font-weight: bold;
        }

        .navegacion {
            display: flex;
            gap: 20px;
            align-items: center;
            
        }

        .navegacion a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0 15px;
        }

        .navegacion .intranet {
            background-color: #C00;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        .navegacion .intranet:hover {
            background-color: #900;
        }

        .navegacion a:hover {
            text-decoration: underline;
        }

        
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

        /* Pie de Página */
        .pie-pagina {
        background-color: #1F308A; 
        color: white;
        text-align: center;
        padding: 15px;
        position: fixed;
        bottom: 0;
        width: 100%;
        font-size: 14px;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }

        .pie-pagina p {
            margin: 5px 0;
        }
    </style>

</head>
<body>
    <!-- Encabezado -->
    <header class="encabezado">
        <div class="contenedor-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Emilio del Solar Logo" class="logo">
                <h1 class="titulo">EduPlus</h1>
        </div>
        <div class="contenedor-nav">
            <nav class="navegacion">
                <a href="#">Propuesta Educativa</a>
                <a href="#">Nosotros</a>
                <a href="#">Anuncios</a>
                <a href="#">Contáctenos</a>
                <a href="#" class="intranet">INTRANET</a>
            </nav>
        </div>
    </header>
        <br>

    <!-- Inicio de Sesion -->
    <div class="contenedor-login">
        <div class="caja-login">
            <div class="logo-login">
                <img src="{{ asset('images/logo_eduplus.jpeg') }}" alt="EduPlus Logo">
                
            </div>
            <form>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" placeholder="Usuario">
                
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" placeholder="Contraseña">
                
                <button type="submit" class="boton-login">Ingresar</button>
                <a href="#" class="olvido-contrasena">¿Olvidó su contraseña?</a>
            </form>
        </div>
    </div>
    
    <!-- Pie de Página -->
    <div class="pie-pagina">
        <p>EMILIO DEL SOLAR</p>
        <p>Información adicional o texto de contacto aquí</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>