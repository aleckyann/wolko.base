<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WOLKO® - Página movida, removida ou não existe.">
    <meta name="author" content="WOLKO® - Engenharia e Tecnologia">
    <link rel="icon" href="<?= base_url("public/")?>favicon.png">

    <title>WOLKO® - Página não encontrada</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("public/css/")?>bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url("public/css/")?>floating-labels.css" rel="stylesheet">
  </head>

  <body>
    
    <div class="container">x
        <h1 class="text-center"><span style="font-size:5em">404</span></h1>
        <h4 class="text-center"><code title="Essa url não existe ou foi removida." style="cursor:help"><?= current_url() ?></code></h4>
        <hr>
        <div class="text-center">
            <a href="<?= base_url('login')?>" class="btn btn-dark">Página de login</a>
        </div>
    </div>

  </body>
</html>
