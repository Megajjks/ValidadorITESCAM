<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css.map">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css.map">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:700&display=swap" rel="stylesheet">
        <title>Validador</title>
    </head>
    <body>
        <div class="col-md-6 panel-log">
            <p class="titulo-index">Bienvenido Estudiante del ITESCAM</p>
            <p class="subtitulo-index">Es tu momento de evaluar con toda la objetividad el material de tus materias para mejorarlo</p>
            <form action="" class="formulario" method="post">
                <label for="" >Matricula</label>
                <input type="number" id="myText"  placeholder="5871">
                <label for="" >Contraseña</label>
                <input id="password" type="password"  placeholder="**********">
            </form>
            <button onclick="myFunction()" class="formulario btn-success">Ingresar</button>
        </div>
        <div class="col-md-6 imagen">
            <img src="img/cover.jpg">
        </div>
    </body>

    <script>
        
        function myFunction(){
            let name = document.getElementById("myText").value;
            let pas = document.getElementById('password').value;
            if(name =='5871'){
            location.href="http://sistemacalificacion.test/dasboard-estudiante"
            console.log('entra al sistema')
            }
            else{
                location.href="http://sistemacalificacion.test/"
                console.log('NO entra al sistema')
            }
            console.log(name);
        }
    </script>
</html>
