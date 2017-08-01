<?php
/**
 * Objeto de fundamento do sistema core.
 * Verifica o que foi acessado no Controller
 * Verifica qual Action foi usada e faz um Run na aplicação
 * User: JRNET
 * Date: 09/07/2017
 * 
 */

class Core {

    public function run() {

        $url = explode('index.php', $_SERVER['PHP_SELF']);
        $url = end($url);

        //$url = '/'.( (isset($_GET['q']))?$_GET['q']:'');
        $params = array();
        if(!empty($url)) {
            $url = explode('/', $url); // Divide cada parte pela barra
            array_shift($url);  // Remove a primeira chave do array, uma barra

            $currentController = $url[0].'Controller'; // O primeiro array_shift Controller
            array_shift($url);

            if(isset($url[0])) {
                $currentAction = $url[0]; // Se foi digitado algo depois do controller
                array_shift($url);
            } else {
                $currentAction = 'index'; // Caso não tenha nada na Action retorna para o index.php
            }

            if(count($url) > 0) {
                $params = $url;
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }     
       

        if(file_exists('controllers/'.$currentController.'.php')) {
            /* Se existir um controller vai definir normal */ 
            $c = new $currentController();
        } else {
            /* Se não Vai chamar um controller padrão de paginas */
            $c = new paginaController();
            // Define uma Action padrão para paginas
            $currentAction = 'index';

            $pageNome = explode("Controller", $currentController);
            $pageNome = $pageNome[0];       
            $params = array($pageNome);
        }        
       
        call_user_func_array(array($c, $currentAction), $params); // Função do PHP
    }

}