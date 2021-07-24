<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('Location: http://www.crewgate.ch/index.php');
    }
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="sac";   
    $error = '';    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){               
        try{
            $mysqli = new mysqli($severname, $username, $password, $dbname);              
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }                   
        $email = $mysqli -> real_escape_string($_POST['em']);
        $passwd = $mysqli -> real_escape_string($_POST['pw']);
        $hash = hash('sha512', $passwd);          
        $sql="SELECT * FROM user WHERE email_user='$email' AND pwhash='$hash'";      
        $result = $mysqli -> query($sql);
        if ($result->num_rows>0)  {
            $_SESSION['usuario'] = $email;
            header('Location: http://www.crewgate.ch/index.php');
        } else {
            return;
            header('Location: login.php');
        }        
    }
    
require 'frontend/login-vista.php';


?>