<?php
//aqui se va a comprobar si los datos estan en la base de datos.

session_start();

$_SESSION['username'] = $_POST['inputUsername'];

echo "Iniciando sesión. Si no te redirige haz clic <a href="../">aquí</a>
<script>window.location.replace("../");</script>";

?>