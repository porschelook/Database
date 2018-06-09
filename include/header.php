<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Orange Sea - Free Website Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2037 Orange Sea
http://www.tooplate.com/view/2037-orange-sea
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

</head>
<body id="fp_body">


  <?php
      if(isset($_SESSION["a_id"])){
        echo '<span style="color:#ffffff;text-align:center;">Welcome Admin!';
        echo  "\t" . '<span text-align:center;"><a href="Logout.php">Logout</a>';
      }else{
        echo '<li><a href="Login-page.php"><i class="fa fa-user"></i> Login</a></li>';
      }
  ?>


<div id="tooplate_fp_100_wrapper">
<div id="tooplate_fp_wrapper">

	<div id="tooplate_top"></div>


	<div id="tooplate_header">
        <div id="site_title"><h1><a href="#">Orange Sea</a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <?php
                  $file = basename($path, ".php"); // $file is set to "index"
                ?>
                <li <?=($file == "index")? " class=\"active\"" : "" ; ?>><a href="index.php">Home</a></li>
                <li <?=($file == "about")? " class=\"active\"" : "" ; ?>><a href="about.php">About Us</a></li>
                <li <?=($file == "blog")? " class=\"active\"" : "" ; ?>><a href="blog.php">Blog</a></li>
                <li <?=($file == "gallery")? " class=\"active\"" : "" ; ?>><a href="gallery.php">Gallery</a></li>
                <?php
                    if(isset($_SESSION["a_id"])){
                ?>
                      <li <?=($file == "contact")? " class=\"active\"" : "" ; ?>><a href="addAccount-page.php">Add</a></li>
                <?php
                    }
                ?>

            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
