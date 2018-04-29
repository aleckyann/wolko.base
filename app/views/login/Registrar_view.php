<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title ?></title>
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS para todas as páginas-->
    <link href="<?= base_url('public') ?>/css/sb-admin.css" rel="stylesheet">
    <!-- Fontawesome 4.7.0-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar uma conta</div>
            <div class="card-body">
                <?php $this->ui->alert_flashdata() ?>
                <form action="<?= base_url('registrar') ?>" method="post">
                    <?=$csrf_input?>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="Nome">Nome completo</label>
                                <input class="form-control" name="nome" id="Nome" type="text" aria-describedby="nameHelp" placeholder="Nome completo" autocomplete="name" minlength=10 required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email">Endereço de e-mail</label>
                        <input class="form-control" name="email" id="Email" type="email" aria-describedby="emailHelp" placeholder="Email" autocomplete="email" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="Senha">Senha de acesso</label>
                                <input class="form-control" name="senha" id="Senha" type="password" placeholder="Senha de acesso" autocomplete="curent-password" minlength=6 required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Registrar</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?= base_url('login') ?>">Autenticar</a>
                    <a class="d-block small" href="<?= base_url('recuperar') ?>">Recuperar acesso</a>
                </div>
                <hr>
                <div class="text-center">
                    <img src="<?=base_url('public/brands/wolko.svg')?>" height="25">
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
