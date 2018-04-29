<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <?=$this->ui->alert_flashdata()?>
            <form action="<?= base_url('conta') ?>" method="post">
                <?=$csrf_input?>
                <div class="form-group">
                    <label for="Email">Email de acesso:</label>
                    <input type="text" class="form-control form-control-lg" id="Email" aria-describedby="Nome" required value="<?= $this->session->usuario_email ?>" autocomplete='email' readonly>
                </div>
                <div class="form-group">
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" class="form-control form-control-lg" id="Nome" aria-describedby="Nome" autocomplete='name' required value="<?= $this->session->usuario_nome ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha de acesso:</label>
                    <input type="text" name="senha" class="form-control form-control-lg" id="Senha" placeholder="Sua nova senha de acesso" autocomplete='password'>
                    <small id="Senha" class="form-text text-danger">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Para manter sua senha atual, deixe este campo em branco.
                    </small>
                </div>

                <div class="custom-control custom-checkbox mb-2" id="senhaAlterada">
                    <input type="checkbox" name="enviar_senha" class="custom-control-input" id="CheckSenha">
                    <label class="custom-control-label" for="CheckSenha">Quero receber um e-mail com minha nova senha.</label>
                </div>

                <button type="submit" class="btn btn-primary">Atualizar conta</button>
            </form>

        </div>

    </div>
</div>

<script type="text/javascript">
    $('#senhaAlterada').hide();
    $('#Senha').keyup(function(){
        if($(this).val().length > 0 ) {
            $('#senhaAlterada').show();
        } else {
            $('#senhaAlterada').hide();
            $('#CheckSenha').prop('checked', false);
        }
    });
</script>
