<main>
    <section>
        <a href="index.php">
            <button class="btn btn-warning">Voltar</button>
        </a>
    </section>

    <div class="mt3">
        <h2>Cadastrar vagas</h2>
    </div>

    <form action="" method="post">
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo">
        </div>

        <div class="form-group">
            <label>Título</label>
            <textarea class="form-control" name="descricao" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked="true">Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n">Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group mt3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>