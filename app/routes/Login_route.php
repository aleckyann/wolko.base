<?php

/**
* Rotas básica de autenticação
**/
$route['login']['get']             = 'login/Login_controller/index';
$route['login']['post']             = 'login/Login_controller/login';
$route['logout']['get']            = 'login/Login_controller/logout';
