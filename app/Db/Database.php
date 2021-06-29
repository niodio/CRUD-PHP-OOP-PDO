<?php

namespace App\Db;

use PDOException;
use \PDO;

class Database {

	/**
	 * host de conexao com o banco de dados
	 * @var string
	 */
	const HOST = 'localhost';

	/**
	 * nome do banco de dados
	 * @var string
	 */
	const DBNAME = 'db_emprego';

	/**
	 * usuario do banco de dados
	 * @var string
	 */
	const USER = 'root';

	/**
	 * hpassword do banco de dados
	 * @var string
	 */
	const PASS = 'acinacio';

	/**
	 * nome da tabela a ser manipulada
	 * @var string
	 */
	private $table;

	/**
	 * instancia de conexao com o banco de dados
	 * @var PDO
	 */
	private $connection;

	/**
	 * Define a tabela e instancia e conexão
	 * @param string $table
	 */
	public function __construct($table = null) {
		$this->table = $table;
		$this->setConnection();
	}

	/**
	 * Método responsável por criar uma conexão com o banco de dados
	 */
	private function setConnection() {
		try {
			$this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DBNAME, self::USER, self::PASS);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die('ERROR: ' . $e->getMessage());
		}
	}

	/**
	 * Método responsável por executar queries dentro do banco de dados
	 * @param  string $query
	 * @param  array  $params
	 * @return PDOStatement
	 */
	public function execute($query, $params = []) {
		try {
			$statement = $this->connection->prepare($query);
			$statement->execute($params);
			return $statement;
		} catch (PDOException $e) {
			die('ERROR: ' . $e->getMessage());
		}
	}

	/**
	 * Método responsável por inserir dados no banco
	 * @param  array $values [ field => value ]
	 * @return integer ID inserido
	 */
	public function insert($values) {
		//DADOS DA QUERY
		$fields = array_keys($values);
		$binds = array_pad([], count($fields), '?');

		//MONTA A QUERY
		$query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

		//EXECUTA O INSERT
		$this->execute($query, array_values($values));

		//RETORNA O ID INSERIDO
		return $this->connection->lastInsertId();
	}

}