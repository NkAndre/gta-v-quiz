<?php
    $personagem = $_POST["personagem"];
    session_start();
    $_SESSION["personagem"] = $personagem;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/img/style2.css">
    <title>Está gostando? meu git - nkAndre</title>
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">
</head>
<body>
     <div class= "forms">
        <form action="pergunta6.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
            Qual nome dos dois filhos de Michael?
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="filhos" value="lamar e connor">
        <span class="custom-radio"></span>
        lamar e connor
        </label>

        <label class="radio-option">
        <input type="radio" name="filhos" value="amanda">
        <span class="custom-radio"></span>
        Amanda
        </label>

        <label class="radio-option">
        <input type="radio" name="filhos" value="jimmy e tracey">
        <span class="custom-radio"></span>
        jimmy e Tracey
        </label>

        <label class="radio-option">
        <input type="radio" name="filhos" value="franklin e kendrick">
        <span class="custom-radio"></span>
        Franklin e kendrick
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>
    
</body>
</html>