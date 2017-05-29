<div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
        <a href="../assets/index.html" class="site_title"><i class="fa fa-shopping-cart orange"></i> <span class="white">BUATLAPAK.ID</span></a>
    </div>
    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile">
        <div class="profile_pic">
            <img src="../assets/images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>John Doe</h2>
        </div>
    </div>
    <!-- /menu prile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

        <div class="menu_section">
            <h3>Menu Navigasi </h3>
            <ul class="nav side-menu">
                <li><a href="?<?php echo paramEncrypt('page=dasbor')?>"><i class="fa fa-dashboard"></i> Dasbor</a></li>
                <li><a><i class="fa fa-book"></i> Katalog <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="?<?php echo paramEncrypt('page=katalog-produk')?>">Produk</a></li>
                  </ul>
                </li>
                <li><a href="?<?php echo paramEncrypt('page=')?>"><i class="fa fa-credit-card"></i> Order <span class="fa fa-chevron-down"></span></a></li>
                <li><a href="?<?php echo paramEncrypt('page=')?>"><i class="fa fa-users"></i> Pelanggan <span class="fa fa-chevron-down"></span></a></li>
                <li><a><i class="fa fa-tag"></i> Harga <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="index.html">Produk</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-newspaper-o"></i> Halaman <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="?<?php echo paramEncrypt('page=halaman-single')?>">Single</a></li>
                      <!-- <li><a href="index.html"></a></li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-wrench"></i> Konfigurasi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="?<?php echo paramEncrypt('page=konfigurasi-infousaha')?>">Informasi Usaha</a></li>
                      <li><a href="?<?php echo paramEncrypt('page=konfigurasi-tema')?>">Tema Website</a></li>
                  </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo $base_url.'/logout'; ?>">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
