<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ligas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a type="button" class="btn btn-sm btn-outline-secondary" href="<?= base_url('novaliga'); ?>">
                <span data-feather="plus" class="align-text-bottom"></span>
                Nova liga
            </a>
        </div>
    </div>
    
    <?php if($ligas){ ?>
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ligas as $liga){ ?>
                        <tr>
                            <td><?php echo $liga->liga_nome ?></td>
                            <td>Ações</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <h4>Nenhuma liga a ser exibida</h4>
    <?php } ?>
</main>