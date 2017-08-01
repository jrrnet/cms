<?php
  /*
  Model Menu
  Pega todos os itens da tabela menu
  */
   class Menu extends model {

    public function getMenu($id = 0) {
      $array = array(); // Array padrão de retorno

      $sql = "SELECT * FROM menu";     

      if ($id > 0) {
        $sql .= " WHERE id ='$id'";
      } 

      $sql = $this->db->query($sql);

      // Verifica se retorna algum dado da consulta
      if($sql->rowCount() > 0) {
        if ($id > 0) {
          $array = $sql->fetch();
        } else {
            $array = $sql->fetchAll();
          }
      }

      return $array;
    }

    // Deleta menus
    public function delete($id) {
      $this->db->query("DELETE FROM menu WHERE id = '$id'");
    }

    // Atualiza Menus
    public function update($nome, $url, $id) {
      $this->db->query("UPDATE menu SET nome = '$nome', url = '$url' WHERE id = '$id'");
    }

    // Adiciona Menus
    public function insert($nome, $url) {
      $this->db->query("INSERT INTO menu SET nome = '$nome', url = '$url'");
    }
   	
   }