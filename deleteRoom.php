<?php

  include "class/Conn.php";
  include "class/RoomDetial.php";


  $roomid = $_REQUEST['roomid'];
  $room = new RoomDetail($roomid,'','','','','');
  $room->deleteRoom($conn);


?>
