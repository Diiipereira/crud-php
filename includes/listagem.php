<?php

    $mensagem = '';

    if(isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Dados cadastrados com suscesso!</div>';
        break;

        case 'error':
            $mensagem = '<div class="alert alert-danger">Dados inválidos!</div>';
            break;
    }
    }

    $resultados = '';
foreach($usuarios as $usuario) {
        $resultados .= '<tr>
        <td>'.$usuario->id.'</td>
        <td>'.$usuario->name.'</td>
        <td>'.$usuario->lastName.'</td>
        <td>'.$usuario->email.'</td>
        <td>'.date('d/m/Y à\s H:i:s',strtotime($usuario->date)).'</td>
        <td>
        <a href="editar.php?id='.$usuario->id.'"><button type="button" class="btn btn-primary">Editar</button></a>
        <a href="excluir.php?id='.$usuario->id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
        </td>
        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr><td colspan="5" class="text-center">Nenhum usuário Cadastrado</td></tr>';

?>
<main>

    <?=$mensagem?>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo usuário</button>
        </a>
    </section>

    <section>
        <div class="card bg-light text-dark mt-3">
            <div class="card-body">
        <table class="table mt-3">

            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Data de cadastro</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>

        </table>
            </div>
        </div>
    </section>
</main>