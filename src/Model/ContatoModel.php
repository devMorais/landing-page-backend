<?php 
namespace App\Model;

use App\Model\Model;

class ContatoModel extends Model {
	
	private $table = "contatos";
	protected $fields = [
		"id",
		"nome",
		"telefone",
		"data_hora"
	];

	function insertContatoModel($campos)
	{
		$this->insert($this->table, $campos);
	}

	function updateContatoModel($valores, $where)
	{	
		$this->update($this->table, $valores, $where);
	}

	function deleteContatoModel($coluna, $valor)
	{
		$this->delete($this->table, $coluna, $valor);
	}

	function selectContatoModel($campos, $where):array
	{
		return $this->select($this->table, $campos, $where);
	}
}