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
        <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>

        <form id ="quizForm"action="pergunta5.php" method="post">
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

        <input type="radio" name="personagem" value="tempo_esgotado" id="tempoAcabou" style="display:none">
            </div>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
        </div>

            </div>

    <script>
        let segundos = 15;
        const display = document.getElementById('tempo');
        const form = document.getElementById('quizForm');

        const contagem = setInterval(() => {
            segundos--;
            display.innerText = segundos;

            if (segundos <= 5) {
                display.classList.add('tempo-acabando');
            }

            if (segundos <= 0) {
                clearInterval(contagem);
                // Marca o campo oculto para o PHP saber que o tempo acabou
                document.getElementById('tempoAcabou').checked = true;
                form.submit();
            }
        }, 1000);
    </script>
</body>
</html>