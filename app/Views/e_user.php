<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_edit_user/') ?>" method="post" enctype="multipart/form-data">
                                
                                <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php elseif (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- NIK -->
                                <div class="form-group">
                                    <h6 class="text-label">NIK</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="NIK" value="<?= $user->NIK ?>" placeholder="Masukkan NIK" required>
                                    </div>
                                </div>

                                <!-- Nama Lengkap -->
                                <div class="form-group">
                                    <h6 class="text-label">Nama Lengkap</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nama_lengkap" value="<?= $user->nama_lengkap ?>" placeholder="Masukkan nama lengkap" required>
                                    </div>
                                </div>

                                <!-- Level -->
                                <div class="form-group">
                                    <h6 class="text-label">Level</h6>
                                    <select class="form-control" name="level" required>
                                        <option value="">Pilih Level</option>
                                        <?php foreach ($level as $lvl): ?>
                                            <option value="<?= $lvl->id_level ?>" <?= $lvl->id_level == $user->level ? 'selected' : '' ?>>
                                                <?= $lvl->level ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                            <input type="hidden" name="id" value="<?=$user->id_user?>">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Update User</button>
                                <a href="<?= base_url('home/user_list') ?>"><button type="button" class="btn btn-light">Batal</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
