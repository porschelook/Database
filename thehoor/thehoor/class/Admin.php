<?php

class Admin
{
  private $_id;
  private $_pwd;
  private $_name;
  private $_lname;
  private $_email;

  public function setID($id){
    $this->_id = $id;
  }
  public function getID(){
    return $this->_id;
  }
  public function setpwd($pwd){
    $this->_pwd =  $pwd;
  }
  public function getpwd(){
    return $this->_pwd;
  }
  public function setname($name){
    $this->_name =  $name;
  }
  public function getname(){
    return $this->_name;
  }
  public function setlname($lname){
    $this->_lname =  $lname;
  }
  public function getlname(){
    return $this->_lname;
  }
  public function setemail($email){
    $this->_email =  $email;
  }
  public function getemail(){
    return $this->_email;
  }
  public function __construct($id,$pwd,$name,$lname,$email)
  {

      $this->_id = $id;
      $this->_name =$name;
      $this->_lname = $lname;
      $this->_pwd =  $pwd;
      $this->_email = $email;

  }

  public function register($conn)
  {

      $sql = "SELECT COUNT(mem_id) AS cData FROM member WHERE mem_id = '".$this->_id."'";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
      $data = $rs->fetch_array();

      if($data['cData'] != 0) {

          echo "<script>alert('username ถูกใช้แล้วจ้าาา');window.history.back()</script>";
          return -1;

      }

      $sql = "INSERT INTO member
                (mem_id, mem_name, mem_lname, mem_pass, mem_type, mem_add, mem_email)
                VALUES
                ('".$this->_id."','".$this->_name."','".$this->_lname."','".$this->_pwd."','".$this->_type."','".$this->_address."','".$this->_email."')";
      $conn->query($sql) or die($sql."<br>".$conn->error);
      echo "<script>alert('บักทึกแล้วจ้าาา');window.location='login.html'</script>";
  }

  public function login($conn)
  {
      $sql = "SELECT * FROM admin WHERE a_id = '".$this->_id."' AND a_pwd = '".$this->_pwd."'";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);     //save information from table to object
      $data = $rs->fetch_array();  //mysqli_fecth_array($object);
      if(!$data){
                 echo "<script>alert('ID or Password incorrect.');window.history.back()</script>";
       }else{
          session_start();
	        $_SESSION["a_id"] = $data['a_id'];
	        session_write_close();
		      echo "<script>alert('Login successful.');window.location='index.php'</script>";


      }


  $conn->close();
  }

  public function getMemById($conn) {

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

  public function updateMemById($conn) {

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
