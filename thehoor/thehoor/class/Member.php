<?php
class Member
{
	
	private $Mroom,$Mfname,$Mlname,$Mcid, $Mphone,$Memail,$Mmate;
	
	public function __construct( $Mroom,$Mfname,$Mlname,$Mcid, $Mphone,$Memail,$Mmate)
	{
		
		$this->Mroom= $Mroom;
		$this->Mfname= $Mfname;
		$this->Mlname= $Mlname;
		$this->Mcid= $Mcid;
		$this->Mphone= $Mphone;
		$this->Memail= $Memail;
		$this->Mmate= $Mmate;
	}
	
	
	
	
	
	public function getMroom()
	{
		return $this->Mroom;
	}
	
	public function getMfname()
	{
		return $this->Mfname;
	}
	
	public function getMlname()
	{
		return $this->Mlname;
	}
	
	public function getMcid()
	{
		return $this->Mcid;
	}
	public function getMphone()
	{
		return $this->Mphone;
	}
	
	public function getMemail()
	{
		return $this->Memail;
	}
	public function getMmate()
	{
		return $this->Mmate;
	}
	
	public function setMroome($Mroom)
	{
		$this->Mroom= $Mroom;
	}
	
	public function setMfname($Mfname)
	{
		$this->Mfname= $Mfname;
	}
	
	public function setMlname($Mlname)
	{
		$this->Mlname= $Mlname;
	}
	public function setMcid($Mcid)
	{
		$this->Mcid= $Mcid;
	}
	
	
	public function setMphone($Mphone)
	{
		$this->Mphone= $Mphone;
	}
	
	public function setMemail($Memail)
	{
		$this->Memail= $Memail;
	}
	public function setMmate($Mmate)
	{
		$this->Mmate= $Mmate;
	}
}

?>