<?php session_start();
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="sac";
    $mysqli = new mysqli($severname, $username, $password, $dbname);

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    // Escape special characters, if any
    if($_POST){
        $Geborenals = $mysqli -> real_escape_string($_POST['Geborenals']);
        $Vorname = $mysqli -> real_escape_string($_POST['vn']);
        $Nachname = $mysqli -> real_escape_string($_POST['nn']);
        $eMail = $mysqli -> real_escape_string($_POST['em']);
        $Passwort = $mysqli -> real_escape_string($_POST['pw']);
        $passwd_hash = hash('sha512', $Passwort);  
        $sql="INSERT INTO user (anrede, vorname, nachname, email_user, pwhash) VALUES ('$Geborenals', '$Vorname', '$Nachname', '$eMail', '$passwd_hash')";
    
        if ($mysqli -> query($sql)) {
            $_SESSION['usuario'] = $eMail;
            header('Location: http://www.crewgate.ch/index.php');           
        }
    }
    
    require 'frontend/register-vista.php';
?>