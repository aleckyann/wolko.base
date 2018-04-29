<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registrar_controller extends CI_Controller {

    #GET: /registrar
    public function index()
    {
        $title      = "WOLKO™ - Recuperar acesso";
        $csrf_input = "<input type='hidden' name='".$this->security->get_csrf_token_name()."' value='".$this->security->get_csrf_hash()."'>";
        $this->load->view('login/Registrar_view', compact('csrf_input', 'title'));
    }

    #POST: /registrar
    public function registrar()
    {
        /**
        * Recebe a requisição post adequadamente
        * Criptografa password do usuário
        **/
        $data = array(
            'usuario_nome' => $this->input->post('nome'),
            'usuario_email' => $this->input->post('email'),
            'usuario_senha' => $this->password->create($this->input->post('senha')),
        );

        /**
        * Checa se o email já está cadastrado,
        * Se criar o e-mail, autentica e loga o usuário.
        **/
        if($this->Usuarios->getBy(array('usuario_email' => $data['usuario_email']))) {
            $this->session->set_flashdata('danger', 'Não foi possivel realizar o registro desses dados.');
            redirect('registrar');
        }
        elseif($usuario_registrado = $this->Usuarios->insert($data)){
            $this->session->set_flashdata('success', 'Usuário registrado com sucesso!');
            $this->session->set_userdata($usuario_registrado);
            redirect('dashboard');
        }
    }

}
