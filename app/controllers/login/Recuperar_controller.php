<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Recuperar_controller extends CI_Controller {

    #GET: /recuperar
    public function index()
    {
        $title      = "WOLKO™ - Recuperar acesso";
        $csrf_input = "<input type='hidden' name='".$this->security->get_csrf_token_name()."' value='".$this->security->get_csrf_hash()."'>";
        $this->load->view('login/Recuperar_view', compact('csrf_input', 'title'));
    }

    #POST: /recuperar
    public function recuperar()
    {
        /**
        * Recebe a requisição post adequadamente,
        * Verifica a existencia do usuário,
        * Altera senha do usuário,
        * Envia email com a nova senha.
        **/
        $data = array(
            'usuario_email' => $this->input->post('email')
        );

        if(!$this->Usuarios->getBy($data)) {
            $this->session->set_flashdata('warning', 'Erro ao recuperar este acesso.');
            redirect('recuperar');
        }
        else {
            $nova_senha_usuario = crc32(microtime());
            $nova_senha_db = $this->password->create($nova_senha_usuario);
            $this->Usuarios->update(array('usuario_senha'=>$nova_senha_db), $data);
            $this->mail->enviar($data['usuario_email'], 'Nova senha de acesso', '<b>Sua nova senha de acesso é:</b> '.$nova_senha_usuario);
            $this->session->set_flashdata('success', 'Sucesso, verifique seu email!');
            redirect('recuperar');
        }
    }

}
