<!-- Edit -->
<?php foreach ($tblDefault as $value) : ?>
  <div class="modal fade" id="edit-<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Default</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open('Default/CRUD/Update/' . $value->id) ?>
        <div class="modal-body">
          <div class="form-group">
              <label for="recipient-name" class="control-label">Kolom 1 :</label>
              <input type="text" name="kolom_1" class="form-control" placeholder="Kolom 1" required="" value="<?= $value->kolom_1; ?>">
          </div>
          <div class="form-group">
              <label for="recipient-name" class="control-label">Kolom 2 :</label>
              <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                          <input type="radio" name="kolom_2" class="forn-control" value="0" <?= ($value->kolom_2 == '0') ? 'checked' : null ?>>
                        </span>
                      </div>
                      <input type="text" class="form-control" aria-label="False" value="False" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                          <input type="radio" name="kolom_2" class="forn-control" value="1" <?= ($value->kolom_2 == '1') ? 'checked' : null ?>>
                        </span>
                      </div>
                      <input type="text" class="form-control" aria-label="True" value="True" readonly>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- /.modal -->
<!-- Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Default</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <input type="radio" name="kolom_2" class="forn-control" value="0" checked>
                      </span>
                    </div>
                    <input type="text" class="form-control" aria-label="False" value="False" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <input type="radio" name="kolom_2" class="forn-control" value="1">
                      </span>
                    </div>
                    <input type="text" class="form-control" aria-label="True" value="True" readonly>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>