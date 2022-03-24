<!-- DataTables -->
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(document).ready(function() {
        var dataTable = $('#table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url('Default/ServerSide/JsonFormSearch/') ?>",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 4, 5], // sesuaikan order table dengan jumlah column
                "orderable": true,
            }, ],
        });
    });
</script>