<?php
    $filhos = $_POST["filhos"];
   session_start();
    $_SESSION["filhos"] = $filhos;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/img/style2.css">
    <title>Meu quiz do gta V</title>
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">
</head>
<body>
    <div class= "forms">
        <form action="pergunta7.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
            Qual nome da tia do franklin?
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="tia" value="tracey">
        <span class="custom-radio"></span>
        Tracey
        </label>

        <label class="radio-option">
        <input type="radio" name="tia" value="denise">
        <span class="custom-radio"></span>
        Denise
        </label>

        <label class="radio-option">
        <input type="radio" name="tia" value="rose">
        <span class="custom-radio"></span>
        rose
        </label>

        <label class="radio-option">
        <input type="radio" name="tia" value="tanisha">
        <span class="custom-radio"></span>
        tanisha
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>
    
</body>
</html>