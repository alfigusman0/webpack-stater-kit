<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Settings
            <small><i>Default</i></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-gears"></i> Settings</a></li>
            <li class="active"><i>Default</i></li>
        </ol>
    </section>
    <section class="content">

        <!-- Notification -->
        <?php $this->load->view('layout/notification') ?>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Setting Default</h3>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-gears">&nbsp;</i> <span class="caret"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
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