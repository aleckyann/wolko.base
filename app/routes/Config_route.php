<?php

/**
* Rotas de configuração
**/
$route['translate_uri_dashes']      = FALSE;
$route['404_override']              = 'Index_controller/error';
$route['init']['get']               = 'Index_controller/init';
$route['default_controller']        = 'Index_controller/index';
