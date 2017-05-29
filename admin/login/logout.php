<?php
session_start();
require_once('../config/class.login.php');
$user_logout = new Login();

  $user_logout->doLogout();
  $user_logout->redirect($base_url.'/login');


?>
