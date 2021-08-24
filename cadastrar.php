<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Usuário');

use \App\Entity\Crud;
$obCrud = new Crud;

// Validação do post
if(isset($_POST['nome'],$_POST['sobrenome'],$_POST['email'])) {

    $obCrud->name = $_POST['nome'];
    $obCrud->lastName = $_POST['sobrenome'];
    $obCrud->email = $_POST['email'];
    $obCrud->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';