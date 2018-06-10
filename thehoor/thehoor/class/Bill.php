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
	
	
	
}

?>