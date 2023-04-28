<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/estilo.css">
    <link rel="stylesheet" href="/assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
        <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" target="_blank" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <?php
            // include $_GET['dir'] . '/' . $_GET['file'] . '.php';
            // include "{$_GET['dir']}/{$_GET['file']}.php";
            include __DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php";
            ?>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS &copy <?= date('Y') ?>
    </footer>
</body>
</html>