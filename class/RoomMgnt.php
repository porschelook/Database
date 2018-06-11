<?php
class RoomMgnt
{
	public static function getMembyRoomID($r_id,$c_id){
		require_once"class/Member.php";
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM member WHERE m_rid ='".$r_id."'AND m_cid ='".$c_id."'";
		$query = $conn->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			$bill= new member($result['m_rid'], $result['m_exp'], $result['m_fname'], $result['m_lname'], $result['m_cid'], $result['m_phone'], $result['m_email'], $result['m_mate'] );
			return $bill;
		}
		return null;

	}
	public static function getMembyRoomID2($r_id){
		require_once"class/Member.php";
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM member WHERE m_rid ='".$r_id."'";
		$query = $conn->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			$bill= new member($result['m_rid'], $result['m_exp'], $result['m_fname'], $result['m_lname'], $result['m_cid'], $result['m_phone'], $result['m_email'], $result['m_mate'] );
			return $bill;
		}
		return null;
	}
	public static function getRoom($RType)
	{	require_once"class/RoomDetail.php";
		//echo $Rtype;
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM RoomDetail WHERE roomType ='" . $RType. "'";
		$query = $conn->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			//$promotion = PromotionMgnt::getPromotionByProductID($result["PRO_INDEX"]);
			$roomdetail= new RoomDetail($result["roomNumber"], $result["roomDes"], $result["roomType"], $result["roomPrice"], $result["roomStatus"], $result["roomImage"]);
			//echo $result["roomNumber"];
			return $roomdetail;
		}else{
			//echo $Rtype;
			return NULL;
		}
	}
	public static function getRoom2($RType)
	{	require_once"class/Room.php";
	//echo $Rtype;
	require 'conn.php';
	$conn = new mysqli($hostname, $username, $password, $dbname);
	$sql = "SELECT * FROM Room WHERE roomType ='" . $RType. "'";
	$query = $conn->query($sql);
	$result = $query->fetch_assoc();
	if($result){
		//$promotion = PromotionMgnt::getPromotionByProductID($result["PRO_INDEX"]);
		$roomdetail= new Room($result["roomType"], $result["roomQuantity"]);
		//echo $result["roomNumber"];
		return $roomdetail;
	}else{
		//echo $Rtype;
		return NULL;
	}
	}
	public static function getRoombyRoomNumber($Rn)
	{	require_once"class/RoomDetail.php";
	//echo $Rtype;
	require 'conn.php';
	$conn = new mysqli($hostname, $username, $password, $dbname);
	$sql = "SELECT * FROM RoomDetail WHERE roomNumber ='" . $Rn. "'";
	$query = $conn->query($sql);
	$result = $query->fetch_assoc();
	if($result){
		//$promotion = PromotionMgnt::getPromotionByProductID($result["PRO_INDEX"]);
		$roomdetaill= new RoomDetail($result["roomNumber"], $result["roomDes"], $result["roomType"], $result["roomPrice"], $result["roomStatus"], $result["roomImage"]);
		//echo $result["roomNumber"];
		return $roomdetaill;
	}else{
		//echo $Rtype;
		return NULL;
	}
	}
	public static function getAllRoom()
	{
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM Room ";
		$query = $conn->query($sql);
		$resultArray = array();
		$i = 0;
		while ($result = $query->fetch_array()) {
			//$promotion = PromotionMgnt::getPromotionByProductID($result["PRO_INDEX"]);
			$room = new Room($result["roomType"], $result["roomQuantity"]);
			$resultArray[] = $room;
		}
		shuffle($resultArray);
		return $resultArray;
	}

}

?>
