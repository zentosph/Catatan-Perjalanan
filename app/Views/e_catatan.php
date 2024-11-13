<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Catatan</h4>
                        <p>Home | Catatan | Edit Data</p>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_edit_catatan') ?>" method="post">
                                <!-- Hidden ID Field -->
                                <input type="hidden" name="id" value="<?= $catatan->id_catatan ?>">

                                <!-- Tanggal -->
                                <div class="form-group">
                                    <h6 class="text-label">Tanggal</h6>
                                    <input type="date" class="form-control" name="tanggal" value="<?= $catatan->tanggal ?>" required>
                                </div>

                                <!-- Jam -->
                                <div class="form-group">
                                    <h6 class="text-label">Jam</h6>
                                    <input type="time" class="form-control" name="jam" value="<?= $catatan->waktu ?>" required>
                                </div>

                                <!-- Lokasi -->
                                <div class="form-group">
                                    <h6 class="text-label">Lokasi</h6>
                                    <input type="text" class="form-control" name="lokasi" value="<?= $catatan->lokasi ?>" placeholder="Masukkan lokasi" required>
                                </div>

                                <!-- Suhu Tubuh -->
                                <div class="form-group">
                                    <h6 class="text-label">Suhu Tubuh</h6>
                                    <input type="number" class="form-control" name="suhu_tubuh" value="<?= $catatan->suhu_tubuh ?>" step="0.1" placeholder="Masukkan suhu tubuh" required>
                                </div>

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary">Update Catatan</button>
                                <button type="button" class="btn btn-light" onclick="window.location.href='<?= base_url('home/catatan') ?>'">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
