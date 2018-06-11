<?php
include "class/Conn.php";
include "class/Member.php";

$id = $_REQUEST['m_rid'];
$pwd = $_REQUEST['m_cid'];

$ad = new Member($id,'','','',$pwd,'','','');
$ad->myroom($conn);

?>