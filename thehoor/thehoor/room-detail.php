<?php

$path = "gallery.php";
include "include/header.php";
$roomid=$_GET['r_type'];

	

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
<?php  require "class/RoomMgnt.php";
                $roomdetail = RoomMgnt::getRoom($roomid); ?>

		<div id="tooplate_sp_middle">
			<div id="mid_title">
				ห้องขนาด<?php  if($roomid == "1"){
				echo "เล็ก";
				} else if($roomid == "2"){
					echo "กลาง";
				}
				else if($roomid == "3"){
					echo "ใหญ่";
				}
				
				
				
				?> 
			</div>
			<p></p>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

    <div id="tooplate_main">

    	<div id="gallery">
                <ul>
                
                
                    <li>
                        
                        <a class="pirobox" href="images/<?php echo $roomdetail -> getRImage();?>.jpg" title="Project I">
                            <img src="images/<?php echo $roomdetail -> getRImage();?>.jpg" alt="Image" class="image_wrapper" />
                        </a>
						<h4></h4></a>
						<div class="tab1">

							<div class="single_page">
								<h6>รายละเอียด</h6>
								<p><?php echo $roomdetail->getRDes();?></p>
								<br>*** ค่าส่วนกลาง 500 ***</br>
								<h6>ค่าส่วนกลางประกอบด้วยประกอบด้วย :: </h6>
								<h6>ค่าบริการรถตู้รับส่ง</h6>
								<h6>ค่าบริการเคเบิ้ลทีวี</h6>
								<h6>ค่าบริการซ่อมบำรุงลิฟท์</h6>
								<h6>ค่าบริการฟิตเนส</h6>
								<h6>ค่าบริการ รปภ. เเละบริการที่จอดรถ</h6>
								<br>ราคาห้อง ::</br>
								<p><?php echo $roomdetail->getRPrice();?> บาท</p>
								
								<br>ติดต่อหอพักโทร :: 091-111-1111 , 02-111-1111</br>
								<br>EMAIL :: thehoorisdabest@hotmail.com</br>
								
							</div>
						</div>
					</li>
                   
                   
              </ul>

              <div class="cleaner"></div>
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