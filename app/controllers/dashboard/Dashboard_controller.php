<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends Sistema_Controller {

    #GET: /dashboard
    public function index()
    {
        $this->view('dashboard/Dashboard_view', compact(''));
    }

}
