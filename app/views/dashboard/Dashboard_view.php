
    <div class="container-fluid">
        <!-- Breadcrumbs
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?=base_url($this->uri->segment(1))?>"><?=ucfirst($this->uri->segment(1))?></a>
            </li>
            <li class="breadcrumb-item active">Painel</li>
          </ol>
        -->

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
          <i class="fa fa-cubes"></i> Ítens cadastrados</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Descrição</th>
                    <th>Validade</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Descrição</th>
                    <th>Validade</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td class="small">7897534800229</td>
                  <td class="small">Dipirona</td>
                  <td class="small">Sanofis</td>
                  <td class="small">500mg/ml</td>
                  <td class="small">29/11/2019</td>
                  <td class="small">Medicamento</td>
                  <td class="small"><?= rand(1,100) ?></td>
                </tr>
                <tr>
                  <td class="small">7891035032004</td>
                  <td class="small">Gase</td>
                  <td class="small">Enfax</td>
                  <td class="small">2m</td>
                  <td class="small">29/11/2018</td>
                  <td class="small">Insumo</td>
                  <td class="small"><?= rand(1,100) ?></td>
                </tr>
                <tr>
                  <td class="small">111722800229</td>
                  <td class="small">Buscopam</td>
                  <td class="small">Sanofis</td>
                  <td class="small">500mg/ml</td>
                  <td class="small">01/11/2020</td>
                  <td class="small">Medicamento</td>
                  <td class="small"><?= rand(1,100) ?></td>
                </tr>
                <tr>
                  <td class="small">227534230229</td>
                  <td class="small">Omeprazol</td>
                  <td class="small">Sanofis</td>
                  <td class="small">500mg/ml</td>
                  <td class="small">29/11/2018</td>
                  <td class="small">Medicamento</td>
                  <td class="small"><?= rand(1,100) ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"><b>Atualizado em</b> <?= date('d/m/Y H:i:s') ?></div>
      </div>
    </div>
    <!-- /.container-fluid-->
