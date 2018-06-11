<?php
include "class/Conn.php";
include "class/Member.php";

$rid = $_REQUEST['m_rid'];
$cid = $_REQUEST['m_cid'];

$ad = new Member($rid,'','','',$cid,'','','');
$ad->myroom($conn);

?>
