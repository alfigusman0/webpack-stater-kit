<!-- Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Tambah Default</h4>
            </div>
            <?= form_open('Default/CRUD/Create/') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Kolom 1 :</label>
                    <input type="text" name="kolom_1" class="form-control" placeholder="Kolom 1" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Kolom 2 :</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="kolom_2" class="forn-control" value="0" checked>
                                </span>
                                <input type="text" class="form-control" aria-label="False" value="False" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="kolom_2" class="forn-control" value="1">
                                </span>
                                <input type="text" class="form-control" aria-label="True" value="True" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Edit -->
<?php foreach ($tblDefault as $value) : ?>
    <div class="modal fade" id="edit-<?= $value->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Edit Default</h4>
                </div>
                <?= form_open('Default/CRUD/Update/' . $value->id) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Default :</label>
                        <input type="text" name="kolom_1" class="form-control" placeholder="Default" required="" value="<?= $value->kolom_1; ?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Kolom 2 :</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="kolom_2" class="forn-control" value="0" <?= ($value->kolom_2 == '0') ? 'checked' : null ?>>
                                    </span>
                                    <input type="text" class="form-control" aria-label="False" value="False" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="kolom_2" class="forn-control" value="1" <?= ($value->kolom_2 == '1') ? 'checked' : null ?>>
                                    </span>
                                    <input type="text" class="form-control" aria-label="True" value="True" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>
<!-- /.modal -->