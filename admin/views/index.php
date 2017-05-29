<?php
session_start();
error_reporting(0);
include '../assets/lib-encript/function.php';
include '../config/akses.php';
//LOAD CLASS
spl_autoload_register(function ($class_name){
  include '../config/class.'.$class_name.'.php';
});
$member_id=$_SESSION['member_id'];
//untuk mendecode url yang di enrypsi
$var=decode($_SERVER['REQUEST_URI']);
?>

<?php include '_head.php'; ?>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <?php include '_left-col.php'; ?>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <?php include '_top-nav.php'; ?>
                </div>

            </div>
            <!-- /top navigation -->



            <!-- page content -->
            <div class="right_col" role="main">

              <a href="?<?php echo paramEncrypt('page=form-validation')?>"> link 1</a>
              <a href="?<?php echo paramEncrypt('page=_content')?>"> link 2</a>

              <?php


              	//pecahkan nilai array
              	$page=$var['page'];

              	//concate dengan nama file
              	$halaman="pages/$page.php";

              	//jika file yang diinclude tidak ada.
              	if(!file_exists($halaman) || empty($page)){
              		//include "index2.html";
              	}else{


              		include "$halaman";

              	}
              ?>


            </div>
            <!-- /page content -->


        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <?php include '_js.php'; ?>
</body>

</html>
