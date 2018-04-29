<?php

function create_controller($class_name){
    $my_controller = fopen(ucfirst($class_name)."_controller.php", "w");
 
    $conteudo = "<?php

class ".ucfirst($class_name)." extends CI_Controller {

    
}";
    
    fwrite($my_controller, $conteudo);
    fclose($my_controller);
}

function create_model($class_name){
    $my_controller = fopen(ucfirst($class_name)."_model.php", "w");
 
    $conteudo = "<?php

class ".ucfirst($class_name)." extends CI_Model {


}";
    
    fwrite($my_controller, $conteudo);
    fclose($my_controller);
}

$comando = readline('Qual nome das novas classes do MVC? ');
create_controller($comando);
create_model($comando);

