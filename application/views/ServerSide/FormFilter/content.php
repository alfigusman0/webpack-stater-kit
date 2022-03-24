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
        <div class="row">
					<div class="col-md-12">
						<form id="form-filter" class="form-horizontal">
							<div class="form-group row">
								<label for="kolom_1" class="col-sm-2 col-form-label">Kolom 1</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="kolom_1" placeholder="Kolom 1">
								</div>
							</div>
							<div class="form-group row">
								<label for="kolom_2" class="col-sm-2 col-form-label">Kolom 2</label>
								<div class="col-sm-10">
									<select class="form-control" id="kolom_2">
										<option value="">&laquo; Semua &raquo;</option>
										<option value="false">False</option>
										<option value="true">True</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
								<div class="col-sm-10">
									<select class="form-control" id="tahun">
										<option value="">&laquo; Semua &raquo;</option>
										<option value="2021">2021</option>
										<option value="2020">2020</option>
									</select>
								</div>
							</div>
							<div class="text-right">
								<button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
								<button type="button" id="btn-reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
					<div class="col-md-6"></div>
				</div>
				<br />
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