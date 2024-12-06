<?php include_once "../config/config.php";

$error = false;

$_SESSION['userLogged'] = "Breno";

if ($error) {
    header("location: ../login.php?error=Senha ou Email não existe");
} else {
    header("location: ../index.php");
}
