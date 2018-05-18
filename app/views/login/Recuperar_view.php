<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url('public/brands/favicon.png') ?>" type="image/x-icon" />
    <meta name="description" content="Recuperar senha de acesso">
    <meta name="author" content="WOLKO">
    <title><?= $title ?></title>
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS para todas as páginas-->
    <link href="<?= base_url('public') ?>/css/admin.css" rel="stylesheet">
    <!-- Fontawesome 4.7.0-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header"><i class="fa fa-life-ring" aria-hidden="true"></i> Recuperar senha de acesso</div>
            <div class="card-body">
                <?=$this->ui->alert_flashdata()?>
                <div class="text-center mt-4 mb-5">
                    <h4>Perdeu sua senha de acesso?</h4>
                    <p>Insira seu e-mail de acesso e verifique as instrunções enviadas para o seu e-mail.</p>
                </div>
                <form action="<?= base_url('recuperar') ?>" method="post">
                    <?=$csrf_input?>
                    <div class="form-group">
                        <label for="Email">Email de acesso:</label>
                        <input class="form-control text-center" id="Email" name="email" type="email" aria-describedby="emailHelp" placeholder="Email de acesso" required autocomplete="email" value="<?= get_cookie('email')?>" autofocus>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Resetar senha de acesso</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="<?=base_url('login')?>">Autenticar</a>
                    <a class="d-block small" href="<?=base_url('registrar')?>">Registrar</a>
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
