/**
* SQL PARA CRIAR TABELA ´usuarios´
* Altere o nome da tabela: ´base.wolko´
**/

CREATE TABLE `base.wolko`.`usuarios` ( `usuario_id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID do usuário' , `usuario_nome` VARCHAR(255) NOT NULL COMMENT 'Nome do usuário' , `usuario_email` VARCHAR(255) NOT NULL COMMENT 'Email/login do usuário' , `usuario_senha` VARCHAR(255) NOT NULL COMMENT 'Senha do usuário' , `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Última atualização desse registro' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da criação desse registro' , `deleted_at` DATETIME NULL DEFAULT NULL COMMENT 'Data da remoção' , PRIMARY KEY (`usuario_id`), UNIQUE (`usuario_email`)) ENGINE = InnoDB;