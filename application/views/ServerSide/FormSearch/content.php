<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Settings Default</h1>
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
        <h3 class="card-title">Tabel Settings Default</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-striped" style="width: 100%;">
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