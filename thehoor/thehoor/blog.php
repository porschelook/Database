<?php
$path = "blog.php";
include "include/header.php";
require "class/RoomMgnt.php";

$roomnum = RoomMgnt::getRoombyRoomID(111,1103000122777);
//echo $roomnum -> getMfname();
$room = RoomMgnt::getRoombyRoomNumber($roomnum -> getMroom());
//$r_type= (string)$roomid;
?>


		<div id="tooplate_sp_middle">
			<div id="mid_title">
				Our Blog Posts
			</div>
			<p>Etiam placerat erat et est porttitor ullamcorper. Donec in justo ipsum, et lobortis velit. Suspendisse eget lectus dolor, sit amet hendrerit est. Fusce faucibus sem a tortor volutpat ornare.</p>
			<div id="learn_more"><a href="#"></a></div>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

		<div id="tooplate_main">

			<div class="col_w600 float_l">
				<div class="post_box">
					<h2>New Web Design Trend</h2>
					<img src="images/tooplate_image_04.jpg" class="image_wrapper" alt="Image 01" />
					<p><span class="cat"><b>Date:</b> June 24, 2048 | Posted in <a href="#">3D</a>, <a href="#">Interactive</a></span> | <a href="#">134 comments</a></p>
					<p>Vestibulum adipiscing tempus elit eu condimentum. Fusce at mi felis. Etiam sed velit nibh. Nunc bibendum justo nec eros elementum auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Aliquam erat volutpat. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
					<a class="more" href="#">More</a>
				</div>
				<div class="post_box">
					<h2>10 Tips of Image Editing</h2>
					<img src="images/tooplate_image_05.jpg" class="image_wrapper" alt="Image 02" />
					<p><span class="cat"><b>Date:</b> June 20, 2048 | Posted in <a href="#">Illustrations</a>, <a href="#">Graphics</a></span> | <a href="#">148 comments</a></p>
					<p>Praesent in risus sit amet libero blandit lobortis. Vestibulum imperdiet quam tortor. Sed non nibh nulla. Ut egestas tellus et nisl pharetra bibendum at non leo. Nam varius, elit vel fermentum condimentum, nisl ligula tincidunt nisi, sit amet pellentesque felis metus eget nulla.</p>
					<a class="more" href="#">More</a>
				</div>
				<div class="post_box">
					<h2>Optimizing Websites</h2>
					<img src="images/tooplate_image_06.jpg" class="image_wrapper" alt="Image 03" />
					<p><span class="cat"><b>Date:</b> June 14, 2048 | Posted in <a href="#">Web Design</a>, <a href="#">Templates</a></span> | <a href="#">165 comments</a></p>
					<p>Morbi nulla leo, congue non rhoncus a, condimentum sit amet nisl. Donec venenatis, lorem eu sollicitudin pretium, tortor massa fermentum eros, sit amet congue velit mauris sed dui. Integer posuere dictum nisl, eget ullamcorper sem adipiscing eu. Morbi cursus pharetra gravida.</p>
					<a class="more" href="#">More</a>
				</div>
			</div>

			<div class="col_w300 float_r">
				<h2>Our Latest Works</h2>
				<div class="fp_lw_box">
					<h6><a href="#">Donec sit amet dolor nec sapien</a></h6>
					<a href="#"><img src="images/tooplate_image_02.jpg" class="image_wrapper" alt="News Image 01" /></a>
				</div>
				<div class="fp_lw_box">
					<h6><a href="#">Nullam consectetur volutpat</a></h6>
					<a href="#"><img src="images/tooplate_image_03.jpg" class="image_wrapper" alt="News Image 02" /></a>
				</div>
				<a class="more" href="#">More</a>
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
