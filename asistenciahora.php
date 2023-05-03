
<?php

session_start();
    //DB
    include_once 'BD/db.php';
    //Controller
    include_once 'Controller/UController.php';
    include_once 'Controller/PController.php';
    include_once 'View/Layout/header.php';
    // Body
    if(isset($_GET['page'])&&!empty($_GET['page']))
    {
        $page = $_GET['page'];
        if($page=='home'||$page=='personalJJB'||$page=='personalSideruk'||$page== 'personalYerm'||$page=='Asistencias'||$page=='personalList'||$page== 'detallesPersonal'||$page='horarioAdmin'||$page='horarioOp'||$page=='pagosAdm'||$page=='pagosOpe'||$page=='registroUs'||$page=='planRegistro'||$page=='dpEdit'||$page=='plEdit')
        {
            require_once 'View/Content/'.$_GET['page'].'.php';
        }
        else
        {
            require_once 'View/Content/home.php';
        }
    }
    else
    {
        //require_once 'View/Content/home.php'; //body
    }
    // Footer
    //include_once './View/Layout/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASISTENCIA</title>
    <link rel="stylesheet" href="assets/css/cs-asistencia.css">
</head>
<body>
    <h1>CONTROL DE ASISTENCIA, NATURAL CENTRIC</h1>
    <h2 id="fecha"></h2>
    <div class="container">
        <!--<a class="acceso" href="">INGRESAR AL SISTEMA</a>-->
        <p class="dni">DOCUMENTO DE IDENTIDAD</p>
        <form class="fondo" action="">
            <input type="text" placeholder="DNI EMPLEADO" name="txtdni">
            <div class="botones">
                <a class="entrada" href="">MARCAR ENTRADA</a>
                <a class="salida" href="">MARCAR SALIDA</a>
            </div>
        </form>
    </div>

    <script>
        setInterval(() => {
            let fecha = new Date();
            let fechaHora = fecha.toLocaleString();
            document.getElementById("fecha").textContent = fechaHora;
        }, 1000);
    </script>
</body>
</html>

<?php
include_once './View/Layout/footer.php';
?>