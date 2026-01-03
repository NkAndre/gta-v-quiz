<?php
    session_start();
    if(isset($_POST["protagonista"])){
        $_SESSION["protagonista"] = $_POST["protagonista"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/img/style2.css">
    <link rel="shortcut icon" href="./css/img/iconeV.png" type="image/png">
    <title>Pergunta 2 - GTA V</title>
</head>
<body>
    <div class="forms">
        <div class="timer-container">
            TEMPO: <span id="tempo">15</span>s
        </div>

        <form id="quizForm" action="pergunta3.php" method="post">
            <img src="./css/img/iconeV.png" alt="icone">
            <div class="question-card">
                <p class="question-text">Em qual cidade acontece GTA V?</p>
            </div>

            <div class="radio-group">
                <label class="radio-option">
                    <input type="radio" name="city" value="liberty city">
                    <span class="custom-radio"></span> Liberty City
                </label>

                <label class="radio-option">
                    <input type="radio" name="city" value="san fierro">
                    <span class="custom-radio"></span> San Fierro
                </label>

                <label class="radio-option">
                    <input type="radio" name="city" value="vice city">
                    <span class="custom-radio"></span> Vice City
                </label>

                <label class="radio-option">
                    <input type="radio" name="city" value="los santos">
                    <span class="custom-radio"></span> Los Santos
                </label>
                
                <input type="radio" name="city" value="tempo_esgotado" id="tempoAcabou" style="display:none">
            </div>

            <p class="inputButton">
                <input type="submit" value="Próximo">
            </p>
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