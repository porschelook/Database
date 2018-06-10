<?php
$path = "roomlist-page.php";
include "include/header.php";
include 'class/Conn.php';
include 'class/RoomDetail.php';
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
				Add Account
			</div>
			<p>Please complete the information.</p>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

		<div id="tooplate_main">


			<table cellspacing="30" class="shop_table cart">
					<thead>
							<tr>
									<th class="product-id">Room ID</th>
									<th class="product-price">Type</th>
									<th class="product-quantity">Price</th>
									<th class=""></th>
									<th class=""></th>
									<th class="product-quantity">Update</th>
									<th class="">View</th>
							</tr>
					</thead>
					<tbody>
							<?php
							$room = new RoomDetail('','','','','','');
							$roomarr = $room->getListRoom($conn);
							foreach ($roomarr as $ro){?>
							<form action="roomlistUpdate.php" method="post">
							<tr class="cart_item">
									<td class="product-id">
												<input type="hidden" name="roomid" value="<?php echo $ro->getRoomID(); ?>">
												 <?php echo $ro->getRoomID(); ?>
									</td>

									<td class="product-price">
											<input type="hidden" value="<?php echo $ro->getRoomType(); ?>" placeholder="" id="product-price" name="roomtype" size="1" class="input-text ">
											<?php echo $ro->getRoomType(); ?>
									</td>

									<td class="product-quantity">
											<div class="quantity buttons_added">
													<input type="number" size="4" class="input-text qty text" name="roomprice" title="Qty" value="<?php echo $ro->getRoomPrice(); ?>" min="0" step="1">
													<label>TH Baht</label>
											</div>
									</td>

									<?php
										$status = $ro->getRoomStatus();
										if($status == 0){ ?>

											<td class="product-quantity">
											<input type="radio" name="roomstatus" value="0" id="av" checked> Available<br>
											</td>

											<td class="product-quantity">
											<input type="radio" name="roomstatus" value="1" id="uv"> Unavailable<br>
											</td>

										<?php
										}?>

										<?php
											$status = $ro->getRoomStatus();
											if($status == 1){ ?>

												<td class="product-quantity">
												<input type="radio" name="roomstatus" value="0" id="av"> Available<br>
												</td>

												<td class="product-quantity">
												<input type="radio" name="roomstatus" value="1" id="uv" checked> Unavailable<br>
												</td>

											<?php
											}?>


									<td>
											<input type="submit" value="Update" name="proceed" class="checkout-button button alt wc-forward">
									</td>

									<td>
											<input type="button" value = "View" class="btn btn-danger" onclick="window.location.href='viewRoom-page.php?roomid=<?=$ro->getRoomID()?>'">
									</td>

							</tr>
							</form>

						<?php } ?>
					</tbody>
					</table>
					<td>
							<input type="button" value = "AddRoom" name="proceed" onclick="window.location.href='addRoom-page.php'">
					</td>

		</div> <!-- end of main -->

	</div> <!-- end of fp wrapper -->
</div> <!-- end of fp 100% wrapper -->

<?php
include "include/footer.php";
?>

</body>
</html>
