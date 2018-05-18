
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?=base_url($this->uri->segment(1))?>"><?=ucfirst($this->uri->segment(1))?></a>
        </li>
        <li class="breadcrumb-item active">Painel</li>
    </ol>


    <?= $this->ui->alert_flashdata() ?>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-calendar-times-o text-warning" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">
                        <b>129 ÍTENS VENCENDO !</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-trash-o text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">
                        <b>129 ÍTENS VENCERAM !</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">
                        <b>19 ÍTENS ACABANDO !</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-exclamation-circle text-danger" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5">
                        <b>2 ÍTENS ACABARAM !</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-group"></i> Usuários registrados</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Atualizado em</th>
                                <th>Criado em </th>
                                <th>Deletado<i class="text-muted small">(?)</i></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Atualizado em</th>
                                <th>Criado em </th>
                                <th>Deletado<i class="text-muted small">(?)</i></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($this->Usuarios->getAll() as $usuario): ?>
                                <tr>
                                    <td class="small"><?= $usuario->usuario_id ?></td>
                                    <td class="small"><?= $usuario->usuario_nome ?></td>
                                    <td class="small"><?= $usuario->usuario_email ?></td>
                                    <td class="small"><?= $usuario->updated_at ?></td>
                                    <td class="small"><?= $usuario->created_at ?></td>
                                    <td class="small"><?= $usuario->deleted_at ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted"><b>Atualizado em</b> <?= date('d/m/Y H:i:s') ?></div>
        </div>
    </div>
    <!-- /.container-fluid-->


    <script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {extend: 'excel', text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel'},
                {extend: 'pdf', text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF'},
                {extend: 'print', text: '<i class="fa fa-print" aria-hidden="true"></i> Impirmir'},
            ],
            "pageLength": 10,
            "oLanguage": {
                "sEmptyTable": "Nenhum material encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ materiais",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 materiais",
                "sInfoFiltered": "(Filtrados de _MAX_ materiais)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ materiais por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum material encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    });

    </script>
