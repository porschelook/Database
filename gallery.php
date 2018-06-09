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
				Our Gallery
			</div>
			<p>Sed mattis nulla id enim facilisis aliquet. Aliquam erat volutpat. Sed vehicula, nulla vel interdum mattis, ante augue condimentum est, at mollis felis nunc sed lectus. Maecenas vel nisl ante. </p>
			<div class="cleaner"></div>
		</div> <!-- end of middle -->

    <div id="tooplate_main">

    	<div id="gallery">
                <ul>
                    <li>
                        <span><a href="#">Project I</a></span>
                        <a class="pirobox" href="images/gallery/image_01_b.jpg" title="Project I">
                            <img src="images/gallery/image_01.jpg" alt="Image" class="image_wrapper" />
                        </a>
						Aenean at accumsan ante. Etiam rutrum pharetra. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.
					</li>
                    <li>
                        <span><a href="#">Project II</a></span>
                        <a class="pirobox" href="images/gallery/image_02_b.jpg" title="Project II">
                        	<img src="images/gallery/image_02.jpg" alt="Image" class="image_wrapper" />
                        </a>
                        Sed in urna neque nec arcu arcu, sed pretium lacus. Aliquam in ipsum mollis facilisis.
                    </li>
                    <li class="lmb">
                        <span><a href="#">Project III</a></span>
                        <a class="pirobox" href="images/gallery/image_03_b.jpg" title="Project III">
                        	<img src="images/gallery/image_03.jpg" alt="Image" class="image_wrapper" />
                        </a>
                        Integer est sem, dignissim quis auctor vel, dapibus massa. Curabitur ligula tempus.
                    </li>
                    <li>
                        <span><a href="#">Project IV</a></span>
                        <a class="pirobox" href="images/gallery/image_04_b.jpg" title="Project IV">
                        <img src="images/gallery/image_04.jpg" alt="Image" class="image_wrapper" />
                        </a>
                        Vivamus volutpat, elit non tempor vehicula, odio arcu dignissim mauris, a orci non justo.
                    </li>
                    <li>
                        <span><a href="#">Project V</a></span>
						<a class="pirobox" href="images/gallery/image_05_b.jpg" title="Project V">
                        <img src="images/gallery/image_05.jpg" alt="Image" class="image_wrapper" />
						</a>
						Curabitur volutpat, quam sed cursus elementum, mauris facilisis turpis.
                    </li>
					<li class="lmb">
						<span><a href="#">Project VI</a></span>
                        <a class="pirobox" href="images/gallery/image_06_b.jpg" title="Project VI">
                        <img src="images/gallery/image_06.jpg" alt="Image" class="image_wrapper" />
						</a>
						Nunc at lectus justo, in auctor metus. Etiam vel orci vitae elit laoreet dignissim mauris.
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
