<?php
    $dog = $_POST["dog"];
    session_start();
    $_SESSION["dog"] = $dog;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/img/style2.css">
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">

    <title>Meu quiz do gta V</title>
</head>
<body>
     <div class= "forms">
        <form action="pergunta5.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
            Qual personagem mora no interior?
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="personagem" value="lester">
        <span class="custom-radio"></span>
        Lester
        </label>

        <label class="radio-option">
        <input type="radio" name="personagem" value="lamar">
        <span class="custom-radio"></span>
        Lamar
        </label>

        <label class="radio-option">
        <input type="radio" name="personagem" value="dave norton">
        <span class="custom-radio"></span>
        dave norton
        </label>

        <label class="radio-option">
        <input type="radio" name="personagem" value="Trevor phillips">
        <span class="custom-radio"></span>
        Trevor Phillips
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>
</body>
</html>