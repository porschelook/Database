<?php

  include "class/Conn.php";
  include "class/Member.php";

  $rid = $_REQUEST['mRID'];
  $fname = $_REQUEST['mFname'];
  $lname =$_REQUEST['mLname'];
  $cid =$_REQUEST['mCID'];
  $phone =$_REQUEST['mPhone'];
  $email = $_REQUEST['mMail'];

  $rmfname = $_REQUEST['rmFname'];
  $rmlname =$_REQUEST['rmLname'];
  $rmcid =$_REQUEST['rmCID'];
  $rmphone =$_REQUEST['rmPhone'];
  $rmemail = $_REQUEST['rmMail'];

  if($rmfname == "" && $rmlname == "" && $rmcid == "" && $rmphone == "" && $rmemail == ""
    && $rid == "" && $fname == "" && $lname == "" && $cid == "" && $phone == "" && $email == "")
  {
    echo "<script>alert('Please insert information.');window.history.back()</script>";

  }else{
    if($rmfname == "" && $rmlname == "" && $rmcid == "" && $rmphone == "" && $rmemail == ""){
      $mate = 0;

      $mem = new Member($rid,$fname,$lname,$cid,$phone,$email,$mate);
      $mem->addAccount($conn);

    }else{
      $mate = 1;
      $mem = new Member($rid,$fname,$lname,$cid,$phone,$email,$mate);
      $mem->addAccount($conn);

      $rmmem = new Member($rid,$rmfname,$rmlname,$rmcid,$rmphone,$rmemail,$mate);
      $rmmem->AddMate($conn);

    }

  }

?>
