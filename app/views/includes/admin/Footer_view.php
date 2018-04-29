<!-- Logout Modal-->
<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogoutLabel">Encerrar sua sessão de forma segura?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecione <span class="badge badge-danger">Sair</span> para encerrar sua sessão.</div>
            <div class="modal-footer">
                <button class="btn btn-dark" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger" href="<?=base_url('logout')?>"><i class="fa fa-sign-out"></i>Sair</a>
            </div>
        </div>
    </div>
</div>
<!-- Logout Modal-->

<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>WOLKO ® <?=date('Y')?></small>
    </div>
  </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>


</div>
<!-- /.content-wrapper-->


<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- DataTable for bootstrap 4.1-->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<!-- Include in all pages-->
<script src="<?= base_url('public')?>/js/sb-admin.min.js"></script>

<!-- Scrips usados na dashboard-->
<script src="<?= base_url('public')?>/js/sb-admin-datatables.js"></script>

</body>

</html>
