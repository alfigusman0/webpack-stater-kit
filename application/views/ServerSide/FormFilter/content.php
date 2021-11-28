<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Settings Default
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-folder-open"></i> Settings</a></li>
			<li>Default</li>
		</ol>
	</section>

	<section class="content">
		<!-- Notification -->
		<?php $this->load->view('layout/notification') ?>
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Tabel Settings Default</h3>
				<div class="pull-right">
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-gears">&nbsp;</i> <span class="caret"></span>
						</button>

					</div>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<form id="form-filter" class="form-horizontal">
							<div class="form-group">
								<label for="kolom_1" class="col-sm-2 control-label">Kolom 1</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="kolom_1" placeholder="Kolom 1">
								</div>
							</div>
							<div class="form-group">
								<label for="kolom_2" class="col-sm-2 control-label">Kolom 2</label>
								<div class="col-sm-10">
									<select class="form-control" id="kolom_2">
										<option value="">&laquo; Semua &raquo;</option>
										<option value="0">False</option>
										<option value="1">True</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="tahun" class="col-sm-2 control-label">Tahun</label>
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
					<table id="table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Action</th>
								<th>Kolom 1</th>
								<th>Kolom 2</th>
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
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>