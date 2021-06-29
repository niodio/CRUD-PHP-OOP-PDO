<?php
namespace App\Entity;
use App\Db\Database;

class Vaga {
/**
 * Identificador unico da vaga
 * @var integer
 */
	public $id;
/**
 * Titulo da vaga
 * @var string
 */
	public $titulo;
/**
 * Descricao da vaga(pode conter html)
 *
 */
	public $descricao;
/**
 * Define se a vaga ativa
 * @var string (s/n)
 */
	public $ativo;
/**
 * data de publicacao da vaga
 * @var string
 */
	public $data;

	/**
	 * Metodo para cadastrar uma nova vaga
	 * @return boolean
	 */
	public function cadastrar() {
		// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
		date_default_timezone_set('America/Sao_Paulo');
		//Definir data no padrao americano
		$this->data = date('Y-m-d H:i:s');

		//Inserir a vaga no banco, passando a tabela como parametro
		$objDatabase = new Database('tbl_vagas');
		$this->id = $objDatabase->insert([
			'titulo' => $this->titulo,
			'descricao' => $this->descricao,
			'ativo' => $this->ativo,
			'data' => $this->data,
		]);

		//RETORNAR SUCESSO
		return true;
	}

}