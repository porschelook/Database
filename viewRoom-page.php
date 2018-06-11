<?php
$path = "viewRoom-page.php";
include "class/Conn.php";
include "include/header.php";
include "class/Member.php";
include "class/Mate.php";
include "class/RoomDetail.php";
include "class/Bill.php";
include "class/BillPersonal.php";

  $roomid = "";
  $roomdes = "";
  $roomtype = "";
  $roomprice = "";
  $roomstatus = "";
  $roomimg = "";

  $exp = "";
  $fname = "";
  $lname = "";
  $cid = "";
  $phone = "";
  $email = "";
  $mate = "";

  $rmfname = "";
  $rmlname = "";
  $rmcid = "";
  $rmphone = "";
  $rmemail = "";

  $billid = "";
  $billstatus = "";

  $elec = "";
  $water = "";
  $personal = "";

  $room = new RoomDetail($roomid,$roomdes,$roomtype,$roomprice,$roomstatus,$roomimg);
  $room->getRoomById($conn,$_REQUEST['roomid']);

  $mem = new Member($roomid,$exp,$fname,$lname,$cid,$phone,$email,$mate);
  $mem->getMemberById($conn,$_REQUEST['roomid']);

  $mate = new Mate($roomid,$rmfname,$rmlname,$rmcid,$rmphone,$rmemail);
  $mate->getMateById($conn,$_REQUEST['roomid']);

  $bill = new Bill($billid,$roomid,$billstatus);
  $bill->getBillByID($conn,$_REQUEST['roomid']);

  $billnum = $bill->getbillnum();
  $billperson = new BillPersonal($billnum,$elec,$water,$personal);
  $billperson->getBillInfo($conn,$billnum);
  $total = $billperson->getelec() + $billperson->getwater() + $billperson->getpersonal();

?>

		<div id="tooplate_sp_middle">
			<div id="mid_title">
				Room Number : <?php echo $room->getRoomID() ;?>
			</div>
			<div id="learn_more"><a href="#"></a></div>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

		<div id="tooplate_main">

			<div class="col_w600 float_l">
				<div class="post_box">
					<h2>Member in room <?php $bill->getRname()?></h2>
          <table frame="box">
            <tr>
              <th>
          <p><span class="cat"><b> | Member 1 |</p>
          <p><font color="White"> <?php echo 'First Name : ' . $mem->getFname() ;?></font></p>
          <p><font color="White"> <?php echo 'Last Name : ' . $mem->getLname() ;?></font></p>
          <p><font color="White"> <?php echo 'Citizen ID : ' . $mem->getCID() ;?></font></p>
          <p><font color="White"> <?php echo 'Phone : ' . $mem->getPhone() ;?></font></p>
          <p><font color="White"> <?php echo 'Email : ' . $mem->getEmail() ;?></font></p>
        </th>

        <th>
          <p><span class="cat"><b> | Member 2 |</p>
          <?php
            if($mate->getrID() == ''){ ?>
              <p><font color="White"> <?php echo 'First Name : -';?></font></p>
              <p><font color="White"> <?php echo 'Last Name : -';?></font></p>
              <p><font color="White"> <?php echo 'Citizen ID : -';?></font></p>
              <p><font color="White"> <?php echo 'Phone : -';?></font></p>
              <p><font color="White"> <?php echo 'Email : -';?></font></p>
          <?php
            }else{ ?>
              <p><font color="White"> <?php echo 'First Name : ' . $mate->getRmFname() ;?></font></p>
              <p><font color="White"> <?php echo 'Last Name : ' . $mate->getRmLname() ;?></font></p>
              <p><font color="White"> <?php echo 'Citizen ID : ' . $mate->getRmCID() ;?></font></p>
              <p><font color="White"> <?php echo 'Phone : ' . $mate->getRmPhone() ;?></font></p>
              <p><font color="White"> <?php echo 'Email : ' . $mate->getRmEmail() ;?></font></p>
          <?php
            }
           ?>

        </th>

        </tr>
        </table>
				</div>


				<div class="post_box">
					<h2>Billing Detail</h2>
          <table frame="box">
            <tr>
              <th>
          <form action="addBill.php" method="post">
          <p><input type="hidden" name="billnum" value="<?php echo $billperson->getbillnum(); ?>"></p>
          <p><input type="hidden" name="roomid" value="<?php echo $room->getRoomID(); ?>"></p>
          <p><font color="White"> <?php echo 'วันหมดอายุสัญญา : ' . $mem->getExp() . ' (ปี/เดือน/วัน)';?></font></p>
          <p><font color="White"> <?php echo 'ค่าไฟ : ' ;?></font> <label for="author"></label> <input type="text" id="author" name="electric" value="" /><?php echo ' บาท';?></p>
          <p><font color="White"> <?php echo 'ค่าน้ำ : ' ;?></font> </label> <input type="text" id="author" name="water" value="" /><?php echo ' บาท';?></p> <label for="author">
          <p><font color="White"> <?php echo 'ค่าเช่าส่วนกลาง : ' ;?></font> <label for="author"></label> <input type="text" id="author" name="rent" value="" class="required input_field" /><?php echo ' บาท';?></p>
          <p></p>
          <p><input type="submit" value="เพิ่ม Bill" name="proceed" class="checkout-button button alt wc-forward"><p>
          </form>
              </th>

        </tr>
        </table>
				</div>
        <div class="post_box">
          <h2>Room Description</h2>
          <img src="images/SingleBeddedRoom01.jpg" class="image_wrapper" alt="Image 02" />
          <p><?php echo $room->getRoomDes();?></p>
        </div>
			</div>


			<div class="cleaner"></div>
		</div> <!-- end of main -->

	</div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->

<?php
include "include/footer.php";
?>

</body>
</html>
