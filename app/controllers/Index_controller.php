<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {


    public function index()
    {
        redirect('/login');
    }


    public function error()
    {
        $this->output->set_status_header(404);
        $this->load->view('error');
    }

}
