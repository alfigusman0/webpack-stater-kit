<script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
	var table;
	$(document).ready(function() {
		//datatables
		table = $('#table').DataTable({
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.

			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?= base_url('Default/ServerSide/JsonFormFilter/') ?>",
				"type": "POST",
				"data": function(data) {
					data.kolom_1 = $('#kolom_1').val();
					data.kolom_2 = $('#kolom_2').val();
					data.tahun = $('#tahun').val();
				}
			},

			//Set column definition initialisation properties.
			"columnDefs": [{
				"targets": [0], //first column / numbering column
				"orderable": false, //set not orderable
			}, ],
		});
		$('#btn-filter').click(function() { //button filter event click
			table.ajax.reload(); //just reload table
		});
		$('#btn-reset').click(function() { //button reset event click
			$('#form-filter')[0].reset();
			table.ajax.reload(); //just reload table
		});
	});
</script>