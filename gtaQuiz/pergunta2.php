<?php
    $protagonista = $_POST["protagonista"];
   session_start();
    $_SESSION["protagonista"] = $protagonista;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/img/style2.css">
          <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">

    <titl></title>
</head>
<body>
     <div class= "forms">
        <form action="pergunta3.php" method="post">
        <img src="./css/img/iconeV.png" alt="">
        <div class="question-card">
            <p class="question-text">
            Em qual cidade acontece gta V?
            </p>
        </div>

        <div class="radio-group">

        <label class="radio-option">
        <input type="radio" name="city" value="libert city">
        <span class="custom-radio"></span>
        libert city
        </label>

        <label class="radio-option">
        <input type="radio" name="city" value="San fierro">
        <span class="custom-radio"></span>
        San Fierro
        </label>

        <label class="radio-option">
        <input type="radio" name="city" value="Vice city">
        <span class="custom-radio"></span>
        Vice city
        </label>

        <label class="radio-option">
        <input type="radio" name="city" value="los santos">
        <span class="custom-radio"></span>
        Los Santos
        </label>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
    </div>
    
</body>
</html>