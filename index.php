<?php include "CtrlSession.php"; ?>

<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
    <meta name="author" content="Proyecto Web 2.0" />
    <title>Proyecto Web 2.0</title>
    <link rel="stylesheet" href="../styleIndex.css" />
</head>

<body>

    <!-- SECCION CONTENIDO -->
    <div id="contenido">
        <fieldset id="dsc">
            <legend>Descripción</legend>
            <p>
                Continuando con las ampliaciones al MiniSistema CRUD de Personas, en esta versión implementamos <b>cookies</b> para controlar la duración de la sesión. Cada vez que el usuario es reconocido com tal en la Base de Datos, y se crea la sesión
                habilitando el loguin, también se creará una cookie en el cliente, almacenando la hora en que ingresó. Una cookie no es más que un archivo de texto que puede almacenar datos simples del lado del cliente.<br /> Por tanto el proceso de control
                de sesión deberá además verificar si existe la cookie, tomar el valor y cotejar que no haya pasado el tiempo establecido. En cuyo caso se destruye la sesión y se envía un mensaje anunciando que debe volver a iniciarla.
            </p>
        </fieldset>
    </div>

</body>

<?php
// Test COOKIE
// $cookie_name = "CK_login";

// if(!isset($_COOKIE[$cookie_name])) {
//     echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }
?>
</html>