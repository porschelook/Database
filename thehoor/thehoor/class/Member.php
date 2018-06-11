<?php
class Member
{
	
	private $Mroom,$Mexp,$Mfname,$Mlname,$Mcid, $Mphone,$Memail,$Mmate;
	
	public function __construct( $Mroom,$Mexp,$Mfname,$Mlname,$Mcid, $Mphone,$Memail,$Mmate)
	{
		
		$this->Mroom= $Mroom;
		$this->Mexp= $Mexp;
		$this->Mfname= $Mfname;
		$this->Mlname= $Mlname;
		$this->Mcid= $Mcid;
		$this->Mphone= $Mphone;
		$this->Memail= $Memail;
		$this->Mmate= $Mmate;
	}
	
	
	
	public function getMexp()
	{
		return $this->Mexp;
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
	public function setMexp($Mexp)
	{
		$this->Mexp= $Mexp;
	}
	
	public function myroom($conn)
	{
		$sql = "SELECT * FROM member WHERE m_rid = '".$this->Mroom."' AND m_cid = '".$this->Mcid."'";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);     //save information from table to object
		$data = $rs->fetch_array();  //mysqli_fecth_array($object);
		if(!$data){
			echo "<script>alert('ID or Password incorrect.');window.history.back()</script>";
		}else{
			session_start();
			$_SESSION["m_rid"] = $data['m_cid'];
			session_write_close();
			echo "<script>alert('Login successful.');window.location='my.php?rn=$this->Mroom'</script>";
			
			
		}
		
		
		$conn->close();
	}
	
	public function getMemById2($conn) {
		
		$sql = "SELECT * FROM member WHERE mem_id = '".$this->_id."'";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);
		$data = $rs->fetch_object();
		
		$this->_name = $data->mem_name;
		$this->_lname = $data->mem_lname;
		$this->_pwd =  $data->mem_pass;
		$this->_type = $data->mem_type;
		$this->_address = $data->mem_add;
		$this->_email = $data->mem_email;
		
	}
	
	public function updateMemById2($conn) {
		
		$sql = "UPDATE member SET
              mem_name = '".$this->_name."'
              ,mem_lname = '".$this->_lname."'
              ,mem_add = '".$this->_address."'
              ,mem_email = '".$this->_email."'
            WHERE mem_id = '".$this->_id."'";
		$conn->query($sql) or die($conn->error);
		
	}
}

?>