<?php
    $golpe = $_POST["golpe"];
   session_start();
    $_SESSION["golpe"] = $golpe;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/img/style2.css">
    <title>meu quiz do gta V </title>
</head>
<body>
     <div class= "forms">
        <form action="relatorio.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
                Qual opcão se voce escolher salve todo mundo?   
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="escolha" value=" opção a">
        <span class="custom-radio"></span>
            opção A
        </label>

        <label class="radio-option">
        <input type="radio" name="escolha" value=" opção b">
        <span class="custom-radio"></span>
        opção B
        </label>

        <label class="radio-option">
        <input type="radio" name="escolha" value="opção c">
        <span class="custom-radio"></span>
           opção C
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>
    
</body>
</html>