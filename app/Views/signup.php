<style>
    .card{
        margin-top: 100px;
        margin-right: 250px;
    }
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Signup Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_signup_user') ?>" method="post">
                                
                                <!-- NIK -->
                                <div class="form-group">
                                    <label class="text-label">NIK</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="val-nik" name="nik" placeholder="Enter NIK" required>
                                    </div>
                                </div>

                                <!-- Nama Lengkap -->
                                <div class="form-group">
                                    <label class="text-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="val-nama_lengkap" name="nama_lengkap" placeholder="Enter full name" required>
                                    </div>
                                </div>


                                <!-- Submit and Cancel Buttons -->
                                <button type="submit" class="btn btn-primary">Signup</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>

                            <!-- Opsi Login -->
                            <div class="mt-3 text-center">
                                <p>Already have an account? <a href="<?= base_url('home/login') ?>" class="btn btn-link">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
