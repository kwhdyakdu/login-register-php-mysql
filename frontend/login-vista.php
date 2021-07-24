
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Register</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">        
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <header>
        <div class="logo_var_white"></div>   
        <div class="logo_var_blue"></div>   
        <div class="logo_var_black">
            <p class="sub_title">WHERE QUALITY COMES TOGETHER</p>
        </div>  
        <img class="logo_img" src="./image/crewgate_sml - copy.png" alt="">       
        <img class="logo_slogon" src="./image/crewgate schriftzug weiss.png" alt="">       
</header>
    <div class="main_content">    
        <img src="./image/sailboat-1149519_1920.jpg" class="backgrounddiv">
        <img src="./image/mannsgoeggel_rund.png" class="user_avatar"/>           
        <div class="form_content login">           
        
            <div class="menu">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <span>&nbsp; | &nbsp;</span>
                <a href="register.php"><li class="module-register">Register</li></a>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form" id="login">
            
            <div>
                <input type="email" size="45" class="input_field" name="em" id="em">
                
                <p>E-Mail</p>
            </div>
            <div>
                <input type="password" size="45" class="input_field" name="pw" id="pw">
                <p>Passwort</p>
            </div>
            <?php
            if(isset($_SESSION["error"])){
                $error = $_SESSION["error"];
                echo "<span>$error</span>";
            }
            ?>            
            <div class="btn">
            <input type="submit" value="anmelden" id="login_btn" class="login_btn" disabled />
                </div>            
            </form>
        </div>
        <div class="footer_var"></div>
    </div>                   
    </div></div></div>
    <div class="footer">
       
        <div class="footer_content">
            <span>Impressum</span>
            <span>Datenschutz</span>
            <span>Über uns</span>
        </div>
    </div>    
    <script src="js/jquery.js"></script>
    <script src="js/login_script.js"></script>
</body>
</html>