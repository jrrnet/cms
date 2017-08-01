<?php

	class Paginas extends model {

		// Pega todas as paginas do Banco
		public function getPaginas() {
			$array = array();

			$sql = "SELECT id, url, titulo FROM paginas";
			$sql = $this->db->query($sql);

			// Verifica
			if ($sql->rowCount() > 0) {
				$array = $sql->fetchAll();
			}

			return $array;
		}

		// Pega apenas uma pagina
		public function getPagina($url) {
			$array = array();

			$sql = "SELECT titulo, corpo FROM paginas WHERE url = '$url'";
			$sql = $this->db->query($sql);

			// Verifica
			if ($sql->rowCount() > 0) {
				$array = $sql->fetch();
			}

			return $array;
		}


		public function getPaginaById($id) {
			$array = array();

			$sql = "SELECT titulo, url, corpo FROM paginas WHERE id = '$id'";
			$sql = $this->db->query($sql);

			// Verifica
			if ($sql->rowCount() > 0) {
				$array = $sql->fetch();
			}

			return $array;
		}

		// Deletar Páginas
		public function delete($id) {
			$this->db->query("DELETE FROM paginas WHERE id = '$id'");
		}
		// Atualizar Página
		public function update($titulo, $url, $corpo, $id) {
			$this->db->query("UPDATE paginas SET titulo = '$titulo', url = '$url', corpo = '$corpo' WHERE id = '$id'");
		}
		// Adicionar Pagina
		public function insert($titulo, $url, $corpo) {
			$this->db->query("INSERT INTO paginas SET titulo = '$titulo', url = '$url', corpo = '$corpo'");
		}
	}
