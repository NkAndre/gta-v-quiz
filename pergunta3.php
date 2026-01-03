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
    <link rel="stylesheet" href="./css/img/style2.css">
    <title>Meu quiz do gta V</title>
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">
</head>
<body>
    <div class= "forms">
         <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>
        
        <form id="quizForm" action="pergunta4.php" method="post">
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

        <input type="radio" name="dog" value="tempo_esgotado" id="tempoAcabou" style="display:none">
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
                // Agora o elemento 'tempoAcabou' e 'quizForm' existem!
                document.getElementById('tempoAcabou').checked = true;
                form.submit();
            }
        }, 1000);
    </script>
    
</body>
</html>