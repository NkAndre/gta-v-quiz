<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/img/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Meu quiz do gta V</title>
         <link rel="shortcut icon" href="./css/img/iconeV.png" type="icone do gta 5">
</head>
    <body>
        <!-- o inicio do forms -->
    <div class="forms">
        <form action="pergunta1.php" method="post" id="formQuiz">
            <img src="./css/img/iconeV.png" alt="">

            <p class="classe-p">
            <label>Digite seu nome :</label>
            </p>

            <p class="inputText">
            <input type="text" name="nome" required placeholder="Nome">
            </p>

            <p class="inputButton">
            <input type="submit" value="enviar">
            </p>
        </form>
    </div>
    <!-- o fechamento do forms -->

    <!-- MODAL -->
        <div class="modal" id="modal">
            <div class="modal-box">
                <p> Pronto para começar?</p>
                <button id="confirmar">Começar</button>
                <button id="cancelar">Cancelar</button>
            </div>
        </div>

        <!-- eu não quiz fazer o js em arqivo separado -->
    <script>
        const form = document.getElementById("formQuiz");
        const modal = document.getElementById("modal");
        const confirmar = document.getElementById("confirmar");
        const cancelar = document.getElementById("cancelar");

            form.addEventListener("submit", function(e) 
            {
            e.preventDefault(); // impede envio direto
            modal.style.display = "flex";
            });

            confirmar.addEventListener("click", function() 
            {
            form.submit(); // envia de verdade
            });

        cancelar.addEventListener("click", function() 
        {
        modal.style.display = "none";
        });
    </script>
    <!-- fechamento do js de cria -->

    </body>
</html>