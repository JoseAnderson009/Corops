<html>

<head>
    <title>
        Corops
    </title>
    <link rel="stylesheet" href="Corops/Corops.css">
    <link rel="stylesheet" href="Corops/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <p class="titulo">Formulario Borrado</p>
    <a href="Prueba.php" style="position: relative;top:150px;left:700px">Volver al inicio...</a>
    <div class="futel" style="position: relative;top:500px">
        <img src="Corops/attachment_72896196.png" style="height: 85px;width: 85px;">
        <p class="texto_futel">orops</p>
        <p class="texto2_futel" style="position: relative;bottom: 80px;left:250px;color: #f48024;">Privicy</p>
        <p class="texto2_futel" style="position: relative;bottom: 116px;left:340px;color: #f48024;">Terms</p>
        <p class="texto2_futel" style="position: relative;bottom: 153px;left:430px;color: #f48024;">Proyectos</p>
    </div>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "corops") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from corops
    where Nombre='$_REQUEST[Nombre]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from corops where Nombre='$_REQUEST[Nombre]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "";
    } else {
        echo "";
    }
    mysqli_close($conexion);
    ?>
</body>