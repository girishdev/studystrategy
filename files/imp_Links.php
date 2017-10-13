
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1.Index and there contents</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse inds clearfix">
			<div class="panel-body" id="topic">
				<div class="col-md-3">
				<?php
					$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='some important'");
					$num_rows = $select->num_rows;
					$x = 1;
					while($rows = $select->fetch_object()){
						echo $x.').<span>'.$rows->sub_topic .'</span><br />';
						$x++;
					}
				?>
				</div>
				<div class="col-md-9 index_result">
					<div id="data_present">Content</div>
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Quiz links</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<?php
					echo '<h5><a target="_blank" href="http://www.pskills.org/phpinterview.jsp">pskills - Php Interview</a><h5>';
					echo '<h5><a target="_blank" href="http://www.pskills.org/php.jsp">pskills - PHP Online Test</a></h5>';
					echo '<h5><a target="_blank" href="http://www.javatpoint.com/php-programs">javatpoint - pattern</a></h5>';
				?>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Important websites</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse">
			<div class="panel-body">
				<?php
					echo '
						<iframe src="index.php" name="my_iframe" width="100%" height="400px"></iframe>
						<h5><a target="my_iframe" href="http://www.javatpoint.com/php-programs">Javatpoint</a></h5>
						<h5><a target="my_iframe" href="http://phppot.com">Phppot</a></h5>
						<h5><a target="my_iframe" href="http://www.phpforkids.com/php/php-tutorial-table-of-contents.php">Phpforkids</a></h5>

						<!--<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/=k6ZiPqsBvEQ&list=PL442FA2C127377F07&index=2" width="900" height="600"></iframe>
						</div>-->
					';
				?>
			</div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. PHP Doubt section</a>
			</h4>
		</div>
		<div id="collapseFour" class="panel-collapse collapse">
			<div class="panel-body">
				<?php
					echo '<pre>
					<h3>submit form without submit button:-</h3>
	<!--<script>-->
		// function submitform() {
			document.getElementById("myForm").submit();
			alert("your form submitted");
		// }
	<!--</script>-->
	<form method="post" action="../PHP.php" id="myForm">
		<input type="text" name="n" placeholder="enter your name"/><br/>
		<input type="text" name="e" placeholder="enter your email"/><br/>
		<input type="text" name="m" placeholder="enter your mobile"/><br/>
		<textarea name="reply" placeholder="enter your address"></textarea>
		<button>submit</button>
	</form>
	<!--<div onclick="submitform()" style="color:blue;">Submit the form by clicking this</div>-->
				<pre>';
				?>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">6. <?php echo $topic; ?> Index</a>
			</h4>
		</div>
		<div id="collapseSix" class="panel-collapse collapse">
			<div class="panel-body">
				<?php
					$topic = 'Some Important';
					echo $topic . ' Index';
					$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$topic."'");
						while($rows_sub = $select->fetch_array()){
							$sub_topic = strtoupper($rows_sub['sub_topic']);
							echo '<h4 style="color:green;">' . $sub_topic . '</h4>';
							$select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
							while($rows_sub_sub = $select_sub->fetch_array()){
								$sub_sub_topic = strtoupper($rows_sub_sub['sub_sub_topic']);
								echo '<h5 style="color:pink;">' . $sub_sub_topic . '</h5>';
							}
						}
				?>				
			</div>
		</div>
	</div>

</div>

<?php

echo "<pre>

########################################### Personal Importance ###########################################

Vastu tips:-

	***https://www.youtube.com/watch?v=WWa9pfM5Pvc&t=379s
	http://www.vaastudoshremedies.com/category/vaastu-tips/page/7/
	http://www.vaastudoshremedies.com/vaastu-shastra-and-mirrors/
	http://www.ifairer.com/articles/8-vastu-remedy-for-getting-good-job-1-71977.html
	http://www.astrospeak.com/slides/14-vastu-tips-to-enhance-your-career
	http://www.astrospeak.com/service/vaastu-analysis-through-map-reading-commercial-by-nandita-pandey
	http://www.vastushastraguru.com/vastu-tips-successful-career/
	http://www.vastushastraguru.com/study-room-vastu-shastra-tips/
	***https://www.youtube.com/watch?v=bKQRIjvF3v0

How to prevent black magic in karnataka:-

	***https://www.youtube.com/watch?v=eCNe35OqphE
	***https://www.youtube.com/watch?v=RcJcf-Lv9l0&list=PLkGbymI6PO8H_q1YWo-Wm9aiwS4lLbbVb
	***https://www.youtube.com/watch?v=MGLT30u0gFc&index=2&list=PLkGbymI6PO8H_q1YWo-Wm9aiwS4lLbbVb
	
Mobile tracker:-
	https://www.google.co.in/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=find%20my%20phone
	https://security.google.com/settings/intro/security/find-your-phone
	https://www.verizonwireless.com/support/how-to-find-phone/
	https://support.google.com/accounts/answer/3265955?hl=en
	https://findmymobile.samsung.com/

Mantra to remove Ghost,black magic and Evil power : Panchmukhi Hanuman
	*https://www.youtube.com/watch?v=Enqm0Dk2fSc

	*https://www.youtube.com/watch?v=osUnEXuYZ0E
	*https://www.youtube.com/watch?v=RtBeIEIfXWc

Important lines Rules of Success Inspirational Speech:-
	https://www.youtube.com/watch?v=7kRQlYSqw_g
	https://www.youtube.com/watch?v=4O5nIp21Kk8

The 10 Best Exercises to Lose Weight:-
	https://www.youtube.com/watch?v=X0k6aQzAm5s
	https://www.youtube.com/watch?v=wL0CJXDriOI

########################################### Personal Importance ###########################################

########################################### Brain Boosting Foods ###########################################

11 Brain Boosting Foods:-
	https://www.youtube.com/watch?v=DDZNsgyA2qU
		1).Walnuts
		2).wild salmon
		3).avocados => B,C
		4).Beets =>
		5).wild blueberries => Glaxoxid, 
		6).Lion's mane(Mushroom)
		7).Egg yokes => B-complex
		8).Flax seeds => Alphoneenic acid
		9).Chia seeds => Iron, coper, Megnism, mangines and Zink
		10).dark chocolateb
		11).Rosemary
	https://www.youtube.com/watch?v=Pp8C_psCI44
	Increase boold:-
		https://www.youtube.com/watch?v=tMz5YziHLG4
		https://www.youtube.com/watch?v=F8hFyYwiT_E

########################################### Brain Boosting Foods ###########################################
</pre>
";

?>