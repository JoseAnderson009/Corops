<html>

<head>
    <title>
        Corops
    </title>
    <link rel="stylesheet" href="Corops/Corops.css">
    <link rel="stylesheet" href="Corops/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="shortcut icon" href="Corops/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Corops/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="header">
        <div class="header2">
            <a href="Prueba.php"><img src="Corops/attachment_72896196.png" style="width: 32px;height: 32px;position: relative;top: 10px;left: 20px;width: 45px;height: 45px;"></a>
            <span class="texto_header">orops</span>
            <a href="Prueba2.php" class="texto2_header">Busco Empleo</a>
            <a href="Prueba4.php" style="position: relative;top: 12px;left:1170px">Borrar CV</p></a>
        </div>
    </div>

    <p class="titulo">Formulario de Empleo</p>

    <div class="container1">
        <form action="Prueba3.php" method="post"  enctype="multipart/form-data">
            <input type="text" name="Nombre" placeholder="Nombre" class="formulario"><br><br>
            <input type="number" name="Edad" placeholder="Edad" class="formulario2"><br><br>
            <input type="text" name="Ocupación" placeholder="Ocupación" class="formulario3"><br><br>
            <input type="text" name="Estudios" placeholder="Estudios" class="formulario4"><br><br>
            <textarea name="curriculum" placeholder="***Aquí va el currículum***" cols="60" rows="3"></textarea><br><br>
            <input type="file" name="foto"><br><br>
            <input type="submit" value="Enviar" class="Enviar"><br>
        </form>
        <a href="Prueba4.php" style="width: 500px">Borrar curriculum...</a>
    </div>
    <div class="futel" style="position: relative;top:300px">
        <img src="Corops/attachment_72896196.png" style="height: 85px;width: 85px;">
        <p class="texto_futel">orops</p>
        <p class="texto2_futel" style="position: relative;bottom: 80px;left:250px;color: #f48024;">Privicy</p>
        <p class="texto2_futel" style="position: relative;bottom: 116px;left:340px;color: #f48024;">Terms</p>
        <p class="texto2_futel" style="position: relative;bottom: 153px;left:430px;color: #f48024;">Proyectos</p>
    </div>

</body>