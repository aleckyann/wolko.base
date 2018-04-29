<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conta_controller extends Sistema_Controller {

    #GET: /conta
    public function index()
    {
        $this->view('conta/Conta_view', compact(''));
    }

    #POST: /conta
    public function alterar()
    {
        /**
        * Recebe a requisição post adequadamente
        * Criptografa novo password do usuário
        **/
        $data = array(
            'usuario_nome' => $this->input->post('nome'),
            'usuario_senha' => (empty($this->input->post('senha'))) ? $this->session->usuario_senha : $this->password->create($this->input->post('senha'))
        );
        /**
        * Se criar o e-mail, autentica e loga o usuário.
        **/
        if($this->Usuarios->update($data, array('usuario_id'=> $this->session->usuario_id))){
            $this->session->set_flashdata('success', 'Conta atualizada com sucesso!');
            $this->session->set_userdata($this->Usuarios->getBy(array('usuario_id'=>$this->session->usuario_id)));
            redirect('conta');
        } else {
            $this->session->set_flashdata('danger', 'Não foi possivel realizar o registro desses dados.');
            redirect('conta');
        }


    }

}
