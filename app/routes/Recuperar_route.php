<?php

/**
* Rotas básica de recuperação de senha
**/

$route['recuperar']['get']         = 'login/Recuperar_controller/index';
$route['recuperar']['post']        = 'login/Recuperar_controller/recuperar';
