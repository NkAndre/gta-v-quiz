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
        <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>

        <form id ="quizForm" action="relatorio.php" method="post">
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
            <input type="radio" name="escolha" value="tempo_esgotado" id="tempoAcabou" style="display:none">
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