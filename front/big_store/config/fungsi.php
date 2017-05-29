<?php
//id member demo = 0
$id_member = 1;

//Menu
$menu  = $conn->query("SELECT * FROM rod_kategori where id_member='$id_member' and aktif='1' order by kategori");
$menu2 = $conn->query("SELECT * FROM rod_menu where id_member='$id_member' and aktif='1' order by posisi");

//logo
$logo = $conn->query("SELECT * FROM rod_logo where id_member='$id_member' and aktif='1'")->fetch(PDO::FETCH_OBJ);
?>
