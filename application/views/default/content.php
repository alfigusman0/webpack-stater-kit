<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Page Header</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Level</a></li>
            <li class="breadcrumb-item active">Here</li>
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
        <h3 class="card-title">Page Header</h3>
      </div>
      <div class="card-body">
        <!--------------------------
          | Your Page Content Here |
          -------------------------->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->