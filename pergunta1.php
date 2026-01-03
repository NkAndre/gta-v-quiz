<?php
    session_start();
    if(isset($_POST["nome"])){
        $_SESSION["nome"] = $_POST["nome"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu quiz do gta V</title>
       <link rel="stylesheet" href="./css/img/style2.css">
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="image/png">
</head>
<body>

    <div class="forms">

        <!-- tempo de duração, que se inicia no 15s -->
        <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>

        <form id="quizForm" action="pergunta2.php" method="post">

            <img src="./css/img/iconeV.png" alt="icone">

            <div class="question-card">
                <p class="question-text">
                    Quais são os nomes dos 3 protagonistas?
                </p>
            </div>

            <div class="radio-group">
                <label class="radio-option">
                    <input type="radio" name="protagonista" value="errado1">
                    <span class="custom-radio"></span> Michael, Franklin e Edgar
                </label>

                <label class="radio-option">
                    <input type="radio" name="protagonista" value="errado2">
                    <span class="custom-radio"></span> Clynton, Trevor e Michael
                </label>

                <label class="radio-option">
                    <input type="radio" name="protagonista" value="franklin, michael e trevor">
                    <span class="custom-radio"></span> Franklin, Michael e Trevor
                </label>

                <label class="radio-option">
                    <input type="radio" name="protagonista" value="errado3">
                    <span class="custom-radio"></span> CJ, Jhonny e Trevor
                </label>
                
                <input type="radio" name="protagonista" value="tempo_esgotado" id="tempoAcabou" style="display:none">
            </div>

            <p class="inputButton">
                <input type="submit" value="Próximo">
            </p>
        </form> 
    </div>

    <!-- js , aqui vai as funcionalidades  -->
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