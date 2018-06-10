<?php

class Mate
{
  private $_rid;
  private $_rmfname;
  private $_rmlname;
  private $_rmcid;
  private $_rmphone;
  private $_rmemail;

  public function setrID($rid){
    $this->_rid = $rid;
  }
  public function getrID(){
    return $this->_rid;
  }
  public function setRmFname($rmfname){
    $this->_rmfname =  $rmfname;
  }
  public function getRmFname(){
    return $this->_rmfname;
  }
  public function setRmLname($rmlname){
    $this->_rmlname =  $rmlname;
  }
  public function getRmLname(){
    return $this->_rmlname;
  }
  public function setRmCID($rmcid){
    $this->_rmcid =  $rmcid;
  }
  public function getRmCID(){
    return $this->_rmcid;
  }
  public function setRmPhone($rmphone){
    $this->_rmphone =  $rmphone;
  }
  public function getRmPhone(){
    return $this->_rmphone;
  }
  public function setRmEmail($rmemail){
    $this->_rmemail =  $rmemail;
  }
  public function getRmEmail(){
    return $this->_rmemail;
  }

  public function __construct($rid,$rmfname,$rmlname,$rmcid,$rmphone,$rmemail)
  {

      $this->_rid = $rid;
      $this->_rmfname =$rmfname;
      $this->_rmlname = $rmlname;
      $this->_rmcid =  $rmcid;
      $this->_rmphone = $rmphone;
      $this->_rmemail = $rmemail;

  }

  public function getMateByID($conn,$roomid)
  {
    $sql = "SELECT * FROM mate WHERE m_rid = '".$roomid."'";
    $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

    $data = $rs->fetch_array();

    $this->_rid = $data['m_rid'];
    $this->_rmfname = $data['rm_fname'];
    $this->_rmlname = $data['rm_lname'];
    $this->_rmcid = $data['rm_cid'];
    $this->_rmphone =  $data['rm_phone'];
    $this->_rmemail = $data['rm_email'];

  }


}

?>
