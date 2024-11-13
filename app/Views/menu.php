

<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
<a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?=base_url('images/'.$setting->menu)?>" alt="">
                <img class="logo-compact" src="<?=base_url('images/logo-text.png')?>" alt="">
                <img class="brand-title" src="<?=base_url('images/logo-text.png')?>" alt="">
            </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled">
                                <li class="media dropdown-item">
                                    <span class="success"><i class="ti-user"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="primary"><i class="ti-shopping-cart"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="danger"><i class="ti-bookmark"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="primary"><i class="ti-heart"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="media dropdown-item">
                                    <span class="success"><i class="ti-image"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i
                                    class="ti-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                            <?php 
if(session()->get('id')){ 
?>
                            
 <span class="namauser"><?=session()->get('nama')?></span>
    <a class="nav-link" href="" role="button" data-toggle="dropdown">
        <i class="mdi mdi-account"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="./app-profile.html" class="dropdown-item">
            <i class="icon-user"></i>
            <span class="ml-2">Profile</span>
        </a>
        <a href="./email-inbox.html" class="dropdown-item">
            <i class="icon-envelope-open"></i>
            <span class="ml-2">Inbox</span>
        </a>
        <a href="<?=base_url('home/logout')?>" class="dropdown-item">
            <i class="icon-key"></i>
            <span class="ml-2">Logout</span>
        </a>
    </div>
<?php 
} else { 
?>
    <a class="nav-link" href="<?=base_url('home/login')?>" role="button">
        <h6>Login</h6>
    </a>
<?php 
} 
?>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a href="<?=base_url('home/')?>" aria-expanded="false"><i class="fa fa-home"></i><span
            class="nav-text">Dashboard</span></a></li>

            <?php if ($menu->catatan ==1) { ?>

            <li><a href="<?=base_url('home/Catatan')?>" aria-expanded="false"><i class="icon icon-globe-2"></i><span
            class="nav-text">Catatan</span></a></li>

            <?php } ?>

            <?php if ($menu->data ==1) { ?>
            <li class="nav-label">Database</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Data</span></a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Storage</a>
                                <ul aria-expanded="false">
                                    
                    <li><a href="<?=base_url('home/User')?>">User</a></li>
                    <li><a href="<?=base_url('home/LogActivity')?>">Log Activity</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Recycle Bin</a>
                                <ul aria-expanded="false">
                                    
                    <li><a href="<?=base_url('home/RUser')?>">User</a></li>
                    <li><a href="<?=base_url('home/RLogActivity')?>">Log Activity</a></li>
                    <li><a href="<?=base_url('home/RCatatan')?>">Catatan</a></li>
                                </ul>
                            </li>
                </ul>
            </li>
            <?php } ?>

            <?php if ($menu->setting ==1) { ?>
            <li class="nav-label">Advance</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Website</span></a>
                <ul aria-expanded="false">
                    <li><a href="<?=base_url('home/setting')?>">Setting</a></li>
                    <li><a href="<?=base_url('home/ManageMenu')?>">Manage Menu</a></li>
                </ul>
                
            </li>
            <?php } ?>

            </li>
        </ul>
    </div>


</div>