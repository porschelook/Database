<?php
class Room
{
	
	private $RType, $RQuan;
	
	public function __construct( $RType,$RQuan)
	{
		
		$this->RType= $RType;
		
		$this->RQuan= $RQuan;
		
	}
	

	
	
	
	
	public function getRType()
	{
		return $this->RType;
	}
	
	public function getRQuan()
	{
		return $this->RQuan;
	}
	
	
	
	public function setRType($RType)
	{
		$this->RType= $RType;
	}
	
	
	public function setRQuan($RQuan)
	{
		$this->RQuan= $RQuan;
	}
	
	
	
}

?>