<?php
 // Recebe o dado (nome no caso) enviado pelo formulário anterior via POST
    $nome = $_POST["nome"];
    
    // Inicia a sessão (obrigatório antes de usar $_SESSION)

   session_start();
    $_SESSION["nome"] = $nome;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu quiz do gta V</title>
      <link rel="stylesheet" href="./css/img/style2.css">
      
        <!-- Ícone do site (favicon) -->
      <link rel="shortcut icon" href="./CSS/img/iconeV.png" type="icone do gta 5">
</head>
<body>
     <!-- Container principal -->
    <div class= "forms">

        <!-- Formulário envia os dados para a próxima pergunta -->
        <form action="pergunta2.php" method="post">

        <!-- Logo do GTA -->
        <img src="./css/img/iconeV.png" alt="icone">

        <!-- Card da pergunta -->
        <div class="question-card">
            <p class="question-text">
            Quais são os nomes dos 3 protagonistas?
            </p>
        </div>

        <!-- Grupo das alternativas -->
        <div class="radio-group">

        <!-- Alternativa 1 (ERRADA) -->
        <label class="radio-option">
        <input type="radio" name="protagonista" value="michael,edgard,  franklin">
        <span class="custom-radio"></span>
        Michael, Franklin e Edgar
        </label>

        <!-- Alternativa 2 (ERRADA) -->
        <label class="radio-option">
        <input type="radio" name="protagonista" value="clynton,trevor,  michael">
        <span class="custom-radio"></span>
        Clynton, Trevor e Michael
        </label>

        <!-- Alternativa 3 (CORRETA) -->
        <label class="radio-option">
        <input type="radio" name="protagonista" value="franklin, michael e trevor">
        <span class="custom-radio"></span>
        Franklin, Michael e Trevor
        </label>

        <!-- Alternativa 4 (ERRADA) -->   
        <label class="radio-option">
        <input type="radio" name="protagonista" value="cj,jhonny,trevor">
        <span class="custom-radio"></span>
        CJ, Jhonny e Trevor
        </label>

        <!-- Botão de envio -->
        <p class="inputButton"> <input type="submit" value="Próximo">
    </div><!-- fecha radio-group -->
        </form> <!-- fecha o form -->
    </div>
    
</body>
</html>