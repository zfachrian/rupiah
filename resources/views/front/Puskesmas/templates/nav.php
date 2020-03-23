<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-40 img-radius" src="<?= base_url(''); ?>assets/assets/images/avatar-4.jpg" alt="User-Profile-Image">
                        <div class="user-details">
                            <span><?= $this->session->userdata('kader')['NAMA_KADER'] ?></span>
                            <span id="more-details">Puskesmas<i class="ti-angle-down"></i></span>
                        </div>
                    </div>

                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="<?= base_url('Puskesmas/profile'); ?>"><i class="ti-user"></i>View Profile</a>
                                <a href="<?= base_url('auth/logout'); ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Main</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="<?= base_url('Puskesmas'); ?>">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Menu</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style6">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Rujukan</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="<?= base_url('Puskesmas/rujukan'); ?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Dirujuk</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="<?= base_url('Puskesmas/selesai'); ?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Data Selesai Diperiksa</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </ul>
                </li>
                </ul>
            </div>
        </nav>