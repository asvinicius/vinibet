<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Nova liga</h1>
    </div>
    <div class="form-responsive">
        <form class="row g-3" action="<?= base_url('novaliga/salvar'); ?>" method="post">
            <div class="col-12">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputName" name="liga_nome" placeholder="Nome" autofocus>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a type="button" href="<?= base_url('ligas'); ?>" class="btn btn-danger btn-user">
					Cancelar
				</a>
            </div>
        </form>
    </div>
</main>