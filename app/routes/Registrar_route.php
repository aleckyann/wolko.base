<?php

/**
* Rotas básica de registro de novo usuário
**/

$route['registrar']['get']         = 'login/Registrar_controller/index';
$route['registrar']['post']        = 'login/Registrar_controller/registrar';
