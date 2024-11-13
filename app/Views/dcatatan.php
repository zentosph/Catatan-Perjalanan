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
                    <h4>Catatan Perjalanan</h4>
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
                <a href="<?=base_url('home/TambahCatatan')?>">
                    <button class="btn btn-primary">Tambah</button>
                </a>
            </div>
            <div class="col-md-3">
                <select id="sort-column" class="form-control">
                    <option value="tanggal">Tanggal</option>
                    <option value="suhu">Suhu Tubuh</option>
                </select>
            </div>
            <div class="col-md-3">
                <select id="sort-order" class="form-control">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
            <div class="col-md-3">
                <button id="sort-button" class="btn btn-primary">Sort</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($catatan as $record): ?>
                                    <tr class="tdcoy">
                                        <td><?= $record->tanggal ?></td>
                                        <td><?= $record->waktu ?></td>
                                        <td><?= $record->lokasi ?></td>
                                        <td><?= $record->suhu_tubuh ?> °C</td>
                                        <td>
                                            <a href="<?=base_url('home/SDCatatan/'. $record->id_catatan)?>">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>

                                            <a href="<?=base_url('home/EditCatatan/'. $record->id_catatan)?>">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>

                                            <a href="<?=base_url('home/BackupCatatan/'. $record->id_catatan)?>">
                                                <button class="btn btn-info">
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
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

<script>
   var $jq = jQuery.noConflict();
$jq(document).ready(function() {
    var table = $jq('#example').DataTable();
    
    // Sort button click event
    $jq('#sort-button').on('click', function() {
        var sortColumn = $jq('#sort-column').val(); // Get selected column
        var sortOrder = $jq('#sort-order').val(); // Get selected order
        var columnIndex = (sortColumn === 'tanggal') ? 0 : 3; // 0 for Tanggal, 3 for Suhu Tubuh
        
        table.order([columnIndex, sortOrder]).draw();
    });
});

</script>

