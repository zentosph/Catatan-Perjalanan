<style>
    .card{
        height: 70px;
    }

    h4 > a{
        color: blue;
    }
</style>
<div class="content-body">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                        <div class="card-header">
    <?php if (session()->get('level') > 0) { ?>
        <h4 class="card-title">Selamat Datang, <?= session()->get('nama') ?></h4>
    <?php } else { ?>
        <h4 class="card-title">Selamat Datang, silakan <a href="<?= base_url('home/login') ?>">login</a> untuk membuat <strong>catatan</strong></h4>
    <?php } ?>
</div>

                        </div>
                    </div>
                    
                </div>

                

            </div>
        </div>