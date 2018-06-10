<?php
  include "class/Conn.php";
  include "class/RoomDetail.php";

  $roomid = $_REQUEST['roomid'];
  $roomdes = $_REQUEST['roomdes'];
  $roomprice = $_REQUEST['roomprice'];
  $roomstatus = $_REQUEST['roomstatus'];

  $room = new RoomDetail($roomid,$roomdes,'',$roomprice,$roomstatus,'');
  $room->updateRoom($conn);
?>
