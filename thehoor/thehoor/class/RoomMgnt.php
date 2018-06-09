<?php
class RoomMgnt
{
	
	public static function getRoom($RType)
	{	require "class/RoomDetail.php";
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