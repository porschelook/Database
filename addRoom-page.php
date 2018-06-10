<?php
$path = "addRoom-page.php";
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
				Add Room
			</div>
			<p>Please complete the information.</p>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

		<div id="tooplate_main">

			<div class="col_w450 float_l">
					<div id="contact_form">

						<h4>Room Information</h4>

						<form method="post" name="contact" action="addRoom.php">

							<label for="author">Room ID :</label> <input type="text" id="author" name="roomid" class="required input_field" />
							<div class="cleaner h10"></div>

              <label for="text">Description :</label> <textarea id="text" name="roomdes" rows="0" cols="0" class="required"></textarea>
							<div class="cleaner h10"></div>

							<label for="email">Room Type :</label> <input type="text" class="validate-email required input_field" name="roomtype" id="email" />
							<div class="cleaner h10"></div>

							<label for="subject">Room Price :</label> <input type="text" class="validate-subject required input_field" name="roomprice" id="subject"/>
							<div class="cleaner h10"></div>


							<div class="col_w450 float_l">
									<div id="contact_form">

											<input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
											<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
										</form>

									</div>
								</div>




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
