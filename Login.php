<?php
  include "class/Conn.php";
  include "class/Admin.php";

  $id = $_REQUEST['ausername'];
  $pwd = $_REQUEST['apassword'];

  $ad = new Admin($id,$pwd,'','','');
  $ad->login($conn);

?>
