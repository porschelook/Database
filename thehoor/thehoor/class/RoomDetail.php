<?php
class RoomDetail
{
	
	private $RName,$RDes,$RPrice,$RType, $RStatus,$RImage;
	
	public function __construct( $RName,$RDes,$RType,$RPrice,$RStatus,$RImage)
	{
		
		$this->RType= $RType;
		$this->RName= $RName;
		$this->RPrice= $RPrice;
		$this->RDes= $RDes;
		$this->RStatus= $RStatus;
		$this->RImage= $RImage;
	}
	
	
	public function setRImage($RImage)
	{
		$this->RImage= $RImage;
	}
	
	
	public function getRImage()
	{
		return $this->RImage;
	}
	
	public function getRType()
	{
		return $this->RType;
	}
	
	public function getRName()
	{
		return $this->$RName;
	}
	
	public function getRPrice()
	{
		return $this->RPrice;
	}
	public function getRStatus()
	{
		return $this->RStatus;
	}
	
	public function getRDes()
	{
		return $this->RDes;
	}
	
	public function setRType($RType)
	{
		$this->RType= $RType;
	}
	
	
	public function setRName($RName)
	{
		$this->RName= $RName;
	}
	public function setRPrice($RPrice)
	{
		$this->RPrice= $RPrice;
	}
	
	
	public function setRDes($RDes)
	{
		$this->RQuan= $RDes;
	}
	
	public function setRStatus($RStatus)
	{
		$this->RStatus= $RStatus;
	}
	
}

?>