<?php
  include "class/Conn.php";
  include "class/Bill.php";
  include "class/BillPersonal.php";

  $billnum = '';
  $billstatus = '';
  $roomid = $_REQUEST['roomid'];
  $electric = $_REQUEST['electric'];
  $water = $_REQUEST['water'];
  $personal = $_REQUEST['rent'];

  $bill = new Bill($billnum,$roomid,$billstatus);
  $bill->addBill($conn);

  $bill->getLastBill($conn,$roomid);
  $lastbill = $bill->getbillnum();

  $billperson = new BillPersonal($lastbill,$electric,$water,$personal);
  $billperson->addBillPersonal($conn);

?>
