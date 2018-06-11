<?php
class Bill
{

	private $billnum, $RName, $status;

	public function __construct( $billnum,$RName,$billstatus)
	{
		$this->billnum= $billnum;
		$this->RName= $RName;
		$this->billstatus= $billstatus;

	}

	public function getbillnum()
	{
		return $this->billnum;
	}
	public function getRName()
	{
		return $this->RName;
	}
	public function getBillStatus()
	{
		return $this->billstatus;
	}

	public function setRName($RName)
	{
		$this->RName = $RName;
	}
	public function setbillnum($billnum)
	{
		$this->billnum = $billnum;
	}
	public function setBillStatus($billnum)
	{
		$this->billstatus = $billstatus;
	}



	public function getBillByID($conn,$roomid)
	{
		$sql = "SELECT * FROM Bill WHERE roomNumber = '".$roomid."'";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);

		$data = $rs->fetch_array();

		$this->billnum = $data['billNumber'];
		$this->RName = $data['roomNumber'];
		$this->billstatus = $data['billStatus'];

	}

	public function addBill($conn)
	{
		$sql = "INSERT INTO Bill
							(billNumber, roomNumber, billStatus)
							VALUES
							('".$this->billnum."','".$this->RName."','".$this->billstatus."')";
		$conn->query($sql) or die($sql."<br>".$conn->error);

	}

	public function getLastBill($conn,$roomid)
	{
		$sql = "SELECT * FROM Bill ORDER BY billNumber DESC LIMIT 0, 1";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);

		$data = $rs->fetch_array();

		$this->billnum = $data['billNumber'];
		$this->RName = $data['roomNumber'];
		$this->billstatus = $data['billStatus'];

	}

}

?>
