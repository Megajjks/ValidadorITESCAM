<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css.map">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/test.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:700&display=swap" rel="stylesheet">
    <title>Validador</title>
</head>
<body>
    <nav class="navset navbar-fixed-top">
        <div class="col-md-4 itescamlog">
            <img src="img/itescam.png" >
        </div>
        <div class="col-md-4 usernamenav">5871</div>
        <div class="col-md-4 menunav">
            <a href="/dasboard-estudiante"><div class="item">Asignaturas</div></a>
            <a href="/"><div class="item">Salir</div></a>
        </div>
    </nav>
    <div class="col-md-12">
        @yield('content')
    </div>
</body>
</html>