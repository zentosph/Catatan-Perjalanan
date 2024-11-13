<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah User</h4>
                        <p>Home | User | Tambah Data</p>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_tambah_user') ?>" method="post">

                                <!-- NIK -->
                                <div class="form-group">
                                    <h6 class="text-label">NIK</h6>
                                    <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" required>
                                </div>

                                <!-- Nama Lengkap -->
                                <div class="form-group">
                                    <h6 class="text-label">Nama Lengkap</h6>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                                </div>

                                <!-- Level -->
                                <div class="form-group">
                                    <h6 class="text-label">Level</h6>
                                    <select class="form-control" name="level" required>
                                        <option value="">Pilih Level</option>
                                        <?php foreach ($level as $lvl): ?>
                                            <option value="<?= $lvl->id_level ?>"><?= $lvl->level ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary">Tambah User</button>
                                <button type="button" class="btn btn-light" onclick="window.location.href='<?= base_url('home/user') ?>'">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
