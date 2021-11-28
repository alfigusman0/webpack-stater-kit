<script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js//dataTables.bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        var dataTable = $('#dataTable').DataTable({
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