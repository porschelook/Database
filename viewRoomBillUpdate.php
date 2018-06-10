<?php
  include "class/Conn.php";
  include "class/BillPersonal.php";

  $billnum = $_REQUEST['billnum'];
  $electric = $_REQUEST['electric'];
  $water = $_REQUEST['water'];
  $rent = $_REQUEST['rent'];

  $bill = new BillPersonal($billnum,$electric,$water,$rent);
  $bill->updateBill($conn);
?>
