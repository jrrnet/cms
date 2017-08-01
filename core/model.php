<?php
/**
 * Classe Model controlar conexão com Banco de dados
 * PDO fica em variavel privada pretected
 * User: JRNET
 * Date: 01/03/2017
 * Time: 22:32
 */

  class model {

      protected $db;

      public function __construct() {
          global $config;  // Chama a variavel Global com config do banco
          $this->db = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']); // Banco MySQL
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //$this->db = new PDO("pgsql:dbname=".$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);
      }
  }


?>