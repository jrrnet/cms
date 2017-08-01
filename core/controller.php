<?php
/**
 * Controller base inicial da aplicação
 * User: JRNET
 * Date: 03/07/2017
 * T
 */

    class controller {

        private $config;       

        public function __construct() {
            $cfg = new Config();
            $this->config = $cfg->getConfig();
        }

        public function loadView($viewName, $viewData = array()) {

            extract($viewData); // Transforma os dados do Array em variaveis
            include 'views/'.$viewName.'.php';

        }
           // Metodo Load Template e a estrutura do site
        public function loadTemplate($viewName, $viewData = array()) {
           //include 'views/template.php';
            include 'views/templates/'.$this->config['site_template'].'.php';
        }

        public function loadTemplateInPainel($viewName, $viewData = array()) {
           //include 'views/painel.php';
            include 'views/painel.php';
        }
        
        public function loadViewInTemplate($viewName, $viewData) {
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }

        // Metodo para carregar o model menu do site
        public function loadMenu() {
            $menu = new Menu(); 
            $m = array();                       
            $m['menu'] = $menu->getMenu();

            // Carrega só o loadView com estrutura menu
            $this->loadView("menu", $m);
        }
    }




