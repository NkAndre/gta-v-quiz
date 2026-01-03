<?php
   $city = $_POST["city"];
    session_start();
    $_SESSION["city"] = $city;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/img/style2.css">
    <title>Meu quiz do gta V</title>
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">
</head>
<body>
    <div class= "forms">
        <form action="pergunta4.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
            Qual nome do cachorro do Franklin?
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="dog" value="chop">
        <span class="custom-radio"></span>
        chop
        </label>

        <label class="radio-option">
        <input type="radio" name="dog" value="caramelo">
        <span class="custom-radio"></span>
        caramelo
        </label>

        <label class="radio-option">
        <input type="radio" name="dog" value="billy">
        <span class="custom-radio"></span>
        billy
        </label>

        <label class="radio-option">
        <input type="radio" name="dog" value="zack">
        <span class="custom-radio"></span>
        zack
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>
    
</body>
</html>