<?php
defined('BASEPATH') OR die('404. That’s an error.');

/**
* Arquivo que carreta os arquivos de rota em 'app/routes/' 
**/

foreach(glob("app/routes/*.php") as $rota)
{
    require_once($rota);
}
