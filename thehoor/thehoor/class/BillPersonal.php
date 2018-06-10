<?php
class BillPersonal
{
	
	private $billnum,$elec,$water,$personal;
	
	public function __construct( $billnum,$elec,$water,$personal)
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
	
	
	
	
}

?>