<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 06/02/2017
 * Time: 22:39
 */


class homeController extends controller {

        public function __construct() {
            parent::__construct();
        }

        public function index() {                       
            $dados = array(
				'depoimentos' => array()
            	);

            $dpm = new Depoimentos(); // Model de depoimentos
            $dados['depoimentos'] = $dpm->getDepoimentos(2);

            $this->loadTemplate('home', $dados);
        
        }        
}