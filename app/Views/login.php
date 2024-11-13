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
                        <h4 class="card-title">Login Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" action="<?= base_url('home/aksi_login') ?>" method="post">
                            <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                                <!-- Username -->
                                <div class="form-group">
                                    <label class="text-label">NIK</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="val-username1" name="username" placeholder="Masukkan NIK" required>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label class="text-label">Nama Lengkap</label>
                                    <div class="input-group transparent-append">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="val-password1" name="password" placeholder="Masukkan Nama Lengkap" required>  
                                    </div>
                                    <div class="form-group" id="recaptchaContainer" style="display: none;">
                            <div class="g-recaptcha" data-sitekey="6LeKfiAqAAAAAIYfzHJCoT6fOpGTpktdJza3fixn"></div>
                        </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Login</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>

                            <!-- Opsi Sign Up -->
                            <div class="mt-3 text-center">
                                <p>Don't have an account? <a href="<?= base_url('home/signup') ?>" class="btn btn-link">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const recaptchaContainer = document.getElementById('recaptchaContainer');

        // Check internet connection and show/hide reCAPTCHA accordingly
        if (navigator.onLine) {
            recaptchaContainer.style.display = 'block';
        } else {
            // Handle the case for fallback to image CAPTCHA if needed
        }
    });
    </script>