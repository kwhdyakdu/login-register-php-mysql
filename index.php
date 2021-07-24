<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('Location: http:// www.crewgate.ch/index ');
    }else{
        header('Location: login.php');
    }


?>