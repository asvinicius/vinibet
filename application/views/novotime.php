<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Novo time</h1>
    </div>
    <div class="form-responsive">
        <form class="row g-3" action="<?= base_url('novotime/salvar'); ?>" method="post">
            <div class="col-md-6">
                <label for="inputnome" class="form-label">Nome</label>
                <input type="nome" class="form-control" id="inputnome" name="time_nome" autofocus>
            </div>
            <div class="col-md-6">
                <label for="inputliga" class="form-label">Liga</label>
                <select id="inputliga" class="form-select"  name="time_liga">
                    <option value="0" selected> --- </option>
                    <?php foreach($ligas as $liga){ ?>
                        <option value="<?= $liga->liga_id; ?>"><?= $liga->liga_nome ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputliga" class="form-label">Tecnico</label>
                <select id="inputliga" class="form-select"  name="time_tecnico">
                    <option value="0" selected> --- </option>
                    <?php foreach($tecnicos as $tecnico){ ?>
                        <option value="<?= $tecnico->tecnico_id; ?>"><?= $tecnico->tecnico_nome ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputnome" class="form-label">Valor em euros</label>
                <input type="nome" class="form-control" id="inputnome"  name="time_valor">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a type="button" href="<?= base_url('times'); ?>" class="btn btn-danger btn-user">
					Cancelar
				</a>
            </div>
        </form>
    </div>
</main>