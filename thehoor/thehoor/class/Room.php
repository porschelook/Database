<?php
class Room
{
	
	private $RType, $RQuan,$RImage;
	
	public function __construct( $RType,$RImage,$RQuan)
	{
		
		$this->RType= $RType;
		$this->RImage= $RImage;
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
	
	public function getRImage()
	{
		return $this->RImage;
	}
	
	
	public function setRType($RType)
	{
		$this->RType= $RType;
	}
	
	
	public function setRQuan($RQuan)
	{
		$this->RQuan= $RQuan;
	}
	
	public function setRImage($RImage)
	{
		$this->RImage= $RImage;
	}
	
}

?>