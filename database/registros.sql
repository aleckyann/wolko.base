/**
* SQL PARA CRIAR TABELA ´registros´
* Altere o nome da tabela: ´base.wolko´
**/

CREATE TABLE `base.wolko`.`registros` ( `registro_id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID do registro' , `registro_tipo` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Tipo identificador do registro' , `registro_conteudo` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Conteúdo do registro' , `registro_usuario` INT NULL DEFAULT NULL COMMENT 'Usuário responsável pelo registro' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da criação do registro' , `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data da atualização desse registro' , `deleted_at` DATETIME NOT NULL COMMENT 'Data da remoção desse registro' , PRIMARY KEY (`registro_id`)) ENGINE = InnoDB;
