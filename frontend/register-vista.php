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
        <div class="form_content register">      
       
            <div class="menu">
                <a href="login.php"><li class="module-login">Login</li></a>
                <span>&nbsp; | &nbsp;</span>
                <a href="register.php"><li class="module-register active">Register</li></a>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form" id="register_form">
            
            <div>                                                
                <select name="Geborenals" class="select_field" style="font-size: 12px" id="pet-select">
                <option value="Herr">Knabe</option>
                <option value="Frau">Mädchen</option>
                </select>
                <p>Geboren als</p>
            </div>
            <div>
                <input type="text" size="45" class="input_field" name="vn" id="vn">
                <p>Vorname</p>
            </div>
            <div>
                <input type="text" size="45" class="input_field" name="nn" id="nn">
                <p>Nachname</p>
            </div>
            <div>
                <input type="email" size="45" class="input_field" name="em" id="em">
                <p>E-Mail</p>
                <label class="alert" id="email_conf">Diese Email existiert bereits</label>
            </div>
            <div>
                <input type="password" class="input_field" name="pw" id="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Muss mindestens eine Zahl und einen Groß- und Kleinbuchstaben sowie mindestens 8 oder mehr Zeichen enthalten" required>
                <p>Passwort</p>
            </div>
            <div>
                <input type="password" class="input_field" name="pwd" id="pwd">
                <p>Passwort wiederholen</p>
                <label class="alert" id="confirm">Nicht bestätigt</label>
            </div>
            <div>
                <input type="checkbox"  name="AGBs" id="AGBs">
                <span>Lch akzeptiere die<a href="#">&nbsp;AGBs</a></span>                
            </div>
            
                <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            <div class="btn">
            <input type="submit" class="regi_btn" id="register_btn" disabled value="registrieren" />
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
    <script src="./js/jquery.js"></script>
    <script src="./js/register_script.js"></script>
</body>
</html>