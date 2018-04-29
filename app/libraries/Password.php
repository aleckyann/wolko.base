<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password {

    /**
     * Cria o password
     */
    public function create($password_input)
    {
        return password_hash($password_input, PASSWORD_DEFAULT);
    }

    /**
     * Compara password do input com hash criada pelo método create
     */
    public function check($password_input, $password_database)
    {
        return password_verify($password_input, $password_database);
    }
}
