<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {


    public function index()
    {
        $data = array('title' => 'WOLKO™ - Home');
        $this->load->view('includes/website/Header_view', $data);
        $this->load->view('website/Index_view', $data);
        $this->load->view('includes/website/Footer_view', $data);
    }

    public function servicos()
    {
        $data = array('title' => 'WOLKO™ - Servicos');
        $this->load->view('includes/website/Header_view', $data);
        $this->load->view('website/Servicos_view', $data);
        $this->load->view('includes/website/Footer_view', $data);
    }

    public function sobre()
    {
        $data = array('title' => 'WOLKO™ - Sobre');
        $this->load->view('includes/website/Header_view', $data);
        $this->load->view('website/Sobre_view', $data);
        $this->load->view('includes/website/Footer_view', $data);
    }

    public function contato()
    {
        $data = array('title' => 'WOLKO™ - Contato');
        $this->load->view('includes/website/Header_view', $data);
        $this->load->view('website/Contato_view', $data);
        $this->load->view('includes/website/Footer_view', $data);
    }

}
