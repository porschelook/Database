<?php
$path = "gallery.php";
include "include/header.php";

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
				เลือกขนาดของห้อง
			</div>
			<p></p>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

    <div id="tooplate_main">

    	<div id="gallery">
                <ul>
                    <li>
                        <span><a href="room-detail.php?r_type=<?php echo 1;?>">ห้องขนาดเล็ก</a></span>
                        <a class="pirobox" href="images/gallery/image_01_b.jpg" title="Project I">
                            <img src="images/gallery/image_01.jpg" alt="Image" class="image_wrapper" />
                        </a>
						<h4>ห้องเล็กเหมาะสำหรับผู้อาศัย 1คน</h4></a>
					</li>
                    <li>
                        <span><a href="room-detail.php?r_type=2">ห้องขนาดกลาง</a></span>
                        <a class="pirobox" href="images/gallery/image_02_b.jpg" title="Project II">
                        	<img src="images/gallery/image_02.jpg" alt="Image" class="image_wrapper" />
                        </a>
                       <h4> ห้องกลางหมาะสำหรับผู้อาศัย 1-2คน</h4></a>
                    </li>
                    <li class="lmb">
                        <span><a href="room-detail.php?r_type=3">ห้องขนาดใหญ่</a></span>
                        <a class="pirobox" href="images/gallery/image_03_b.jpg" title="Project III">
                        	<img src="images/gallery/image_03.jpg" alt="Image" class="image_wrapper" />
                        </a>
                         <h4>ห้องใหญ่เหมาะสำหรับผู้อาศัย 2-3คน</h4></a>
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
