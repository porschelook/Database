<?php
class BillPersonal
{

	private $billnum,$elec,$water,$personal;

	public function __construct($billnum,$elec,$water,$personal)
	{

		$this->billnum= $billnum;
		$this->elec= $elec;
		$this->water= $water;
		$this->personal= $personal;
	}


	public function setbillnum($billnum)
	{
		$this->billnum= $billnum;
	}


	public function getbillnum()
	{
		return $this->billnum;
	}

	public function getelec()
	{
		return $this->elec;
	}

	public function getwater()
	{
		return $this->water;
	}

	public function getpersonal()
	{
		return $this->personal;
	}


	public function setelec($elec)
	{
		$this->elec= $elec;
	}

	public function setwater($water)
	{
		$this->water= $water;
	}
	public function setpersonal($personal)
	{
		$this->personal= $personal;
	}

	public function getBillInfo($conn,$billnum)
	{
		$sql = "SELECT * FROM BillPersonal WHERE billNumber = '".$billnum."'";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);

		$data = $rs->fetch_array();

		$this->billnum = $data['billNumber'];
		$this->elec = $data['electric'];
		$this->water = $data['water'];
		$this->personal = $data['personal'];

	}

	 public function updateBill($conn) {
	   $sql = "UPDATE BillPersonal
	             SET
	            electric = '".$this->elec."', water = '".$this->water."', personal= '".$this->personal."' WHERE billNumber = '".$this->billnum."'";
	   $conn->query($sql) or die($sql."<br>".$conn->error);
		 echo "<script>alert('Bill Update Complete.');window.history.back()</script>";

	 }


}

?>
