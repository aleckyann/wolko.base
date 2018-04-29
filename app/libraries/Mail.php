<?php

/**
* Classe para facilitar uso da librarie 'email'
**/
class Mail
{

    var $CI;

    function __construct()
    {
        $this->CI =& get_instance();
    }

    /**
    * Função para enviar email.
    * Use set_realpath() para caminho dos anexos!
    **/
    public function enviar($destinatario, $assunto, $mensagem, $anexo = '')
    {
        $this->CI->load->library('email');
        $this->CI->email->clear();
        $this->CI->email->from('bot@wolko.com.br');//ALTERE CONFORME NECESSÁRIO
        $this->CI->email->to($destinatario);
        $this->CI->email->subject($assunto);
        $this->CI->email->message($this->CI->load->view('emails/Basic_view', array('destinatario'=>$destinatario, 'assunto'=>$assunto, 'mensagem'=>$mensagem), TRUE));

        if(!empty($anexo)){
            $this->CI->email->attach($anexo);
        }

        if(!$this->CI->email->send()){
         echo $this->CI->email->print_debugger();
        }

    }
}
