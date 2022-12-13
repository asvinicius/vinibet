<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Times</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a type="button" class="btn btn-sm btn-outline-secondary" href="<?= base_url('novotime'); ?>">
                <span data-feather="plus" class="align-text-bottom"></span>
                Novo time
            </a>
        </div>
    </div>
    
    <?php if($times){ ?>
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Liga</th>
                        <th scope="col">Tecnico</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($times as $time){ ?>
                        <tr>
                            <td><?php echo $time->time_nome ?></td>
                            <td><?php echo $time->liga_nome ?></td>
                            <td><?php echo $time->tecnico_nome ?></td>
                            <td>€ <?php echo number_format($time->time_valor, 2, ',', '.'); ?></td>
                            <td>Ações</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <h4>Nenhum time a ser exibido</h4>
    <?php } ?>
</main>