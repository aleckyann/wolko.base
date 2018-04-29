<?php

/**
* Use para debugar sua sessao.
**/
function debug_session()
{
    echo '<pre style="margin:5px; opacity:0.8; border-radius:0; box-shadow: 1px 3px 5px 1px rgb(54,54,54); background-color:rgb(80,80,80); color:white; padding:10px; border-style:hidden hidden hidden inset; border-width:5px; border-color:rgb(54,54,54);">';
    echo '<small style="color:black"><u>Debugando sessão:</u></small><br>';
    print_r($_SESSION);
    echo '</pre>';
}

/**
* Use para debugar seus cookies.
**/
function debug_cookie()
{
    echo '<pre style="margin:5px; opacity:0.8; border-radius:0; box-shadow: 1px 3px 5px 1px rgb(54,54,54); background-color:rgb(80,80,80); color:white; padding:10px; border-style:hidden hidden hidden inset; border-width:5px; border-color:rgb(54,54,54);">';
    echo '<small style="color:black"><u>Debugando sessão:</u></small><br>';
    print_r($_COOKIE);
    echo '</pre>';
}

/**
* Use para debugar qualquer variável.
**/
function debug_var($var)
{
    echo '<pre style="margin:5px; opacity:0.8; border-radius:0; box-shadow: 1px 3px 5px 1px rgb(54,54,54); background-color:rgb(80,80,80); color:white; padding:10px; border-style:hidden hidden hidden inset; border-width:5px; border-color:rgb(54,54,54);">';
    echo '<small style="color:black"><u>Debugando váriável:</u></small><br>';
    var_dump($var);
    echo '</pre>';
}