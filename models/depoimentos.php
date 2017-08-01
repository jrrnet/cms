<?php 
/*
 Model Depoimentos
*/
	class Depoimentos extends model {

		public function getDepoimentos($limit = 0) {

			// Array de retorno
			$array = array();

			// Realiza o SELECT na tabela
			$sql = "SELECT * FROM depoimentos ORDER BY RAND()";

			/* Verifica se $limit é maior que 0 */
			if ($limit > 0) {
				$sql .= " LIMIT ".$limit;
			}

			// Executa a consulta
			$sql = $this->db->query($sql);

			// Verifica se existe dados na tabela
			if ($sql->rowCount() > 0) {
				$array = $sql->fetchAll();
			}

			return $array;

		}
	}