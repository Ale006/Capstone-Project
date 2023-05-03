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
        <a class="acceso" href="">INGRESAR AL SISTEMA</a>
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