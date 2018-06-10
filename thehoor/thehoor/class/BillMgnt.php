<?php
	class BillMgnt
	{

		public static function getBillItemsByBillID($bill_id){
	require 'conn.php';
	$conn = new mysqli($hostname, $username, $password, $dbname);
	$sql = "SELECT * FROM ORDER_ITEMS WHERE ORDER_INDEX = '" . $bill_id. "' ";
	$query = $conn->query($sql);
	$resultArray = array();
	$count = 0;
	while ($result = $query->fetch_array()) {
		$product = ProductMgnt::getProduct($result['PRO_INDEX']);
		$quantity = $result['QUANTITY'];
		$index =$result['INDEX'];
		$billItem = new OrderItem($index,$product, $quantity);
		$resultArray[] = $billItem;
		$count ++;
	}
	if ($count === 0) {
		return NULL;
	}
	return $resultArray;
}
	
	public static function getBillByBillID($bill_id){
		require "class/BillPersonal.php";
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM BillPersonal WHERE billNumber ='".$bill_id."'";
		$query = $conn->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			$bill= new BillPersonal($result['billNumber'], $result['electric'], $result['water'], $result['personal']);
			return $bill;
		}
		return null;
	}
	public static function getRoomByBillID($bill_id){
		require "class/Member.php";
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM member WHERE m_rid ='".$bill_id."'";
		$query = $conn->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			$bill= new member($result['m_rid'], $result['m_fname'], $result['m_lname'], $result['m_cid'], $result['m_phone'], $result['m_email'], $result['m_mate']);
			return $bill;
		}
		return null;
	}
	public static function getBillByBillID2($bill_id){
		require "class/Bill.php";
		require 'conn.php';
		$conn = new mysqli($hostname, $username, $password, $dbname);
		$sql = "SELECT * FROM Bill WHERE roomNumber ='".$bill_id."'";
		$query = $conn->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			$bill= new Bill($result['billNumber'], $result['roomNumber']);
			return $bill;
		}
		return null;
	}
}
?>