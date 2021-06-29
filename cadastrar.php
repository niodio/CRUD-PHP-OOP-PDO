<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Vaga;

//validação do post
if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
	//instancia o objeto
	$objVaga = new Vaga;

	//Recuperando dados do POST e salvando na class
	$objVaga->titulo = $_POST['titulo'];
	$objVaga->descricao = $_POST['descricao'];
	$objVaga->ativo = $_POST['ativo'];

	$objVaga->cadastrar();

	header('location: index.php?status=success');
	exit();
}
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
