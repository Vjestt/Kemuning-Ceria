<div class="header">

<div class="header-left active">
    <a href="<?= base_url('publik/home') ?>" class="logo ">
        <img src="<?= base_url('assets/front/') ?>assets/png/LOGO.png" alt="">
    </a>
   
   
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
    <span class="bar-icon">
        <span></span>
    <span></span>
    <span></span>
    </span>
</a>

<ul class="nav user-menu">

    <!-- <li class="nav-item">
        <div class="top-nav-search">
            <a href="javascript:void(0);" class="responsive-search">
                <i class="fa fa-search"></i>
            </a>
            <form action="#">
                <div class="searchinputs">
                    <input type="text" placeholder="Search Here ...">
                    <div class="search-addon">
                        <span><img src="<?= base_url('assets/admin/') ?>assets/img/icons/closes.svg" alt="img"></span>
                    </div>
                </div>
                <a class="btn" id="searchdiv"><img src="<?= base_url('assets/admin/') ?>assets/img/icons/search.svg" alt="img"></a>
            </form>
        </div>
    </li> -->


    


   
    <li class="nav-item dropdown has-arrow main-drop">
        <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
            <span class="user-img"><img src="<?= base_url('assets/admin/') ?>assets/img/profiles/avator1.jpg" alt="">
                <span class="status online"></span></span>
        </a>
        <div class="dropdown-menu menu-drop-user">
            <div class="profilename">
                <div class="profileset">
                    <span class="user-img"><img src="<?= base_url('assets/admin/') ?>assets/img/profiles/avator1.jpg" alt="">
                        <span class="status online"></span></span>
                    <div class="profilesets">
                        <h6><?= $this->session->userdata('nama'); ?></h6>
                        <h5><?= $this->session->userdata('level'); ?></h5>
                    </div>
                </div>
                <hr class="m-0">
                <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile
                </a>
                <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                        data-feather="settings"></i>Settings</a>
                <hr class="m-0">
                <a class="dropdown-item logout pb-0" href="<?= base_url('auth/logout') ?>"><img src="<?= base_url('assets/admin/') ?>assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
            </div>
        </div>
    </li>
</ul>


<div class="dropdown mobile-user-menu">
    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="profile.html">My Profile</a>
        <a class="dropdown-item" href="generalsettings.html">Settings</a>
        <a class="dropdown-item" href="signin.html">Logout</a>
    </div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu ">

        <ul>
            <li class="<?= ($this->uri->segment(2) == 'home' ? 'active' : '')?>">
                <a href="<?= base_url('admin/home') ?>"><img src="<?= base_url('assets/admin/') ?>assets/img/icons/dashboard.svg" alt="img"><span>
                        Dashboard</span> </a>
            </li>
            <li class="<?= ($this->uri->segment(2) == 'paket' ? 'active' : '')?>">
                <a href="<?= base_url('admin/paket') ?>"><i data-feather="database"></i><span>Paket</span> </a>
            </li>

            <li class="<?= ($this->uri->segment(2) == 'content' ? 'active' : '')?>">
                <a href="<?= base_url('admin/content') ?>"><i data-feather="file-text"></i><span>Content</span> </a>
            </li>
            <?php if($this->session->userdata('level')== 'tt'){?>
            <li class="<?= ($this->uri->segment(2) == 'user' ? 'active' : '')?>">
                <a href="<?= base_url('admin/user') ?>"><i data-feather="user"></i><span>User</span> </a>
            </li>
            <?php }?>
            <li class="<?= ($this->uri->segment(2) == 'configurasi' ? 'active' : '')?>">
                <a href="<?= base_url('admin/configurasi') ?>"><i data-feather="aperture"></i><span>configurasi</span> </a>
            </li>

        </ul>
    </div>
</div>
</div>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('alert') ?>"></div>
<div class="error-data" data-errordata="<?= $this->session->flashdata('error') ?>"></div>

