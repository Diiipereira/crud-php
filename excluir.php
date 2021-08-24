<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Crud;

// Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

    $obCrud = Crud::GetCrud($_GET['id']);
    if(!$obCrud instanceof Crud) {
        header('location: index.php?status=error');
        exit;
    }

// Validação do post
if(isset($_POST['excluir'])) {

    $obCrud->excluir();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';