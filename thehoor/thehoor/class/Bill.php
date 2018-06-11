<?php
class Bill
{
	
	private $billnum, $roomnum,$roomstatus;
	
	public function __construct( $billnum,$roomnum,$roomstatus)
	{
		
		$this->billnum= $billnum;
		
		$this->roomnum= $roomnum;
		$this->roomstatus= $roomstatus;
	}
	
	
	
	
	
	
	public function getroomnum()
	{
		return $this->roomnum;
	}
	
	public function getbillnum()
	{
		return $this->billnum;
	}
	public function getroomstatus()
	{
		return $this->roomstatus;
	}
	
	
	
	public function setroomstatus($roomstatus)
	{
		$this->roomstatus= $roomstatus;
	}
	
	
	
	public function setroomnum($roomnum)
	{
		$this->roomnum= $roomnum;
	}
	
	
	public function setbillnum($billnum)
	{
		$this->billnum= $billnum;
	}
	
	
	
}

?>