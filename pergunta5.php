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

    
        <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>

        <form id="quizForm" action="pergunta6.php" method="post">
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

            <input type="radio" name="filhos" value="tempo_esgotado" id="tempoAcabou" style="display:none">
            </div>
         <p class="inputButton"  > <input type="submit" value="Próximo">

    </div>
        </form>
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