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
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped" style="width: 100%;">
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
        </div>
    </section>
</div>