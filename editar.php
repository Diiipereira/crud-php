<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Usuário');

use \App\Entity\Crud;

// Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

    $obCrud = Crud::getCrud($_GET['id']);
    if(!$obCrud instanceof Crud) {
        header('location: index.php?status=error');
        exit;
    }

// Validação do post
if(isset($_POST['nome'],$_POST['sobrenome'],$_POST['email'])) {
    $obCrud->name = $_POST['nome'];
    $obCrud->lastName = $_POST['sobrenome'];
    $obCrud->email = $_POST['email'];
    $obCrud->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';