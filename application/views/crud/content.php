  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Settings</a></li>
              <li class="breadcrumb-item active">Default</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Notification -->
      <?php $this->load->view('layout/notification') ?>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Setting Default</h3>
          <div class="float-right">
            <button type="button" class="btn btn-sm btn-primary" id="tambah_tooltip" data-toggle="modal" data-target="#tambah" title="Tambah">
                <i class="fa fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Action</th>
                        <th>Kolom 1</th>
                        <th>Kolom 2</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($tblDefault as $value) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-cog"></i> <span class="caret"></span>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-<?= $value->id ?>">Edit</a>
                                      <a class="dropdown-item" href="<?= base_url('Default/CRUD/Delete/' . $value->id) ?>" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a>
                                  </ul>
                              </div>
                            </td>
                            <td><?= $value->kolom_1 ?></td>
                            <td class="text-center">
                                <?php if ($value->kolom_2 == '0') : ?>
                                    <span class="label label-danger">False</span>
                                <?php else : ?>
                                    <span class="label label-success">True</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $value->date_created ?></td>
                            <td><?= $value->date_updated ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Action</th>
                        <th>Kolom 1</th>
                        <th>Kolom 2</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->