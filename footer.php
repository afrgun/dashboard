<?php
define( 'SCRIPT_ROOT', 'http://localhost/KKP/dashboard/' );
?>
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="<?= SCRIPT_ROOT ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= SCRIPT_ROOT ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= SCRIPT_ROOT ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= SCRIPT_ROOT ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?= SCRIPT_ROOT ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= SCRIPT_ROOT ?>dist/js/adminlte.min.js"></script>
<script src="<?= SCRIPT_ROOT ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= SCRIPT_ROOT ?>bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?= SCRIPT_ROOT ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= SCRIPT_ROOT ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= SCRIPT_ROOT ?>dist/js/demo.js"></script>
<script src="<?= SCRIPT_ROOT ?>js/validation.js"></script>
<script src="<?= SCRIPT_ROOT ?>js/custom.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
	})
    $('#tanggaldaftar').datepicker({
      format: 'yyyy-mm-dd',
	  autoclose: true
    })
	$('#datepicker').datepicker({
      autoclose: true
    })
  })
</script>
</body>
</html>
