<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8" />
    <title>  PHP Form Validation Example </title>
    <style>
        label {
            width: 110px;
            display: inline-block;
            vertical-align: top;
            margin: 6px;
            text-align: justify;
            }
        
        span {
            font-weight: bold;
            font-style: normal;
            color: #f00;
            }
        
        input:focus, textarea:focus, select:focus {
            background: #eaeaea;
            }

        select, textarea{
            width: 150px;
        }

        form{
            text-align: center;
            background-color: rgb(233, 225, 225);
            padding:80px;
            margin-left: 400px;
            margin-right: 400px;

            }
    
        .error {
            font-size:15px;
            color: #FF0000;
            }
        table{
            width: 50%;
            text-align: center;
            border: 1px solid black;
            margin-left: 25%;
        }
      
    </style>
    </head>
    
    <body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $telephoneErr = $objetErr = $messageErr= $villeErr = "";
    $name = $email = $telephone = $objet = $message= $ville =  "";
         
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST["submit"])){

    }
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["name"])) {
            $nameErr = " Ce champs est obligatoire !  ";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Seulement les lettres et les espaces sont permis ";
            }
        }

        if (empty($_POST["ville"])) {
            $villeErr = " Ce champs est obligatoire ! ";
        } else {
            $ville = test_input($_POST["ville"]);

        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Ce champs est obligatoire ! ";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ ", $email)) { 
                $emailErr = " Adresse email saisie est invalide !";
            }
            }
            
        if (empty($_POST["telephone"])) {
            $telephoneErr = " Ce champs est obligatoire ! ";
        } else {
            $telephone = test_input($_POST["telephone"]);
            if( !preg_match ( "/[0]{1}[6-7]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}/" , $telephone)){
                $telephoneErr = " le champs téléphone doit ête sous la forme (06 ou 07 ) 00 00 00 00 !";
            }  
        }
        
        
        if (empty($_POST["objet"])) {
            $objetErr = "Ce champs est obligatoire ! ";
        } else {
            $objet = test_input($_POST["objet"]);
        }
        
        
        if (empty($_POST["message"])) {
            $messageErr = " Ce champs est obligatoire ! ";
        } else {
            $message = test_input($_POST["message"]);

        }
        }
   

    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    
        <label> Nom & Prénom:</label> <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>

        <label> Ville:</label> <input type="text" name="ville" value="<?php echo $ville;?>">
        <span class="error">* <?php echo $villeErr;?></span>
        <br><br>

        <label>Téléphone:</label> <input type="text" name="telephone" value="<?php echo $telephone;?>">
        <span class="error"> * <?php echo $telephoneErr;?></span>
        <br><br>
                
        <label> E-mail:</label><input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
            
        <label> Objet:</label> 
        <select name="objet" value="<?php echo $objet;?>">
                    <option>Simple information</option>
                    <option>Probleme technique</option>
                    <option>Proposition de projet</option>
                </select>
        <span class="error">* <?php echo $objetErr;?></span>
        <br><br>
                
        <label> Message:</label> <textarea name="message" value="<?php echo $message;?>"></textarea>
        <span class="error"> * <?php echo $messageErr;?></span>
        <br><br>
                
        <input type="submit" name="submit" value="Envoyer">
        
    </form>
    
</body>
    
</html>
