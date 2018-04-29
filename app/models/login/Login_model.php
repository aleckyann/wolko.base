<?php

class Login_model extends CI_model
{

    public function auth($dados)
    {
        $usuario = $this->db->get_where('usuarios', array('usuario_email' => $dados['usuario_email']))->result_array()[0];
        
        if($this->password->check($dados['usuario_senha'], $usuario['usuario_senha'])){
            return $usuario;
        } else {
            return false;
        }
    }


}
