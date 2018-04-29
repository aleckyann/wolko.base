<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_controller extends CI_Controller {

    #GET: /login
    public function index()
    {
        $title      = "WOLKO™ - Autenticação";
        $csrf_input = "<input type='hidden' name='".$this->security->get_csrf_token_name()."' value='".$this->security->get_csrf_hash()."'>";
        $this->load->view('login/Index_view', compact('csrf_input', 'title'));
    }

    #POST: /login
    public function login()
    {
        /**
        * Cria lógica de cookie para lembrar login e senha do usuário
        **/
        if($this->input->post('lembrar') === 'on') {
            $cookie_email = array(
                'name' => 'email',
                'value' => $this->input->post('email'),
                'expire' => '604800', // 7 dias
                'secure' => TRUE,
                'httponly' => TRUE,
            );
            $cookie_senha = array(
                'name' => 'senha',
                'value' => $this->input->post('senha'),
                'expire' => '604800', // 7 dias
                'secure' => TRUE,
                'httponly' => TRUE,
            );
            $this->input->set_cookie($cookie_email);
            $this->input->set_cookie($cookie_senha);
        } else {
            delete_cookie('email');
            delete_cookie('senha');
        }

        /**
        * Utiliza o método auth() de models/login/Login_model para autenticar no DB
        * Retorna TRUE ou FALSE
        **/
        $usuario_logado = $this->Login_model->auth([
            'usuario_email'  => $this->input->post('email'),
            'usuario_senha'  => $this->input->post('senha')
        ]);

        /**
        * Cria sessão se retorno for TRUE
        **/
        if($usuario_logado) {
            $this->session->set_userdata($usuario_logado);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('danger', 'Usuário ou senha incorretos.');
            redirect('login');
        }
    }

    #GET: /logout
    public function logout()
    {
        /**
        * Destroi sessões, mas previne que sessões e cookies do CI sejam apagados
        **/
        $user_data = $this->session->userdata();
        foreach ($user_data as $key => $value) {
            if ($key!='__ci_last_regenerate' && $key != '__ci_vars')
            $this->session->unset_userdata($key);
        }

        $this->session->set_flashdata('success', 'Sessão encerrada com sucesso!');
        redirect('login');
    }

}
