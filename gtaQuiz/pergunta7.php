<?php
    $tia = $_POST["tia"];
   session_start();
    $_SESSION["tia"] = $tia;
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
        <form action="pergunta8.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
                qual nome do ultimo golpe?   
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="golpe" value="o assalto">
        <span class="custom-radio"></span>
        o assalto
        </label>

        <label class="radio-option">
        <input type="radio" name="golpe" value="the final">
        <span class="custom-radio"></span>
        The final 
        </label>

        <label class="radio-option">
        <input type="radio" name="golpe" value="o grande golpe">
        <span class="custom-radio"></span>
        o grande golpe
        </label>

        <label class="radio-option">
        <input type="radio" name="golpe" value="o ato">
        <span class="custom-radio"></span>
        o ato
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>
    
</body>
</html>