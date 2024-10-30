<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPlus Intranet</title>
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
                <a href="#">Anuncios</a>
                <a href="#">Docentes</a>
                <a href="#">Quejas</a>
                <a href="#">Notas</a>
                <a href="#">Horarios</a>
                <a href="#" class="intranet">INTRANET</a>
            </nav>
        </div>
    </header>
    <!-- Pie de Página -->
    <div class="pie-pagina">
        <p>EMILIO DEL SOLAR</p>
        <p>Información adicional o texto de contacto aquí</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>