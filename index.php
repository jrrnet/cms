<?php
/**
 * Começar com um AutoLoad das pastas Controller, Models, Core
 * User: JRNET
 *
 */
  session_start();
  require 'config.php';

// AutoLoad
spl_autoload_register(function ($class){
    // Verificação se existe um controller
    if(strpos($class, 'Controller') > -1){
       if(file_exists('controllers/'.$class.'.php')){
         require_once 'controllers/'.$class.'.php';
        }
 } elseif(file_exists('models/'.$class.'.php')){ // Verifica se é models
         require_once 'models/'.$class.'.php'; 
 } elseif(file_exists('core/'.$class.'.php')) {
         require_once 'core/'.$class.'.php';
    }
});

$core = new Core();
$core->run();

?>

