<?php $topic = 'Symfony'; ?>
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
					$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='$topic'");
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
					echo '<h5><a target="_blank" href="http://www.javatpoint.com/php-interview-questions">javatpoint-interview-questions</a></h5>';
					echo '<h5><a target="_blank" href="https://www.tutorialspoint.com/questions_and_answers.htm">Tutorialspoint</a></h5>';
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
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. <?php echo $topic; ?> Doubt section</a>
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
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">5. <?php echo $topic; ?> Notes</a>
			</h4>
		</div>
		<div id="collapseFive" class="panel-collapse collapse">
			<div class="panel-body">
				<?php

					echo 'Notest
					Root Eg:- PHP,OOP, Abstract class...

					1).Notes in Description
					2).Date & Time
					3).Important links if any
					';

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
	
<div class="book_mark">

	<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1485192024">Symfony</H3>
	<DL><p>
		<DT><A HREF="https://www.youtube.com/watch?v=S_jsfF-NluY" ADD_DATE="1482775307">Beginners Guide to Symfony 2.7 - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=gck9Qk-BUPg" ADD_DATE="1482775868">What is Symfony, Symfony, Twig and Doctrine Beginners Tutorial - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=z14t0N4ZPy0&list=PLUpnKy5Si8zCfBpdy3ZLUsUvk3cNAIrCs&index=1" ADD_DATE="1482376054" LAST_MODIFIED="1485091677">Symfony2 Tutorial 1 - Installation &amp; Configuration - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=_dnadmpdA0M" ADD_DATE="1482376054" ICON_URI="http://icon.xmarks.com/ix1rvsed-14" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACd0lEQVQ4ja2TzU4TURTHTwJLo+GrxencufNx53ZqCz6CboyRFzC+A7yCiSzZSKIbJSRKYogNOxa60FBZFBkcoFAcoGkDodUYkgIbgzOdc1zMNBCiO27yyznnf39neQAAoAjQQwC9SwC9FPf/JXF6iwA9cG3vICfHjkeyk828Pd3Ky5lmQc61CnK+WZDFZkEWk36ulZczzbw9fTySnTzIyTEAADh0rInTEYfORhw6vczdO3QymqOTq/kl99CxJqDhCL+Vs6O6I87rOTuMkWHdZGHDEWGj4IQXeYIjzls5O2o4woeatNp1KXDftrAmBdayAmvCwMOxh+G+Y0d7t1NUy0mqOTbuS0G1bOzWpcCatNrgCyvwbYt8YeKebUW7WYk7QwN49vFD+HtnJ6w/eRxU06nI5wx3pUBfxG68YwVQtUzaTqhaJm5Lm7YGB6L2wkKHiCgiorbrBv79e0FVY1i1LKxaJiY+waZh0KZhUMUwcMswok0haL2vLzpZXOwQEf05Our8mJoKKqOjnYrGsWKYWDEM7O6Bx/XA4zp5Gsd1ruO6YaLbP4i/ZmeDny9eBp4pOu6Nm+hlGK5zA7uux3XyuB7Aqsrb3xjHVVVDl3F0VY4u03GNG9HKrX5cVVRa0y10mY6rjJObuPEOb0NZ0Xwvw6Oyop2XM1pYzmhhWdHCssLCFWaG5QyP524e13Mvw6MVRfsOy8Pq+IbCaVPhFFedNhSdNjI6bSRZjJ78XbjLw+o4AAB8SikPysPq06W0Ol1Kqa+WUuxNKa2+K6XZ+1KaFZfSbL6UYm9LafX1lyH2/Ouw9uzzkPro+o6pmJxplyJAz7+46gAA/AUDsaBnYiC/RgAAAABJRU5ErkJggg==">MVC Frameworks for PHP Applications - Symfony - 01 Intro to Symfony 2 0 - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=z14t0N4ZPy0&list=PLfvNoauo1FOQFRLiYOH50osRcy1xRp8lx" ADD_DATE="1482376054" LAST_MODIFIED="1485091677">Symfony2 Tutorial 1 - Installation &amp; Configuration - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=z14t0N4ZPy0&list=PLfvNoauo1FOQFRLiYOH50osRcy1xRp8lx" ADD_DATE="1475883183" LAST_MODIFIED="1482499571">Symfony2 Tutorial 1 - Installation &amp; Configuration - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=_dnadmpdA0M" ADD_DATE="1479117482" ICON_URI="http://icon.xmarks.com/ix1rvsed-14" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACd0lEQVQ4ja2TzU4TURTHTwJLo+GrxencufNx53ZqCz6CboyRFzC+A7yCiSzZSKIbJSRKYogNOxa60FBZFBkcoFAcoGkDodUYkgIbgzOdc1zMNBCiO27yyznnf39neQAAoAjQQwC9SwC9FPf/JXF6iwA9cG3vICfHjkeyk828Pd3Ky5lmQc61CnK+WZDFZkEWk36ulZczzbw9fTySnTzIyTEAADh0rInTEYfORhw6vczdO3QymqOTq/kl99CxJqDhCL+Vs6O6I87rOTuMkWHdZGHDEWGj4IQXeYIjzls5O2o4woeatNp1KXDftrAmBdayAmvCwMOxh+G+Y0d7t1NUy0mqOTbuS0G1bOzWpcCatNrgCyvwbYt8YeKebUW7WYk7QwN49vFD+HtnJ6w/eRxU06nI5wx3pUBfxG68YwVQtUzaTqhaJm5Lm7YGB6L2wkKHiCgiorbrBv79e0FVY1i1LKxaJiY+waZh0KZhUMUwcMswok0haL2vLzpZXOwQEf05Our8mJoKKqOjnYrGsWKYWDEM7O6Bx/XA4zp5Gsd1ruO6YaLbP4i/ZmeDny9eBp4pOu6Nm+hlGK5zA7uux3XyuB7Aqsrb3xjHVVVDl3F0VY4u03GNG9HKrX5cVVRa0y10mY6rjJObuPEOb0NZ0Xwvw6Oyop2XM1pYzmhhWdHCssLCFWaG5QyP524e13Mvw6MVRfsOy8Pq+IbCaVPhFFedNhSdNjI6bSRZjJ78XbjLw+o4AAB8SikPysPq06W0Ol1Kqa+WUuxNKa2+K6XZ+1KaFZfSbL6UYm9LafX1lyH2/Ouw9uzzkPro+o6pmJxplyJAz7+46gAA/AUDsaBnYiC/RgAAAABJRU5ErkJggg==">MVC Frameworks for PHP Applications - Symfony - 01 Intro to Symfony 2 0 - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=z14t0N4ZPy0&list=PLUpnKy5Si8zCfBpdy3ZLUsUvk3cNAIrCs&index=1" ADD_DATE="1479117482" LAST_MODIFIED="1483148143">Symfony2 Tutorial 1 - Installation &amp; Configuration - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=z14t0N4ZPy0&list=PLUpnKy5Si8zCfBpdy3ZLUsUvk3cNAIrCs&index=1" ADD_DATE="1475883183" LAST_MODIFIED="1483148143">Symfony2 Tutorial 1 - Installation &amp; Configuration - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=z14t0N4ZPy0&list=PLfvNoauo1FOQFRLiYOH50osRcy1xRp8lx" ADD_DATE="1479117482" LAST_MODIFIED="1483148143">Symfony2 Tutorial 1 - Installation &amp; Configuration - YouTube</A>
	</DL><p>

</div>