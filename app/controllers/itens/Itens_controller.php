<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Itens_controller extends Sistema_controller {

    #GET: /itens
    public function index()
    {
        $this->view('itens/Itens_view', compact(''));
    }

}
