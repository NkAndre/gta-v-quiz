<?php
// Nome do arquivo onde o ranking é salvo
$arquivo = "ranking.txt";

// Array que vai guardar os jogadores e pontuação
$ranking = [];

// Verifica se o arquivo de ranking existe
if (file_exists($arquivo)) {

     // Lê o arquivo linha por linha
    // IGNORA quebras de linha e linhas vazias
    $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Percorre cada linha do arquivo
    foreach ($linhas as $linha) {

        // Confere se a linha contém o separador "|"
        if (str_contains($linha, "|")) {

            // Separa nome e pontos
            list($nome, $pontos) = explode("|", $linha);

            // Adiciona ao array de ranking
            $ranking[] = [
                "nome" => trim($nome),         // remove espaços extras
                "pontos" => (int)$pontos      // converte pontos para inteiro

            ];
        }
    }

     // Ordena o ranking do MAIOR para o MENOR número de pontos
    usort($ranking, fn($a, $b) => $b["pontos"] <=> $a["pontos"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ranking do Quiz GTA V</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte externa --> <!-- recomendo,mt boa ! -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

      <!-- CSS do ranking -->
    <link rel="stylesheet" href="./css/img/style3.css">
</head>
<body>

<div class="card">
    <h2>🏆 Ranking Geral</h2>

    <div class="ranking">
        <?php
        if (empty($ranking)) {
             // Se não houver ninguém no ranking
            echo "<p>Ninguém jogou ainda 😢</p>";
        } else {
          // Começa a contagem da posição
            $posicao = 1;

            // Limita o ranking aos 10 primeiros jogadores
            foreach (array_slice($ranking, 0, 10) as $jogador):

                $medalha = match ($posicao) { // Define medalha conforme a posição
                    1 => "🥇",
                    2 => "🥈",
                    3 => "🥉",
                    default => "#$posicao"
                };
        ?>

             <!-- Linha individual do ranking -->
            <div class="linha-ranking posicao-<?= $posicao ?>">
                <span><?= $medalha ?></span>

                <!-- htmlspecialchars evita XSS (ponto MUITO positivo) -->
                <span><?= htmlspecialchars($jogador["nome"]) ?></span>
                <span><?= $jogador["pontos"] ?>/8</span>
            </div>
        <?php

                // Incrementa a posição
                $posicao++;
            endforeach;
        }
        ?>
    </div>

        <!-- Volta para o início do quiz, boa sorte !! -->
    <a href="index.php" class="btn-refazer">Voltar ao Quiz</a>
</div>

</body>
</html>

