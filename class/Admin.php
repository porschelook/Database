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
  public function setPwd($pwd){
    $this->_pwd =  $pwd;
  }
  public function getPwd(){
    return $this->_pwd;
  }
  public function setName($name){
    $this->_name =  $name;
  }
  public function getName(){
    return $this->_name;
  }
  public function setLname($lname){
    $this->_lname =  $lname;
  }
  public function getLname(){
    return $this->_lname;
  }
  public function setEmail($email){
    $this->_email =  $email;
  }
  public function getEmail(){
    return $this->_email;
  }
  public function __construct($id,$pwd,$name,$lname,$email)
  {

      $this->_id = $id;
      $this->_name = $name;
      $this->_lname = $lname;
      $this->_pwd =  $pwd;
      $this->_email = $email;

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


}

?>
