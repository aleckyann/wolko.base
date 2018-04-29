<?php

/**
* Os controllers do sistema devem extender Sistema_Controller para adquirir ACL.
* Os controllers externos devem extender ao CI_Controller para ficarem acessíveis.
**/

class Sistema_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        /**
        * Protege as rotas de acesso sem login
        **/
        if(!$this->session->usuario_email){
            $this->session->set_flashdata('warning', 'Por favor, autentique-se.');
            redirect("login", 'redirect', 308);
        }

    }

    /**
    * Função monta a view utilizando os arquivos /includes/Header_view.php e /includes/Footer.php
    * contidos nas pastas /views/engenheiro/, /views/gestor/ e /views/cliente/
    **/
    public function view($view, $data)
    {
        $data['csrf_input'] = "<input type='hidden' name='".$this->security->get_csrf_token_name()."' value='".$this->security->get_csrf_hash()."'>";
        $data['title']      = "WOLKO™ - " . ucfirst($this->uri->segment(1)) . " : " . date('d/m/Y H:i:s');

        $this->load->view('includes/admin/Header_view', $data);
        $this->load->view($view, $data);
        $this->load->view('includes/admin/Footer_view');
    }


}

?>
