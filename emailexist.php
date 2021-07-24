<?php 
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
        $email = $mysqli -> real_escape_string($_POST['email']);       
        $sql="SELECT * FROM user WHERE email_user = '$email'";
        $result = $mysqli -> query($sql);
        if ($result->num_rows>0) {
            echo "exist";
        } else {
            echo "ok";
        }   
    }    
?>