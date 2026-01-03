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
            
     
        <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>

        <form id="quizForm" action="pergunta7.php" method="post">
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

        <input type="radio" name="tia" value="tempo_esgotado" id="tempoAcabou" style="display:none">
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