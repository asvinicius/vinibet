<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ações</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a type="button" class="btn btn-sm btn-outline-secondary" href="<?= base_url('novojogo'); ?>">
                <span data-feather="plus" class="align-text-bottom"></span>
                Novo registro
            </a>
        </div>
    </div>
    
    <?php if($actions){ ?>
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Casa</th>
                        <th scope="col"></th>
                        <th scope="col">Fora</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($actions as $action){ ?>
                        <tr>
                            <td><?php echo $action->act_id ?></td>
                            <td><?php echo $action->time_nome ?></td>
                            <td>X</td>
                            <td><?php echo $action->time_nome ?></td>
                            <td>Ações</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <h4>Nenhum registro a ser exibido</h4>
    <?php } ?>
</main>