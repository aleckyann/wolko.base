<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

    public function index()
    {
        $data = array('title' => 'WOLKO™');
        $this->load->view('includes/website/Header_view', $data);
        $this->load->view('website/Index_view', $data);
        $this->load->view('includes/website/Footer_view', $data);
    }

    public function error()
    {
        $this->output->set_status_header(404);
        $this->load->view('error');
    }

}
