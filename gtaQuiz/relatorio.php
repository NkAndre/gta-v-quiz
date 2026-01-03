<?php
    // Recebe a última resposta enviada
    $escolha = $_POST["escolha"];

    // Inicia a sessão
    session_start();

    // Salva a última resposta na sessão
    $_SESSION["escolha"] = $escolha;
    
    // Arquivo do ranking
    $arquivo = "ranking.txt";

    // Inicializa pontuação
    $pontuacao = 0;

/* FUNÇÃO PARA MOSTRAR RESULTADO */
function resultado($resposta, $correta, &$pontuacao) {
    if (strtolower(trim($resposta)) === strtolower(trim($correta))) {
        $pontuacao++;
        return "
        <div class='pergunta correta'>
            <span class='texto'>$resposta</span>
            <span class='icone'>✔️</span>
        </div>";
    } else {
        return "
        <div class='pergunta incorreta'>
            <span class='texto'>$resposta</span>
            <span class='icone'>❌</span>
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/img/style3.css">
</head>
<body>

<div class="card">
    <h2>Respostas do Usuário</h2>

    <p class="nome"><strong>Nome:</strong> <?= $_SESSION["nome"] ?? "Anônimo" ?></p>

    <div class="perguntas">


    <!-- aqui vai mostar a pergunta, e o resultado de cada uma -->
        <p class="titulo">Pergunta 1</p>
        <?= resultado($_SESSION["protagonista"], "franklin, michael e trevor", $pontuacao); ?>

        <p class="titulo">Pergunta 2</p>
        <?= resultado($_SESSION["city"], "los santos", $pontuacao); ?>

        <p class="titulo">Pergunta 3</p>
        <?= resultado($_SESSION["dog"], "chop", $pontuacao); ?>

        <p class="titulo">Pergunta 4</p>
        <?= resultado($_SESSION["personagem"], "trevor phillips", $pontuacao); ?>

        <p class="titulo">Pergunta 5</p>
        <?= resultado($_SESSION["filhos"], "jimmy e tracey", $pontuacao); ?>

        <p class="titulo">Pergunta 6</p>
        <?= resultado($_SESSION["tia"], "denise", $pontuacao); ?>

        <p class="titulo">Pergunta 7</p>
        <?= resultado($_SESSION["golpe"], "o grande golpe", $pontuacao); ?>

        <p class="titulo">Pergunta 8</p>
        <?= resultado($_SESSION["escolha"], "opção c", $pontuacao); ?>

    </div>

    <!-- BARRA DE PROGRESSO -->
    <div class="barra">
        <div class="progresso" style="width: <?= ($pontuacao / 8) * 100 ?>%"></div>
    </div>

    <?php
    /* MENSAGEM FINAL */
    $mensagem = match (true) {
        $pontuacao >= 7 => "🔥 Você é um viciado que nem eu!",
        $pontuacao >= 5 => "😎 Foi bem, dá pra melhorar",
        default => "💀 Precisa jogar mais"
    };
    ?>
    <p class="feedback"><?= $mensagem ?></p>

    <p class="final">Pontuação Final: <?= $pontuacao ?>/8</p>

    <?php // salvando no ranking
    $arquivo = __DIR__ . "/ranking.txt";
    $nome = $_SESSION["nome"] ?? null;

    if ($nome) {
    $nome = trim(str_replace("|", "", $nome));
    file_put_contents($arquivo, $nome . "|" . $pontuacao . PHP_EOL, FILE_APPEND);
    }
    ?>


<a href="ranking.php" class="btn-refazer">Ver Ranking</a>

<!-- meti um css aqui, ta valendo ! abraços -->
<a href="index.php" class="btn-refazer" style="margin-top:10px;">Refazer Quiz</a>
</div>

</body>
</html>

