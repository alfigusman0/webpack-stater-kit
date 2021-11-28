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
                    <button type="button" class="btn btn-sm btn-primary" id="tambah_tooltip" data-toggle="modal" data-target="#tambah" title="Tambah">
                        <i class="fa fa-plus"></i>
                    </button>
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
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-gear"></i> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" data-toggle="modal" data-target="#edit-<?= $value->id ?>">Edit</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="<?= base_url('Default/CRUD/Delete/' . $value->id) ?>" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></li>
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
        </div>
    </section>
</div>