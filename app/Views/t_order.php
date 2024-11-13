<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pesan Website</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_order_website') ?>" method="post" enctype="multipart/form-data">
                                
                                <!-- Pesan Sukses dan Error -->
                                <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php elseif (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Nama Website -->
                                <div class="form-group">
                                    <h6 class="text-label">Nama Website</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="website_name" placeholder="Masukkan nama website" required>
                                    </div>
                                </div>

                                <!-- Upload Logo -->
                                <div class="form-group">
                                    <h6 class="text-label">Logo</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-image"></i></span>
                                        </div>
                                        <input type="file" class="form-control" name="logo" accept="image/*" required>
                                    </div>
                                    <small class="form-text text-muted">Unggah logo untuk website Anda (ukuran yang disarankan: 500x500 piksel).</small>
                                </div>

                                <!-- Warna yang Diinginkan -->
                                <div class="form-group">
                                    <h6 class="text-label">Warna Utama</h6>
                                    <input type="color" class="form-control form-control-color" name="primary_color" value="#000000" title="Pilih warna Anda">
                                </div>
                                <div class="form-group">
                                    <h6 class="text-label">Warna Sekunder</h6>
                                    <input type="color" class="form-control form-control-color" name="secondary_color" value="#ffffff" title="Pilih warna Anda">
                                </div>

                                <!-- Jenis Website -->
                                <div class="form-group">
                                    <h6 class="text-label">Jenis Website</h6>
                                    <select class="form-control" name="website_type" required>
                                        <option value="">Pilih Jenis</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="portfolio">Portfolio</option>
                                        <option value="blog">Blog</option>
                                        <option value="business">Bisnis</option>
                                        <option value="personal">Pribadi</option>
                                    </select>
                                </div>

                                <!-- Fitur yang Dibutuhkan -->
                                <div class="form-group">
                                    <h6 class="text-label">Fitur yang Dibutuhkan</h6>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="features[]" value="contact_form"> Formulir Kontak</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="features[]" value="gallery"> Galeri Gambar</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="features[]" value="blog_section"> Bagian Blog</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="features[]" value="shopping_cart"> Keranjang Belanja</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="features[]" value="user_login"> Login/Pendaftaran Pengguna</label>
                                    </div>
                                </div>

                                <!-- Instruksi Tambahan -->
                                <div class="form-group">
                                    <h6 class="text-label">Instruksi Tambahan</h6>
                                    <textarea class="form-control" name="additional_instructions" rows="4" placeholder="Instruksi atau kustomisasi khusus?"></textarea>
                                </div>

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
                                <button type="button" class="btn btn-light">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
