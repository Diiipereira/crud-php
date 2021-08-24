<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <div class="card bg-light">
        <div class="card-body">
    <form method="post">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?=$obCrud->name?>">
        </div>

        <div class="form-group">
            <label>Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="<?=$obCrud->lastName?>">
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu E-mail" value="<?=$obCrud->email?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
        </div>
    </div>
</main>