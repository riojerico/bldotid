<?php
$base_url='http://localhost/rodjoland/buatlapak/front/big_store/';
date_default_timezone_get('Asia/Jakarta');

##DATABASE
$host 		= 'localhost';
$user		  = 'root';
$pass 		= '';
$database = 'rodjo_store';

    try{
    $conn = new PDO ("mysql:host=$host;dbname=$database", $user, $pass);
      //echo "Connected!";
    }catch(PDOException $e){
      echo $e->getMessage();
    }
###########



?>
