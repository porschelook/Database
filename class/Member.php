<?php

class Member
{
  private $_rid;
  private $_exp;
  private $_fname;
  private $_lname;
  private $_cid;
  private $_phone;
  private $_email;
  private $_mate;

  public function setrID($rid){
    $this->_rid = $rid;
  }
  public function getrID(){
    return $this->_rid;
  }
  public function setExp($exp){
    $this->_exp =  $exp;
  }
  public function getExp(){
    return $this->_exp;
  }
  public function setFname($fname){
    $this->_fname =  $fname;
  }
  public function getFname(){
    return $this->_fname;
  }
  public function setLname($lname){
    $this->_lname =  $lname;
  }
  public function getLname(){
    return $this->_lname;
  }
  public function setCID($cid){
    $this->_cid =  $cid;
  }
  public function getCID(){
    return $this->_cid;
  }
  public function setPhone($phone){
    $this->_phone =  $phone;
  }
  public function getPhone(){
    return $this->_phone;
  }
  public function setEmail($email){
    $this->_email =  $email;
  }
  public function getEmail(){
    return $this->_email;
  }
  public function setMate($mate){
    $this->_mate =  $mate;
  }
  public function getMate(){
    return $this->_mate;
  }

  public function __construct($rid,$exp,$fname,$lname,$cid,$phone,$email,$mate)
  {

      $this->_rid = $rid;
      $this->_exp = $exp;
      $this->_fname =$fname;
      $this->_lname = $lname;
      $this->_cid =  $cid;
      $this->_phone = $phone;
      $this->_email = $email;
      $this->_mate = $mate;

  }

  public function AddAccount($conn)
  {

      $sql = "SELECT COUNT(m_rid) AS mData FROM member WHERE m_rid = '".$this->_rid."'";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
      $data = $rs->fetch_array();

      if($data['mData'] != 0) {

          echo "<script>alert('ห้องนี้มีเจ้าของสัญญาเเล้ว');window.history.back()</script>";
          return -1;

      }

      $sql = "INSERT INTO member
                (m_rid, m_exp, m_fname, m_lname, m_cid, m_phone, m_email, m_mate)
                VALUES
                ('".$this->_rid."','".$this->_exp."','".$this->_fname."','".$this->_lname."','".$this->_cid."','".$this->_phone."','".$this->_email."','".$this->_mate."')";
      $conn->query($sql) or die($sql."<br>".$conn->error);
        if($this->_mate == 0){
          echo "<script>alert('Member Added!');window.location='addAccount-page.php'</script>";
        }

  }

  public function AddMate($conn)
  {
      $sql = "SELECT COUNT(m_rid) AS mData FROM mate WHERE m_rid = '".$this->_rid."'";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
      $data = $rs->fetch_array();

      if($data['mData'] != 0) {

          echo "<script>alert('ไม่สามารถเพิ่ม Room mate ได้ - ห้องนี้มี Room mate เเล้ว');window.history.back()</script>";
          return -1;

      }

      $sql = "INSERT INTO mate
                (m_rid, rm_fname, rm_lname, rm_cid, rm_phone, rm_email)
                VALUES
                ('".$this->_rid."','".$this->_fname."','".$this->_lname."','".$this->_cid."','".$this->_phone."','".$this->_email."')";
      $conn->query($sql) or die($sql."<br>".$conn->error);
      echo "<script>alert('Member And Room-mate Added!');window.location='addAccount-page.php'</script>";
  }

  public function getMemberByID($conn,$roomid)
  {
    $sql = "SELECT * FROM member WHERE m_rid = '".$roomid."'";
    $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

    $data = $rs->fetch_array();

    $this->_rid = $data['m_rid'];
    $this->_exp = $data['m_exp'];
    $this->_fname = $data['m_fname'];
    $this->_lname = $data['m_lname'];
    $this->_cid = $data['m_cid'];
    $this->_phone =  $data['m_phone'];
    $this->_email = $data['m_email'];
    $this->_mate = $data['m_mate'];

  }

  public function myroom($conn)
	{
		$sql = "SELECT * FROM member WHERE m_rid = '".$this->_rid."' AND m_cid = '".$this->_cid."'";
		$rs = $conn->query($sql) or die($sql."<br>".$conn->error);     //save information from table to object
		$data = $rs->fetch_array();  //mysqli_fecth_array($object);
		if(!$data){
			echo "<script>alert('Can not find your room.');window.history.back()</script>";
		}else{
			session_start();
			$_SESSION["m_rid"] = $data['m_cid'];
			session_write_close();
			echo "<script>alert('Room found!');window.location='my.php?rn=$this->_rid'</script>";


		}


		$conn->close();
	}

}

?>
