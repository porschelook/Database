<?php

$path = "gallery.php";
include "include/header.php";
$roomid=$_GET['m_id'];
//require "class/RoomMgnt.php";
require 'class/BillMgnt.php';
//$room = RoomMgnt::getRoombyRoomNumber($roomnum -> getMroom());
$roomnum = BillMgnt::getMemByBillID($roomid);
$billarr = BillMgnt::getAllBill($roomid);

//$r_type= (string)$roomid;
?>


<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

		<div id="tooplate_sp_middle">
			<div id="mid_title">
				<?php echo $roomnum -> getMfname(); ?> <?php echo $roomnum -> getMlname();?>
				  
                      	
                       </div>
			</div>
			<p></p>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

     <div id="tooplate_main">
<?php	foreach ($billarr as $bill) {?>
    	<div id="gallery"> 
                <ul>
        <li>
        	<div class="tab1">
				<div class="single_page">
							<li><a rel="nofollow" href="bill.php?bnum=<?php echo $bill -> getbillnum(); ?>">Bill NO :: <?php echo $bill -> getbillnum(); ?></a></li> 
							<p>สถานะ  :: <?php  if($bill -> getroomstatus()== "0"){
					echo "ชำระเงินเเล้ว";
							} else if($bill -> getroomstatus()=="1"){
						echo "ยังไม่ได้ทำการชำระเงิน";
					}
					
				
				
				
					?>  </p>
                         </div>
						</div>
					</li>
                   
              </ul>
              <div class="cleaner"></div>
          </div>

    	<div class="cleaner"></div>
    </div> <?php }?><!-- end of main -->



	</div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->

<?php
include "include/footer.php";
?>

</body>
</html>