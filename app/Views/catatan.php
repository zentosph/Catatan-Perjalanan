<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Catatan Perjalanan</h4>
                        <p>Home | Catatan Perjalanan | Isi Data</p>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_catatan_perjalanan') ?>" method="post">
                            <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php elseif (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Tanggal -->
                                <div class="form-group">
                                    <h6 class="text-label">Tanggal</h6>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>

                                <!-- Jam -->
                                <div class="form-group">
                                    <h6 class="text-label">Jam</h6>
                                    <input type="time" class="form-control" name="jam" required>
                                </div>

                                <!-- Lokasi yang Dikunjungi -->
                                <div class="form-group">
                                    <h6 class="text-label">Lokasi yang Dikunjungi</h6>
                                    <input type="text" class="form-control" name="lokasi" placeholder="Masukkan lokasi yang dikunjungi" required>
                                </div>

                                <!-- Suhu Tubuh -->
                                <div class="form-group">
                                    <h6 class="text-label">Suhu Tubuh</h6>
                                    <div class="input-group">
                                        <input type="number" step="0.1" class="form-control" name="suhu_tubuh" placeholder="Masukkan suhu tubuh dalam °C" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">°C</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <button type="button" class="btn btn-light">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
