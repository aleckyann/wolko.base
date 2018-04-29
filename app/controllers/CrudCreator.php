<?php

/**
* Classe para gerar todo o banco de dados inicial da aplicação.
* Indico que exclua esse arquivo após utilização.
* NOTE: Caso ocorram erros para executar este arquivo é muito provável
* que seja configurações da sua database em: 'app/config/database.php'
**/
class CrudCreator extends CI_Controller
{
    public function index()
    {
        echo '
        <!DOCTYPE html>
        <html lang="pt_br" dir="ltr">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
                <title>WOLKO - CrudCreator</title>
            </head>
            <body class="container">
                <h1 align="center">CRUDCREATOR</h1>
                <hr>
                <h3>Tabelas que serão criadas:</h3>
                <ul class="row">
                <div class="col-6">
                    <li>usuarios <small class="text-muted"><i>(database/usuarios.sql)</i></small></li>
                    <ul>
                        <li>usuario_id</li>
                        <li>usuario_nome</li>
                        <li>usuario_email</li>
                        <li>usuario_senha</li>
                        <li>updated_at</li>
                        <li>created_at</li>
                        <li>deleted_at</li>
                    </ul>

                </div>
                <div class="col-6">
                    <li>registros <small class="text-muted"><i>(database/registros.sql)</i></small></li>
                    <ul>
                        <li>registro_id</li>
                        <li>registro_tipo</li>
                        <li>registro_conteudo</li>
                        <li>registro_usuario</li>
                        <li>updated_at</li>
                        <li>created_at</li>
                        <li>deleted_at</li>
                    </ul>
                </div>
                </ul>
                <hr>
                <form action="'.base_url("CrudCreator/init").'" method="post" class="form-inline">
                    <input type="hidden" name="'.$this->security->get_csrf_token_name().'" value="'.$this->security->get_csrf_hash().'">
                    <input type="text" name="database_name" placeholder="Nome do DB" class="form-control" required>
                    <input value="Criar banco de dados" type="submit" class="btn btn-primary ml-1">
                </form>
                <hr>
                <b class="text-danger">ATENÇÃO!</b><br> Após execução dessa tarefa vá em <code><i>app/config/database.php</i></code> e coloque o nome do banco de dados na array de configuração: <code><i>"database" => "<b>AQUI</b>"</i></code>.
            </body>
        </html>
        ';

    }

    public function init()
    {
        $this->load->dbforge();
        $this->dbforge->create_database($this->input->post('database_name'), FALSE, array('ENGINE' => 'InnoDB'));

        $this->db->query("CREATE TABLE IF NOT EXISTS `".$this->input->post('database_name')."`.`usuarios` ( `usuario_id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID do usuário' , `usuario_nome` VARCHAR(255) NOT NULL COMMENT 'Nome do usuário' , `usuario_email` VARCHAR(255) NOT NULL COMMENT 'Email/login do usuário' , `usuario_senha` VARCHAR(255) NOT NULL COMMENT 'Senha do usuário' , `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Última atualização desse registro' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da criação desse registro' , `deleted_at` DATETIME NULL DEFAULT NULL COMMENT 'Data da remoção' , PRIMARY KEY (`usuario_id`), UNIQUE (`usuario_email`)) ENGINE = InnoDB;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `".$this->input->post('database_name')."`.`registros` ( `registro_id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID do registro' , `registro_tipo` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Tipo identificador do registro' , `registro_conteudo` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Conteúdo do registro' , `registro_usuario` INT NULL DEFAULT NULL COMMENT 'Usuário responsável pelo registro' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da criação do registro' , `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da atualização desse registro' , `deleted_at` DATETIME NOT NULL COMMENT 'Data da remoção desse registro' , PRIMARY KEY (`registro_id`)) ENGINE = InnoDB;");

        echo 'Configure: <code><i>app/config/database.php</i></code> e <a href="'.base_url().'">Pronto!</a>';
    }

}
 ?>
