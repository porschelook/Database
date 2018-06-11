<?php

  include "class/Conn.php";
  include "class/RoomDetail.php";


  $roomid = $_REQUEST['roomid'];
  $roomdes = $_REQUEST['roomdes'];
  $roomtype = $_REQUEST['roomtype'];
  $roomprice = $_REQUEST['roomprice'];
  $roomstatus = 0;
  $roomimage = '';

  $room = new RoomDetail($roomid,$roomdes,$roomtype,$roomprice,$roomstatus,'');
  $room->addRoom($conn);

?>
