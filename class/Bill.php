<?php
class Bill
{

	private $billnum, $RName;

	public function __construct( $billnum,$RName)
	{
		$this->billnum= $billnum;
		$this->RName= $RName;

	}

	public function getRName()
	{
		return $this->RName;
	}

	public function getbillnum()
	{
		return $this->billnum;
	}

	public function setRName($RName)
	{
		$this->RName= $RName;
	}

	public function setbillnum($billnum)
	{
		$this->billnum= $billnum;
	}

	public function getBillByID($conn,$roomid)
	{
		$sql = "SELECT * FROM Bill WHERE roomNumber = '".$roomid."'";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);

		$data = $rs->fetch_array();

		$this->billnum = $data['billNumber'];
		$this->RName = $data['roomNumber'];

	}

}

?>
