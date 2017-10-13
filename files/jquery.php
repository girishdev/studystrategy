<?php $topic = 'Jquery'; ?>
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

	<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1484293674">Js</H3>
	<DL><p>
		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482432212">Important videos</H3>
		<DL><p>
			<DT><A HREF="https://www.youtube.com/watch?v=0TL5SRttIs0&index=26&list=PLA0580F01689ED379" ADD_DATE="1475883183">Beginner JavaScript Tutorial - 26 - Object Initializers - YouTube</A>
			<DT><A HREF="https://www.youtube.com/watch?v=lTsTTAaR8bs&list=PL41lfR-6DnOrwYi5d824q9-Y6z3JdSgQa&index=2" ADD_DATE="1475883183">▶ Javascript beginner tutorial 2 - statements and comments - YouTube</A>
		</DL><p>
		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482432212">Date picker</H3>
		<DL><p>
			<DT><A HREF="http://www.tutorialspoint.com/jqueryui/jqueryui_datepicker.htm" ADD_DATE="1475883183" ICON_URI="http://icon.xmarks.com/ix0osyrz-pr" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADVklEQVQ4jV3STWhcZRTG8ee9H3NnxiSdNBQbqLRNXVRwZQm60kZITUqSltqmElsXDSIRFyKILhT8QHBjQWg7SWZS08xlkiaTdO5gCmaRhiq1gTBZNNgGUlNFrc6UkMzkzuTe+77nuKhV6W9zVn+ezRHM7ALQ8R8RBAGbpmml7bS3UdpA39t9VhAEnmmaeIwyABgAQgD4nximacLJOpie/tYSArAsC2d6z1hSSuiGDgHBAAQAH8xcZWZiZuX7PjEzT01NUXtbOxWKRapueXS06wglEgliZmbih/dhUwURbTEzP4qz2Sy3t7Xx2toar6ze44X8Ipc3N/nVY8d41E6zW63wRrlERMREtKUJISADCdM0Rc5xkBgYRGZ8EssrK1i6dQu6oWP13i9IDdvIF2/jy8lzkLoCEQEANCklDNOAk3V4KDmEr+Pn8HPxN1xJT+BoVyeiRhgNtTGczfSjfs+T2K3twNzVWei6DqUUBDOz4zhIDA7y8DfD4uPPP0He/BVH9rdg//a9KBplpH+4glDIwnO0B++/+x7e7HuLOzo6RG9vL7Tp6auek81iIJlE2a3gQaGA+kgtFovLmN9YQm5hBh92vYMnrCju3F1Gya0gOXQR8z/ehG2nPb2utu6j5uZm48WXDqLwV1GEIhEYEYWv3vgU28I14MDD4QOtuPvHHTz/7At4qnEXdjbuBBOJzMSE0s5fOI/5+ZtI9Mex7+kmXJ+dBfkCH4x/ge119QiFLHyWOwuSwI1r36NpXxOmMhnYqRRSdgqCmX1Syjx1+jS3HGwRsVgM12ZmsaoVQTsMCN2AeOBht9eAl1tbAAGMXBrhicyEiESjSiMiEpqGdDqNubk5+L6PC8k4eg50Ym+4EbvMBhx/5hDiQ/2oqa2BnbIxPplBOBKBUkqCmT1mZiIiKSW/dvIkx+NxVsycHhvjiyOXWDHz5bHL/ErrIXZdl//Hg5SyWiqXya1UlJSSlFLUfaKbBgcGqLTp0qZbobHRUTrc1k6u6xIRkVtxValcpiAIqljIL3q/37//6Lf/9XpPD9u2zblcjrs6Ox9f5j8LBV7IL3pi6afbrpJKj0TDiNVtQyhkwjBMRKNRrfvEcVpfX8d3MzPwfB++58MPApRKJbiVCjRNU38DJ5wmZg6BuncAAAAASUVORK5CYII=">JqueryUI Datepicker</A>
			<DT><A HREF="http://api.jqueryui.com/1.8/datepicker/" ADD_DATE="1475883183">Datepicker Widget | jQuery UI 1.8 Documentation</A>
			<DT><A HREF="https://www.sitepoint.com/finding-date-picker-input-solution-bootstrap/" ADD_DATE="1475883183">Finding a Date Picker Input Solution for Bootstrap</A>
			<DT><A HREF="http://blog.teamtreehouse.com/best-jquery-date-picker-plugins-for-input-fields" ADD_DATE="1475883183">Best jQuery Date Picker Plugins for Input Fields - Treehouse Blog</A>
			<DT><A HREF="http://www.daterangepicker.com/" ADD_DATE="1475883183">Date Range Picker for Bootstrap</A>
			<DT><A HREF="http://stefangabos.ro/jquery/zebra-datepicker/" ADD_DATE="1475883183">Zebra_Datepicker, a lightweight datepicker jQuery plugin</A>
		</DL><p>
		<DT><A HREF="http://www.jacklmoore.com/colorbox/faq/" ADD_DATE="1475883182">Colorbox FAQ</A>
		<DT><A HREF="https://www.youtube.com/watch?v=GNb8T5NBdQg&list=PL6B08BAA57B5C7810" ADD_DATE="1483929854" ICON_URI="https://s.ytimg.com/yts/img/favicon_144-vflWmzoXw.png" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACd0lEQVQ4ja2TzU4TURTHTwJLo+GrxencufNx53ZqCz6CboyRFzC+A7yCiSzZSKIbJSRKYogNOxa60FBZFBkcoFAcoGkDodUYkgIbgzOdc1zMNBCiO27yyznnf39neQAAoAjQQwC9SwC9FPf/JXF6iwA9cG3vICfHjkeyk828Pd3Ky5lmQc61CnK+WZDFZkEWk36ulZczzbw9fTySnTzIyTEAADh0rInTEYfORhw6vczdO3QymqOTq/kl99CxJqDhCL+Vs6O6I87rOTuMkWHdZGHDEWGj4IQXeYIjzls5O2o4woeatNp1KXDftrAmBdayAmvCwMOxh+G+Y0d7t1NUy0mqOTbuS0G1bOzWpcCatNrgCyvwbYt8YeKebUW7WYk7QwN49vFD+HtnJ6w/eRxU06nI5wx3pUBfxG68YwVQtUzaTqhaJm5Lm7YGB6L2wkKHiCgiorbrBv79e0FVY1i1LKxaJiY+waZh0KZhUMUwcMswok0haL2vLzpZXOwQEf05Our8mJoKKqOjnYrGsWKYWDEM7O6Bx/XA4zp5Gsd1ruO6YaLbP4i/ZmeDny9eBp4pOu6Nm+hlGK5zA7uux3XyuB7Aqsrb3xjHVVVDl3F0VY4u03GNG9HKrX5cVVRa0y10mY6rjJObuPEOb0NZ0Xwvw6Oyop2XM1pYzmhhWdHCssLCFWaG5QyP524e13Mvw6MVRfsOy8Pq+IbCaVPhFFedNhSdNjI6bSRZjJ78XbjLw+o4AAB8SikPysPq06W0Ol1Kqa+WUuxNKa2+K6XZ+1KaFZfSbL6UYm9LafX1lyH2/Ouw9uzzkPro+o6pmJxplyJAz7+46gAA/AUDsaBnYiC/RgAAAABJRU5ErkJggg==">jQuery Tutorial - 1 - Introduction to jQuery - YouTube</A>
		<DT><A HREF="https://www.tutorialspoint.com/jquery/jquery_questions_answers.htm" ADD_DATE="1484057693">jQuery Questions and Answers - TutorialsPoint</A>
		<DT><A HREF="https://www.youtube.com/watch?v=yQaAGmHNn9s&list=PL46F0A159EC02DF82" ADD_DATE="1483929858" LAST_MODIFIED="1484126326">Beginner JavaScript Tutorial - 1 - Introduction to JavaScript - YouTube</A>
		<DT><A HREF="http://www.tutorialspoint.com/javascript/javascript_interview_questions.htm" ADD_DATE="1484049459">Javascript Interview Questions - tutorialspoint</A>
		<DT><A HREF="https://www.youtube.com/watch?v=cP_uNW0IXvM" ADD_DATE="1484022362" LAST_MODIFIED="1484126326">Difference between document.ready and window.load - YouTube</A>
		<DT><A HREF="http://jquery.com/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">jQuery</A>
		<DT><A HREF="https://api.jquery.com/closest/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">.closest() | jQuery API Documentation</A>
		<DT><A HREF="http://visuallightbox.com/lightbox-for-photo-noir-demo.html" ADD_DATE="1475883182" LAST_MODIFIED="1484126326" ICON_URI="http://icon.xmarks.com/ix1rvsed-1r" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAC+ElEQVQ4jZWTy24cRRRAT1VXd8/DM37OxDZOIkcGgnBsYQVFSMAGkiCUDWSJxDfwB/mTfAULEAsSKTFIkVCweSixZYfYsbHHM+N5dU91dd9ikVWWnN1ZHx0FsL+/f3VyevpT5VUTUBgwaN5EA4IIaI0URXHabrcfqr29vcsLCwv3hPzz1LlQKQCPR/AI+NfmvSCFR7xQeKiXYxfr2o+q1Wp9U6rG93/64zh6fmAJo4A4DohLMZVSiHjBFY4sy7A2pz+0jMeOtWXDF2srmdFaXxnnLvr+8V4xSMssNurM1mvUykNUOaNQEZoamS2Ru5RuVzg6G9Nqd/js2nJkRPIwtYgrSnqiXFX1ckAU7JLZ3xj4BGMqNKfeo1H/gNQ2CIMJvAwZppl3TgoD2huTq+bMv6rQASfdFmm2yUy9S3N6AZynk+5SKR8hrDCyCbnWhGFHKda1QSA0Vi1f3KJUytna3qE5U+bjta95560NCmf4decHnp0+YHp6m6jcYcrXGacBqFuYXHJFkRNGfVonQwa9ETc37nD18jXisMSF5rvUKnWOH74gsSdk0mXQG6BVDS/qdWzxBYlNOD5pUY1rLDWWKbwwdn3GbsDc5CKz1SWScc5opGj3h0ghKDxaRLxzhX/56ozj0w7kCi+egAqjrEsnOcBJilYaO7YkvQLwSAHeg/beq0KEQc+ijKI/6vPyZJfIlKhGs9iiw/OjJ7w63yVJHO2Ww7sAyQEQAzgRlDLadw6GirGVX7Y2fRTFzM8t0R0d8nTnCX8d/k6aOAbnlig2xNTw3mtjrT1sLMyPJrIL1d7OkYTa6L+f7uG9Z7JWx/oEm1uW51ah0OQNQSnN24vvE5uyM8PhcNO9yP90B5UPG6VLejAYMBdczOarK77VP6ZcmWT9ygaLjUsESlOIR6OZrTes8uaRWV9ff/bV3buPJc+vB6Eenfe6jz7a+Hb7zu0vaXfPiEoxzan5N74Un5OObeufo/0HAFy/ceO7m7dvyerq6s/AJ/wP/gOlXZoIh44UigAAAABJRU5ErkJggg==">Lightbox HTML - Noir Demo</A>
		<DT><A HREF="http://stackoverflow.com/questions/25049731/adding-placeholder-attribute-using-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">Adding placeholder attribute using Jquery - Stack Overflow</A>
		<DT><A HREF="http://www.jquery4u.com/syntax/jquery-basic-regex-selector-examples/#.UIkkHo3iaew" ADD_DATE="1475883182" LAST_MODIFIED="1484126326" ICON_URI="http://icon.xmarks.com/ix1rvsed-30" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABtklEQVQ4jZWQT0sbQRyGXyo5CGJMpcW4/okFEakHMYoRFcVk0A+gX6GXHrxIQdrCiCSbUfAkQlSMZoyRZLPFquB6EGwLotij9AMoQksPlUIwbsbxsK4ns8YX5vSb5/n9AYrk/2LvW8GHJorVn4zJiSE4kWI1+D49hrJnwqEtwYkUfFgKHvh5GoOrdDhB9i2YSDPV8Y1SvCgJPI35XSYnh3ZnM+U37FoFNV47wrmlwYDJgycWHLwt8J4NAMC7mMsTNn74mPa7hsZ9RQWFBEnZY4u14M35HMoBoHzybFRhX2QDy0pF1S68bLP1UcFVnDQXEiT+sDsfOLpa7nkJAJXTB5890a+ygWVlrar/9VKt02GS0MLD9ZO9v/4ttTRZkr3x6oguFKZLhWm5V5FUf1FJfjU0KziRIjEiRbLv+jxtrVM1ZVBLYD3Ho+Z5aEYk+2V+o50BgMLW69zR7WMbro1k5h0FAJBbCXQDgJt+f+MJ7176mCYVpktvVFefhO1UTh82V0W2/jSyrNU5nKElwxV0p61xRpP197DC0h9LhgHA/Snd5FX1M2vn7IdnwXaq1c2ummiGOf25AwYY35uaWQuQAAAAAElFTkSuQmCC">jQuery RegEx Examples to use with .match() | jQuery4u</A>
		<DT><A HREF="https://www.youtube.com/watch?v=ei8DfHn9xlQ" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">Javascript Video Tutorial 1 - Learn Javascript Step by Step - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=-zCNjGzyXFE&list=PLZdjW012sjggL_nRyanevMkgu51xehoQr" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">jquery tutorials for beginners - 1 - Introduction to jquery - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=Ukg_U3CnJWI" ADD_DATE="1475883182" LAST_MODIFIED="1484126326" ICON_URI="http://icon.xmarks.com/ix1rvsed-1b" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDElEQVQ4jdWQvUoDQRSFv5kJiitiAoEQK39AbIW8QR7AQtDCB7C3yEtoZbGF72CxpY1gGX8eQAgJbDSYQkjiYtjFybUZQpgoSzo9MExxzj33m4F/LwXwsl3eNWJCgR1gHVgGAi/7CaTAEGgZy2kl7rcLAEbMhUA9Z1ngTgnYtFqdA4caYAK1xdllH0C7d5R8vxzdEByfoILV3yqKbhZ6WxXx3Wr7DQBJPhhH1yRXIbYbz0YmG52+0XmkX92Y7L6J7b3+6BfcPQZWZo3ssUkSXpLe3YLMAQIMpgUCA+UVvB8d5MENwX2ihoe89LzkaUqgjZxZqwzCHooisASseRMjIANGKHnWVjUWX/on9Q2MvUwOtkJFfAAAAABJRU5ErkJggg==">Learn JavaScript in 12 Minutes - YouTube</A>
		<DT><A HREF="http://stackoverflow.com/questions/13863979/jquery-add-class-to-parent-object" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">addclass - JQuery Add Class To Parent Object - Stack Overflow</A>
		<DT><A HREF="http://revolution.themepunch.com/fullscreen-4k-youtube-video-gallery-slider-revolution-plugin/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">FullScreen 4K Youtube Video Gallery - Slider Revolution Plugin</A>
		<DT><A HREF="http://stackoverflow.com/questions/8701754/just-disable-scroll-not-hide-it" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - Just disable scroll not hide it? - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/4770025/how-to-disable-scrolling-temporarily" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - How to disable scrolling temporarily? - Stack Overflow</A>
		<DT><A HREF="http://www.jqueryrain.com/?EMTgy3nW" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">jQuery Content Filter</A>
		<DT><A HREF="http://stackoverflow.com/questions/21677542/disable-entire-div-using-javascript-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">Disable entire DIV using Javascript/JQuery - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/20299787/jquery-use-multiple-condition-in-if-statement" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">jQuery use multiple condition in if statement - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/838137/jquery-change-height-based-on-browser-size-resize?rq=1" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - Jquery Change Height based on Browser Size/Resize - Stack Overflow</A>
		<DT><A HREF="http://www.w3schools.com/js/js_if_else.asp" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">JavaScript If...Else Statements</A>
		<DT><A HREF="http://www.fusioncharts.com/javascript-chart-fiddles/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">JavaScript Chart Fiddles | FusionCharts</A>
		<DT><A HREF="http://codecanyon.net/item/jquery-css3-dropdown-menu-plugin/full_screen_preview/996815?ref=themespotters" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">jQuery CSS3 DropDown Menu Plugin Preview - CodeCanyon</A>
		<DT><A HREF="http://pixelcog.github.io/parallax.js/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326" LAST_CHARSET="UTF-8">Parallax.js | Simple Parallax Scrolling Effect with jQuery</A>
		<DT><A HREF="http://stackoverflow.com/questions/242608/disable-browsers-vertical-and-horizontal-scrollbars" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - Disable browsers vertical and horizontal scrollbars - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/19270101/jquery-accordion-customize-click-event" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - Jquery accordion customize click event - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/31044/is-there-an-exists-function-for-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">Is there an &quot;exists&quot; function for jQuery? - Stack Overflow</A>
		<DT><A HREF="http://getbootstrap.com/javascript/#carousel" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">JavaScript · Bootstrap</A>
		<DT><A HREF="http://stackoverflow.com/questions/1279957/how-to-move-an-element-into-another-element" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - How to move an element into another element? - Stack Overflow</A>
		<DT><A HREF="http://jsfiddle.net/VYbSU/735/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">Edit fiddle - JSFiddle</A>
		<DT><A HREF="https://api.jquery.com/each/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">.each() | jQuery API Documentation</A>
		<DT><A HREF="http://stackoverflow.com/questions/14846506/append-prepend-after-and-before" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">javascript - .append(), prepend(), .after() and .before() - Stack Overflow</A>
		<DT><A HREF="http://api.jquery.com/prepend/" ADD_DATE="1475883182" LAST_MODIFIED="1484126326">.prepend() | jQuery API Documentation</A>
		<DT><A HREF="https://jigneshkprajapati.wordpress.com/2011/10/11/different-icon-besides-menu-item-from-imgresource-using-typoscript/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Different icon besides menu item from imgresource using typoscript | Jignesh prajapati</A>
		<DD>To display the different icon besides menu from media field of the page property you have to write down the below typoscript. lib.nav = COA lib.nav { 10 = HMENU 10.entryLevel = 1 10.1 = TMENU 10.1 { noBlur = 1 ACT = 1 } wrap = &lt;ul&gt;|&lt;/ul&gt; 10.1.NO { allWrap = &lt;li&gt; | &lt;/li&gt;…
		<DT><A HREF="http://stackoverflow.com/questions/5271782/how-to-disable-the-resize-grabber-of-an-html-textarea" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How to disable the resize grabber of an HTML &lt;textarea&gt;? - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/11688250/setting-equal-heights-for-divs-with-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">html - Setting equal heights for div&#39;s with jQuery - Stack Overflow</A>
		<DT><A HREF="http://api.jquery.com/toggleclass/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">.toggleClass() | jQuery API Documentation</A>
		<DT><A HREF="https://api.jquery.com/parent/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">.parent() | jQuery API Documentation</A>
		<DT><A HREF="http://api.jquery.com/wrap/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">.wrap() | jQuery API Documentation</A>
		<DT><A HREF="http://bxslider.com/examples/video" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Examples | Responsive jQuery Slider | bxSlider</A>
		<DD>Respsonsive jQuery content slider.
		<DT><A HREF="https://www.youtube.com/watch?v=rMrZlm2hyLg&list=PL6n9fhu94yhVDV697uvHpavA3K_eWGQap&index=11" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery checked selector - YouTube</A>
		<DD>Link for all dot net and sql server video tutorial playlists https://www.youtube.com/user/kudvenkat/playlists?sort=dd&amp;view=1 Link for slides, code samples an...
		<DT><A HREF="http://api.jqueryui.com/datepicker/#option-minDate" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Datepicker Widget | jQuery UI API Documentation</A>
		<DD>jQuery: The Write Less, Do More, JavaScript Library
		<DT><A HREF="http://stackoverflow.com/questions/10323392/in-javascript-jquery-what-does-e-mean" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">In Javascript/jQuery what does (e) mean? - Stack Overflow</A>
		<DT><A HREF="http://www.tutorialspoint.com/jquery/jquery-events.htm" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery Events Handling</A>
		<DD>Events Handling - Learning JavaScript Framework in simple and easy steps. A beginner&#39;s tutorial containing complete knowledge of jQuery Selectors, Attributes, CSS, DOM Manipulation, AJAX Support, Drag and Drop, Effects, Event Handling, UI, Plug-ins and other related Utilities.
		<DT><A HREF="http://studytonight.com/library/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">TUTORIALS</A>
		<DT><A HREF="http://hayageek.com/docs/jquery-upload-file.php#formdata" ADD_DATE="1476447405" LAST_MODIFIED="1484126327">jQuery Upload File Plugin Demo</A>
		<DD>jQuery Upload File Plugin Demo- How to upload Multiple Files asynchronously(using jQuery Ajax) with progressbar
		<DT><A HREF="http://stackoverflow.com/questions/5404839/how-can-i-refresh-a-page-with-jquery" ADD_DATE="1476447409" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">javascript - How can I refresh a page with jQuery? - Stack Overflow</A>
		<DT><A HREF="http://www.tutorialspoint.com/jquery/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery Tutorial</A>
		<DD>jQuery Tutorial for Beginners - Learning JavaScript Framework in simple and easy steps. A beginner&#39;s tutorial containing complete knowledge of jQuery Selectors, Attributes, CSS, DOM Manipulation, AJAX Support, Drag and Drop, Effects, Event Handling, UI, Plug-ins and other related Utilities.
		<DT><A HREF="https://www.youtube.com/watch?v=fEYx8dQr_cQ&index=7&list=PLoYCgNOIyGABdI2V8I_SWo22tFpgh2s6_" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery Ajax Tutorial #1 - Using AJAX &amp; API&#39;s (jQuery Tutorial #7) - YouTube</A>
		<DT><A HREF="http://stackoverflow.com/questions/1643227/get-selected-text-from-a-drop-down-list-select-box-using-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - Get selected text from a drop-down list (select box) using jQuery - Stack Overflow</A>
		<DT><A HREF="https://teamtreehouse.com/community/how-to-add-class-and-removing-class-with-if-statement" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How to add class and removing class with if statement? | Treehouse Community</A>
		<DT><A HREF="http://stackoverflow.com/questions/8423812/enable-disable-a-div-and-its-elements-in-javascript" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jquery - Enable &amp; Disable a Div and its elements in Javascript - Stack Overflow</A>
		<DT><A HREF="http://css-plus.com/2011/07/jquery-if-else-statements/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery if / else statements - CSS-Plus</A>
		<DT><A HREF="http://stackoverflow.com/questions/11495704/how-to-write-jquery-if-else-statement" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How to write jquery If else statement? - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/1713771/how-to-detect-page-zoom-level-in-all-modern-browsers" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - How to detect page zoom level in all modern browsers? - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/196684/jquery-get-specific-option-tag-text" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - jQuery get specific option tag text - Stack Overflow</A>
		<DT><A HREF="http://api.jquery.com/height/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">.height() | jQuery API Documentation</A>
		<DT><A HREF="http://runnable.com/UfbUV5SHvmZ3AAAG/how-to-make-a-ken-burns-effect-on-an-image-using-jquery-animate" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How to make a Ken Burns effect on an image using JQuery animate Code Example - Runnable</A>
		<DT><A HREF="http://stackoverflow.com/questions/3920937/how-can-i-use-this-inside-of-fancyboxs-oncomplete-event" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - How can I use $(this) inside of Fancybox&#39;s onComplete event? - Stack Overflow</A>
		<DT><A HREF="http://ginva.com/2012/07/50-free-jquery-video-and-image-gallery-plugins/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">50 Free jQuery Video and Image Gallery Plugins | Ginva</A>
		<DT><A HREF="http://stackoverflow.com/questions/6004453/how-to-remove-multiple-deleted-files-in-git-repository" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">GIT - How to remove multiple deleted files in Git repository - Stack Overflow</A>
		<DT><A HREF="http://www.aaronrussell.co.uk/legacy/check-if-an-element-exists-using-jquery/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How to check whether an element exists using jQuery - Aaron Russell</A>
		<DT><A HREF="http://stackoverflow.com/questions/5783280/check-if-div-with-certain-class-name-exists" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - Check if div with certain class name exists - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/10754874/how-do-i-empty-an-input-value-with-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - How do I empty an input value with jQuery? - Stack Overflow</A>
		<DT><A HREF="http://mmenu.frebsite.nl/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery.mmenu, app look-alike menus with sliding submenus</A>
		<DD>The best jQuery and WordPress plugin for creating app look-alike off-canvas menus for your website.
		<DT><A HREF="http://stackoverflow.com/questions/4996953/how-to-uncheck-checkbox-using-jquery-uniform-library" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How to uncheck checkbox using jQuery Uniform library - Stack Overflow</A>
		<DT><A HREF="https://learn.jquery.com/using-jquery-core/faq/how-do-i-check-uncheck-a-checkbox-input-or-radio-button/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">How do I check/uncheck a checkbox input or radio button? | jQuery Learning Center</A>
		<DT><A HREF="http://stackoverflow.com/questions/5059732/jquery-textarea-default-value-disppear-on-click" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery: textarea default value disppear on click - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/13490929/background-color-on-select-checkbox" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - Background color on select checkbox - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/16882513/ie10-and-jquery-script5009-is-undefined" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">internet explorer - IE10 and jQuery: SCRIPT5009: &quot;$&quot; is undefined - Stack Overflow</A>
		<DT><A HREF="http://www.tutorialspoint.com/jqueryui/jqueryui_datepicker.htm" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" ICON_URI="http://icon.xmarks.com/ix0osyrz-pr" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADVklEQVQ4jV3STWhcZRTG8ee9H3NnxiSdNBQbqLRNXVRwZQm60kZITUqSltqmElsXDSIRFyKILhT8QHBjQWg7SWZS08xlkiaTdO5gCmaRhiq1gTBZNNgGUlNFrc6UkMzkzuTe+77nuKhV6W9zVn+ezRHM7ALQ8R8RBAGbpmml7bS3UdpA39t9VhAEnmmaeIwyABgAQgD4nximacLJOpie/tYSArAsC2d6z1hSSuiGDgHBAAQAH8xcZWZiZuX7PjEzT01NUXtbOxWKRapueXS06wglEgliZmbih/dhUwURbTEzP4qz2Sy3t7Xx2toar6ze44X8Ipc3N/nVY8d41E6zW63wRrlERMREtKUJISADCdM0Rc5xkBgYRGZ8EssrK1i6dQu6oWP13i9IDdvIF2/jy8lzkLoCEQEANCklDNOAk3V4KDmEr+Pn8HPxN1xJT+BoVyeiRhgNtTGczfSjfs+T2K3twNzVWei6DqUUBDOz4zhIDA7y8DfD4uPPP0He/BVH9rdg//a9KBplpH+4glDIwnO0B++/+x7e7HuLOzo6RG9vL7Tp6auek81iIJlE2a3gQaGA+kgtFovLmN9YQm5hBh92vYMnrCju3F1Gya0gOXQR8z/ehG2nPb2utu6j5uZm48WXDqLwV1GEIhEYEYWv3vgU28I14MDD4QOtuPvHHTz/7At4qnEXdjbuBBOJzMSE0s5fOI/5+ZtI9Mex7+kmXJ+dBfkCH4x/ge119QiFLHyWOwuSwI1r36NpXxOmMhnYqRRSdgqCmX1Syjx1+jS3HGwRsVgM12ZmsaoVQTsMCN2AeOBht9eAl1tbAAGMXBrhicyEiESjSiMiEpqGdDqNubk5+L6PC8k4eg50Ym+4EbvMBhx/5hDiQ/2oqa2BnbIxPplBOBKBUkqCmT1mZiIiKSW/dvIkx+NxVsycHhvjiyOXWDHz5bHL/ErrIXZdl//Hg5SyWiqXya1UlJSSlFLUfaKbBgcGqLTp0qZbobHRUTrc1k6u6xIRkVtxValcpiAIqljIL3q/37//6Lf/9XpPD9u2zblcjrs6Ox9f5j8LBV7IL3pi6afbrpJKj0TDiNVtQyhkwjBMRKNRrfvEcVpfX8d3MzPwfB++58MPApRKJbiVCjRNU38DJ5wmZg6BuncAAAAASUVORK5CYII=">JqueryUI Datepicker</A>
		<DT><A HREF="http://stackoverflow.com/questions/3566388/how-do-i-check-if-the-height-of-a-div-is-greater-than-700px-using-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">javascript - How do I check if the height of a div is greater than 700px, using Jquery? - Stack Overflow</A>
		<DT><A HREF="http://jsfiddle.net/hEApL/147/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Edit fiddle - JSFiddle</A>
		<DD>Test your JavaScript, CSS, HTML or CoffeeScript online with JSFiddle code editor.
		<DT><A HREF="https://api.jquery.com/slideToggle/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">.slideToggle() | jQuery API Documentation</A>
		<DD>jQuery: The Write Less, Do More, JavaScript Library
		<DT><A HREF="http://www.spiceforms.com/blog/how-to-disable-dates-in-jquery-datepicker-a-short-guide/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">How to Disable Dates in Jquery DatePicker - A Short Guide</A>
		<DD>I will discuss various methods on How to Disable dates in Jquery Datepicker. We will disable weekdays, weekends and particular dates
		<DT><A HREF="https://jqueryui.com/tabs/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Tabs | jQuery UI</A>
		<DD>jQuery: The Write Less, Do More, JavaScript Library
		<DT><A HREF="http://stackoverflow.com/questions/4243554/if-checkbox-is-checked-do-this" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jquery - if checkbox is checked, do this - Stack Overflow</A>
		<DT><A HREF="http://www.isummation.com/blog/jquery-enabledisable-specific-date/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery Enable/Disable Specific date - iSummation WebSite</A>
		<DD>iSummation&#39;s web development blog on ColdFusion, jQuery, HTML5, AJAX, Mobile Application, Android, iPhone, BlackBerry, SQL, Cloud Base Service and all aspects of web application development.
		<DT><A HREF="http://www.isummation.com/blog/jquery-enabledisable-specific-date/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery Enable/Disable Specific date - iSummation WebSite</A>
		<DD>iSummation&#39;s web development blog on ColdFusion, jQuery, HTML5, AJAX, Mobile Application, Android, iPhone, BlackBerry, SQL, Cloud Base Service and all aspects of web application development.
		<DT><A HREF="http://hayageek.com/docs/jquery-upload-file.php#formdata" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery Upload File Plugin Demo</A>
		<DD>jQuery Upload File Plugin Demo- How to upload Multiple Files asynchronously(using jQuery Ajax) with progressbar
		<DT><A HREF="http://stackoverflow.com/questions/4243554/if-checkbox-is-checked-do-this" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jquery - if checkbox is checked, do this - Stack Overflow</A>
		<DT><A HREF="http://www.spiceforms.com/blog/how-to-disable-dates-in-jquery-datepicker-a-short-guide/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">How to Disable Dates in Jquery DatePicker - A Short Guide</A>
		<DD>I will discuss various methods on How to Disable dates in Jquery Datepicker. We will disable weekdays, weekends and particular dates
		<DT><A HREF="https://jqueryui.com/tabs/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Tabs | jQuery UI</A>
		<DD>jQuery: The Write Less, Do More, JavaScript Library
		<DT><A HREF="https://api.jquery.com/slideToggle/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">.slideToggle() | jQuery API Documentation</A>
		<DD>jQuery: The Write Less, Do More, JavaScript Library
		<DT><A HREF="http://jsfiddle.net/hEApL/147/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Edit fiddle - JSFiddle</A>
		<DD>Test your JavaScript, CSS, HTML or CoffeeScript online with JSFiddle code editor.
		<DT><A HREF="http://mmenu.frebsite.nl/" ADD_DATE="1479117479" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery.mmenu, app look-alike menus with sliding submenus</A>
		<DT><A HREF="http://hayageek.com/docs/jquery-upload-file.php#formdata" ADD_DATE="1479117479" LAST_MODIFIED="1484126327">jQuery Upload File Plugin Demo</A>
		<DT><A HREF="http://mmenu.frebsite.nl/" ADD_DATE="1476447406" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery.mmenu, app look-alike menus with sliding submenus</A>
		<DD>The best jQuery and WordPress plugin for creating app look-alike off-canvas menus for your website.
		<DT><A HREF="http://www.tutorialspoint.com/jquery/" ADD_DATE="1479117479" LAST_MODIFIED="1484126327">jQuery Tutorial</A>
		<DT><A HREF="http://stackoverflow.com/questions/5404839/how-can-i-refresh-a-page-with-jquery" ADD_DATE="1479117479" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">javascript - How can I refresh a page with jQuery? - Stack Overflow</A>
		<DT><A HREF="http://www.tutorialspoint.com/jquery/" ADD_DATE="1476447403" LAST_MODIFIED="1484126327">jQuery Tutorial</A>
		<DD>jQuery Tutorial for Beginners - Learning JavaScript Framework in simple and easy steps. A beginner&#39;s tutorial containing complete knowledge of jQuery Selectors, Attributes, CSS, DOM Manipulation, AJAX Support, Drag and Drop, Effects, Event Handling, UI, Plug-ins and other related Utilities.
		<DT><A HREF="http://stackoverflow.com/questions/5404839/how-can-i-refresh-a-page-with-jquery" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">javascript - How can I refresh a page with jQuery? - Stack Overflow</A>
		<DT><A HREF="http://www.tutorialspoint.com/jquery/jquery-events.htm" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">jQuery Events Handling</A>
		<DD>Events Handling - Learning JavaScript Framework in simple and easy steps. A beginner&#39;s tutorial containing complete knowledge of jQuery Selectors, Attributes, CSS, DOM Manipulation, AJAX Support, Drag and Drop, Effects, Event Handling, UI, Plug-ins and other related Utilities.
		<DT><A HREF="http://stackoverflow.com/questions/10323392/in-javascript-jquery-what-does-e-mean" ADD_DATE="1475883182" LAST_MODIFIED="1484126327">In Javascript/jQuery what does (e) mean? - Stack Overflow</A>
		<DT><A HREF="http://api.jqueryui.com/datepicker/#option-minDate" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Datepicker Widget | jQuery UI API Documentation</A>
		<DT><A HREF="http://jsfiddle.net/hEApL/147/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Edit fiddle - JSFiddle</A>
		<DT><A HREF="https://www.youtube.com/watch?v=rMrZlm2hyLg&list=PL6n9fhu94yhVDV697uvHpavA3K_eWGQap&index=11" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">jQuery checked selector - YouTube</A>
		<DD>Link for all dot net and sql server video tutorial playlists https://www.youtube.com/user/kudvenkat/playlists?sort=dd&amp;view=1 Link for slides, code samples an...
		<DT><A HREF="http://bxslider.com/examples/video" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Examples | Responsive jQuery Slider | bxSlider</A>
		<DD>Respsonsive jQuery content slider.
		<DT><A HREF="http://pixelcog.github.io/parallax.js/" ADD_DATE="1475883182" LAST_MODIFIED="1484126327" LAST_CHARSET="UTF-8">Parallax.js | Simple Parallax Scrolling Effect with jQuery</A>
	</DL><p>
	
	Jquery and Ajax delete confirmation box
		http://stackoverflow.com/questions/14657517/jquery-and-ajax-delete-confirmation-box

	How do I check if a checkbox is checked in jQuery?
		http://stackoverflow.com/questions/901712/how-do-i-check-if-a-checkbox-is-checked-in-jquery?rq=1
		
	jquery ajax delete record
		http://stackoverflow.com/questions/14928516/jquery-ajax-delete-record
		
	How to get anchor text/href on click using jQuery?
		http://stackoverflow.com/questions/2652372/how-to-get-anchor-text-href-on-click-using-jquery
		
	using jQuery Select previous td text
		http://stackoverflow.com/questions/9830952/using-jquery-select-previous-td-text
		
	jquery Tree Traversal prev() in TD's
		http://stackoverflow.com/questions/2429153/jquery-tree-traversal-prev-in-tds
		
		http://stackoverflow.com/questions/27369207/jquery-find-previous-td-with-class
		
		http://www.java2s.com/Tutorials/Javascript/jQuery/Select/Select_all_previous_tags_and_set_styles_in_jQuery.htm
		
		http://stackoverflow.com/questions/5750583/jquery-children-vs-child-selector
		
		http://stackoverflow.com/questions/2610652/jquery-select-element-in-siblings-td
		
		http://stackoverflow.com/questions/2610652/jquery-select-element-in-siblings-td
		
		http://stackoverflow.com/questions/2889966/jquery-access-sibling-td-in-table
		
		http://stackoverflow.com/questions/13926045/how-to-get-jquery-anchor-href-value
		
		http://stackoverflow.com/questions/2652372/how-to-get-anchor-text-href-on-click-using-jquery
		
		http://stackoverflow.com/questions/8991424/getting-the-href-value-from-anchor-tag
		
		https://sharag.wordpress.com/category/jquery/

</div>