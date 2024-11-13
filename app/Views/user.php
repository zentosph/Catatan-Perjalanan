<style>
    .tdcoy > td {
        color: black;
    }

    .modal-body > p {
        color: black;
    }
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>User Data</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>

        <!-- Sorting Options -->
        <div class="row mb-3">
            <div class="col-md-3">

                <a href="<?=base_url('home/TambahUser')?>">
                    <button class="btn btn-primary">Tambah User</button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php elseif (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $record): ?>
                                    <tr class="tdcoy">
                                        <td><?= $record->NIK ?></td>
                                        <td><?= $record->nama_lengkap ?></td>
                                        <td><?= $record->level ?></td>
                                        <td>
                                            <a href="<?=base_url('home/SDUser/'. $record->id_user)?>">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>

                                            <a href="<?=base_url('home/EditUser/'. $record->id_user)?>">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>    
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?=base_url('vendor/global/global.min.js')?>"></script>
<script src="<?=base_url('js/quixnav-init.js')?>"></script>
<script src="<?=base_url('js/custom.min.js')?>"></script>
<script src="<?=base_url('vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('js/plugins-init/datatables.init.js')?>"></script>

