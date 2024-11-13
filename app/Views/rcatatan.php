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
                                            <a href="<?=base_url('home/RDCatatan/'. $record->id_catatan)?>">
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
// Function to sort the table based on the selected option
function sortTable() {
    var sortOption = $('#sortOptions').val();
    var table = $('#example').DataTable();
    var columnIndex;

    switch(sortOption) {
        case 'tanggal':
            columnIndex = 0;
            break;
        case 'waktu':
            columnIndex = 1;
            break;
        case 'lokasi':
            columnIndex = 2;
            break;
        case 'suhu_tubuh':
            columnIndex = 3;
            break;
    }

    table.order([columnIndex, 'asc']).draw();
}
</script>
