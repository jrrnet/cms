<?php
/**
 * Configurações de conexão com o banco de dados.
 * Confere qual ambiente esta
 * User: JRNET
 * Date: 01/03/2017
 * Time: 21:25
 */
  require 'environment.php';

  // URL Base para todos os links do CMS
  define("BASE", "http://localhost/cms/");   # Notebook casa
  #define("BASE", "http://localhost/cms/");        # Notebook Regina


  global $config;                      # Uma variavel será usada em grande parte da aplicação
  $config = array();
  // Verifica o ambiente que esta "development"
  if(ENVIRONMENT == "development") {   # Se for ambiente de Desenvolvimento local
      $config['dbname'] = 'cms';       # Banco de dados
      $config['host']   = 'localhost'; # Servidor da aplicação
      $config['dbuser'] = 'root';      # Usuario do Banco
      $config['dbpass'] = '';          # Senha do Usuario do Banco

  } else {                             # Se não vai setar outras informações para o novo ambiente Online
      $config['dbname'] = '';          # Banco de dados
      $config['host']   = '';          # Servidor da aplicação
      $config['dbuser'] = '';          # Usuario do Banco
      $config['dbpass'] = '';          # Senha do Usuario do Banco

  }

?>
