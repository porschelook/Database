<?php
  include "class/Conn.php";
  include "class/RoomDetail.php";

  $roomid = $_REQUEST['roomid'];
  $roomprice = $_REQUEST['roomprice'];
  $roomstatus = $_REQUEST['roomstatus'];

  $room = new RoomDetail($roomid,'','',$roomprice,$roomstatus,'');
  $room->updateRoom($conn);
?>
