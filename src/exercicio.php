<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício PHP</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Desenvolvendo PHP</h1>
        <h2>Visualização do Exercício PHP</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo"></div>
        <?php include(__DIR__ . "{$_GET['dir']}/{$_GET['file']}.php") ?>
    </main>
    <footer class="rodape">
        Matheus Cordeiro © <?php date('Y'); ?>
    </footer>
</body>

</html>