<?php $topic = 'Ajax'; ?>
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

	<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482759415">Ajax</H3>
	<DL><p>
		<DT><A HREF="https://www.youtube.com/watch?v=bzyqfoDd9a0" ADD_DATE="1479117479">Jquery Insert Form Data using Ajax serialize() method with php mysql - YouTube</A>
		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482759415">Ajax important</H3>
		<DL><p>
			<DT><A HREF="https://www.youtube.com/watch?v=9kbqptbNBi8" ADD_DATE="1479117482">Top 50 Ajax Interview Questions &amp; Answers - YouTube</A>
			<DT><A HREF="https://www.youtube.com/watch?v=DLVKq8dCdxc" ADD_DATE="1479117482">Jquery + Ajax in PHP Introduction - YouTube</A>
			<DT><A HREF="https://www.youtube.com/watch?v=AofECml9pQU" ADD_DATE="1479117482">PHP/AJAX Submit form without refreshing it - YouTube</A>
			<DT><A HREF="https://www.youtube.com/watch?v=_3tzyQR-DRA&list=PLCakfctNSHkGpspSXXG6jqrPEHzZlUIkp&index=2" ADD_DATE="1479117482">Insert Data Into MySQL Database using jQuery + AJAX + PHP Part1 - YouTube</A>
			<DT><A HREF="http://www.w3schools.com/jquery/jquery_ref_events.asp" ADD_DATE="1479117482" LAST_MODIFIED="1482499570">jQuery Event Methods</A>
			<DT><A HREF="https://api.jquery.com/category/ajax/shorthand-methods/" ADD_DATE="1479117482" LAST_MODIFIED="1482499571">Shorthand Methods | jQuery API Documentation</A>
			<DT><A HREF="https://www.youtube.com/watch?v=qKaNdIyDCV0" ADD_DATE="1476734812" LAST_MODIFIED="1482499573">AJAX Training - Part 11 - Making Asynchronous and Synchronous Requests - YouTube</A>
			<DT><A HREF="http://stackoverflow.com/questions/446594/abort-ajax-requests-using-jquery?rq=1" ADD_DATE="1477049702" LAST_MODIFIED="1482499569">javascript - Abort Ajax requests using jQuery - Stack Overflow</A>
			<DT><A HREF="http://www.w3schools.com/jquery/jquery_ref_ajax.asp" ADD_DATE="1478087903" LAST_MODIFIED="1482499573">jQuery AJAX Methods</A>
			<DT><A HREF="http://www.w3schools.com/jquery/jquery_events.asp" ADD_DATE="1478087891" LAST_MODIFIED="1482499573">jQuery Event Methods</A>
			<DT><A HREF="https://api.jquery.com/category/events/" ADD_DATE="1478087911" LAST_MODIFIED="1482499573">Events | jQuery API Documentation</A>
			<DT><A HREF="https://api.jquery.com/category/attributes/" ADD_DATE="1478087925" LAST_MODIFIED="1482499572">Attributes | jQuery API Documentation</A>
			<DT><A HREF="https://www.youtube.com/watch?v=qqRiDlm-SnY" ADD_DATE="1475883183">Simple Ajax Tutorial - YouTube</A>
			<DT><A HREF="http://www.globalguideline.com/interview_questions/Questions.php?sc=Basic_AJAX_Programming_Interview_Questions_and_Answers" ADD_DATE="1475883183">61 Basic AJAX Interview Questions And Answers</A>
			<DT><A HREF="https://www.youtube.com/watch?v=IyCnbyWZkRU&index=38&list=PLQO-BHKSAJUKrjtUX_alno8KA1VZmZfxq" ADD_DATE="1475883183" ICON_URI="http://icon.xmarks.com/ix0osyrz-ll" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACd0lEQVQ4ja2TzU4TURTHTwJLo+GrxencufNx53ZqCz6CboyRFzC+A7yCiSzZSKIbJSRKYogNOxa60FBZFBkcoFAcoGkDodUYkgIbgzOdc1zMNBCiO27yyznnf39neQAAoAjQQwC9SwC9FPf/JXF6iwA9cG3vICfHjkeyk828Pd3Ky5lmQc61CnK+WZDFZkEWk36ulZczzbw9fTySnTzIyTEAADh0rInTEYfORhw6vczdO3QymqOTq/kl99CxJqDhCL+Vs6O6I87rOTuMkWHdZGHDEWGj4IQXeYIjzls5O2o4woeatNp1KXDftrAmBdayAmvCwMOxh+G+Y0d7t1NUy0mqOTbuS0G1bOzWpcCatNrgCyvwbYt8YeKebUW7WYk7QwN49vFD+HtnJ6w/eRxU06nI5wx3pUBfxG68YwVQtUzaTqhaJm5Lm7YGB6L2wkKHiCgiorbrBv79e0FVY1i1LKxaJiY+waZh0KZhUMUwcMswok0haL2vLzpZXOwQEf05Our8mJoKKqOjnYrGsWKYWDEM7O6Bx/XA4zp5Gsd1ruO6YaLbP4i/ZmeDny9eBp4pOu6Nm+hlGK5zA7uux3XyuB7Aqsrb3xjHVVVDl3F0VY4u03GNG9HKrX5cVVRa0y10mY6rjJObuPEOb0NZ0Xwvw6Oyop2XM1pYzmhhWdHCssLCFWaG5QyP524e13Mvw6MVRfsOy8Pq+IbCaVPhFFedNhSdNjI6bSRZjJ78XbjLw+o4AAB8SikPysPq06W0Ol1Kqa+WUuxNKa2+K6XZ+1KaFZfSbL6UYm9LafX1lyH2/Ouw9uzzkPro+o6pmJxplyJAz7+46gAA/AUDsaBnYiC/RgAAAABJRU5ErkJggg==">Using AJAX with jQuery - YouTube</A>
			<DT><A HREF="https://www.youtube.com/watch?v=qKaNdIyDCV0" ADD_DATE="1479117482">AJAX Training - Part 11 - Making Asynchronous and Synchronous Requests - YouTube</A>
			<DT><A HREF="http://stackoverflow.com/questions/446594/abort-ajax-requests-using-jquery?rq=1" ADD_DATE="1479117482">javascript - Abort Ajax requests using jQuery - Stack Overflow</A>
			<DT><A HREF="http://www.w3schools.com/jquery/jquery_ref_ajax.asp" ADD_DATE="1479117482">jQuery AJAX Methods</A>
			<DT><A HREF="http://www.w3schools.com/jquery/jquery_events.asp" ADD_DATE="1479117482">jQuery Event Methods</A>
			<DT><A HREF="https://api.jquery.com/category/events/" ADD_DATE="1479117482">Events | jQuery API Documentation</A>
			<DT><A HREF="https://api.jquery.com/category/attributes/" ADD_DATE="1479117482">Attributes | jQuery API Documentation</A>
			<DT><A HREF="http://www.w3schools.com/jquery/jquery_ref_events.asp" ADD_DATE="1478087882">jQuery Event Methods</A>
			<DT><A HREF="https://api.jquery.com/category/ajax/shorthand-methods/" ADD_DATE="1478087918">Shorthand Methods | jQuery API Documentation</A>
		</DL><p>
		<DT><A HREF="https://www.youtube.com/watch?v=V3XghenpODs" ADD_DATE="1475883182">AJAX in under 10 minutes - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=GrycH6F-ksY" ADD_DATE="1475883182">jQuery Tutorials: Submitting a Form with AJAX - YouTube</A>
		<DT><A HREF="http://stackoverflow.com/questions/1510011/how-does-ajax-work" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-fp" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHElEQVQ4jZ1QLU8DQRDdhJSZURU1mFMVlXWIJrUklQgkrqm4y+5MVR0C1z9BmpAK+AHnMKfwJPyAUw3Jfcz8gSLgcNdueMmInZ335s1zLgJVSknMXC9MsGgDLv8vwDAxpkPrYRxNagMuVWDRvTVApkzvr3fuIm5roJkKliaw7UjKmCvjQ7z1zI2UMTfBokop+UrdlTEd1A+u+617GKvgzgLN/npMm98MbppweauCj70C9coNlWFtjJ/G+KEBsnrlhrXHuQqWxjCJPqH2OFfGvTI1Krhr/GB6/m7BQhn3LdNGBRZVSslPFrCOEmj8YKoB701gq4y5CpbK1Jjg20ni0/PLsddV5kZd8r1z3YcJHfsqSuAcTgrEVsyiaHwDeSy1MkMyrCcAAAAASUVORK5CYII=">javascript - How does AJAX work? - Stack Overflow</A>
		<DT><A HREF="https://www.youtube.com/watch?v=55FwdtnvQAM" ADD_DATE="1476447407" LAST_MODIFIED="1482499573">Registration Form Using jQuery + AJAX: PART 1 - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=tp3Gw-oWs2k&list=PL6gx4Cwl9DGDiJSXfsJTASx9eMq_HlenQ" ADD_DATE="1476447411" LAST_MODIFIED="1482499573">AJAX Tutorial - 1 - Introduction to AJAX - YouTube</A>
		<DT><A HREF="http://it-ebooks.info/book/1030/" ADD_DATE="1479117479" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-2l" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACSklEQVQ4jbWTyUvUYRyHXyjfzXcSOglCUIcgOgROF3X097Nc0sysFDVr0NRyKS1TsSxsMUoIOgWa4zauvybNxiU1l9K00calxnsknfoDun46jM1MpBBE3/vzwAOfLyH/4yx2skc3GIpnDiB7NAy6Qd1/R2aQHY/XkjC0cQUN6yY0rJvwwKPwxLMPzi81KJo8iG3ZiA4SNvKtygc+Wjeh/rPC3VWFW8sKNYsSFQsS9a6UrSXOjct+2OOF76wo1LoVql0S1+YlSmcFCqcFiifCf5doBl39BT/0KNz/pFC3onDzo0KVS6L8vUTJO4GCKQHrOEfWKEeEjez2CSpdoah2B6NuLRj31hRuLyvcWJKo/CBRNidR9FYgf1Lg/DhHhpMjsZNCM+gPn6DKHYzrSxJXFyRK5yQuzQjkvxGwvhbIHuJIH+A4+ZwhuYchwU5xpI1Ct3N/RsWiRPmCROmsxMUZgQsTAudGObKcHGf6OVINhqRuhvgOithWiuhmiug26heUzUuUzEoUTgvkjQvkjHBkvuI4/YLhRB/DsS6GuHYKvYUi+hlFZGMQYroCBJnDoSiYEsgdEzg7zJExyJHmYEjpZUjsZDjaTqG1UFg24cjGIMT00VqfQH9KVO6Y8va+9PYeD+jVbBSWpiAfnNa1988taAb7njUYglSDIbmbId7u7Y1ppogKgHOMQ9B7dlq2HJNmsK/Fw2bEdVDord7eqE0w1rYLVkc4tF56ars1E0IIMTeRkIS+EOT1H4bVYYbVYUZ6z35ovWz7P/iX+wk4O1GC0cf1SwAAAABJRU5ErkJggg==" LAST_CHARSET="UTF-8">Beginning Ajax with PHP - Free Download eBook - pdf</A>
		<DD>Ajax breathes new life into web applications by transparently communicating and manipulating data in conjunction with a server-based technology. Of all the server-based technologies capable of working in conjunction with Ajax, perhaps none are more s
		<DT><A HREF="http://www.javatpoint.com/ajax-tutorial" ADD_DATE="1476447418" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-2y" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAVCAYAAACg/AXsAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94MAQYPI7jeTJQAAAGkSURBVDjL7ZQxSxxBFMd/Ozs7TkC55DA2HqJgKsFIqmBnZZVPEK656q5PkcZPEMvrtj00TdIdCNdZpQ4hRQgHKXIqJClMTj2zO88ib2U5PPSs82DY2dn3fvOffe9NxD8zgNXnXU2AHMgjDXwILAMVIFIHdB6VgqQEuQBOgGMABzyTe1iv13sP1IojVAC89xJC+Aic6fpCHMcrAHmefwJ+q7J5Y8xqCGEOeADgga00TcU59xV4AawDz6vV6pt2uy3eewEawIaOl865c2vtAfAEYAbY9N6LtXYXWFLwQr1efy0iBWQbmNWd11qt1mGSJO+AFQME4KeIfMmybB/4AVwCmTEmAIgImokMGAEnaZruAd+AodWPg9FotAX80b8ut6T2NMuyt0BcQIIGn+lcSmmdBPkLnBbvdqxwpim0a7XTVOhE+w+5J0SLbWpIBBgRicZ8o7tCjPbOo+FwWCmtPwaq2jvmNmUVYKPZbO50u93Pxd3R6XQ+NBqNV8BT9ZkIioFav98/cs7JTSNJku9ATX2vzz6uZBZYVOmutGOu3f0LGGi/BYArMOLGbEKJU04AAAAASUVORK5CYII=">AJAX Tutorial - javatpoint</A>
		<DT><A HREF="https://www.youtube.com/watch?v=5nL7X1UMWsc&list=PLoYCgNOIyGABdI2V8I_SWo22tFpgh2s6_&index=8" ADD_DATE="1475883182">jQuery Ajax Tutorial #2 - Posting data to backend (jQuery tutorial #8) - YouTube</A>
		<DT><A HREF="http://www.java4s.com/ajax/" ADD_DATE="1475883182" LAST_MODIFIED="1482499569" ICON_URI="http://icon.xmarks.com/ix0osyrz-fu" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACdklEQVQ4jaWSX0hTARTGv7vdzbCV4t9FQj30EEJISFQYZVjUSzUs66Gih+glKJBAKEwvGUoRBbFQy4HO5WzzL20aSt07MHXOtek2Xf5pYlo2rUV7mG7unh6UQAMb9IPzdvjOx/cdYAWG53NZIo7leY7leZ4lIgn+FwIxMS3OfG85ODn3oHxsSl/8I9h/PRT+fC0SCeXGfGlgXHXJNZ9CHf2p1G3fTTbfXhqZvrUcCJAKAIj+4eTD+JnMvo/Hxjv7skK1prhwy3uEBscu05fZUENMAgAxNy5Shs2p72mxpInNFmbR6r4pOp2zNQCQnQ0ZAHZDiYJcUvi+aoeaBAUZBCwOuu+RxzVfCYDB2jAZEP52ZG6mHZOzNYE6EyMaBSw5PFXiiNuvBoBUpezK1iQUroitY7VzZsJLOfbR8nClAaTvZpfsLgMt+Ok+gBPJSiklJGMOAO7UY1tFI/YVabBljdDUJOX3OgtJ3YBonSk+4hkVRKOxrRPA47TtslqZHLYnHThXqkOwTI+3JVpcBQAEg96jM58oazkaeNrRc1hU6yXLOrNStNr4yPGTh0geD3NyurQ7XoGFvAt4VNGGnrJGmEu0uA2AgaFrV/S1cGqxTdhPVa/ixDoToq3CgbDD4aXT+XnvNm2GJildMq1IQPSICs8etkPN6eDm6vGzwAA5mvhEet4K0rRj6UWzNGrsyiS78w25hifsRL9SACAxDVlyOc7qhpBRqkMZ9xLFd3XYAwCwDRmNlr5qsruqydKrIUGwhKxWj9bnG1CuxrNx/wDgdVOOe/hbkcvpP+9wjO5c0/kKEgBSAAzHgV0dyfqlPxARE8P7AgB+AxkiPGTN+bJUAAAAAElFTkSuQmCC">Ajax Tutorials, Ajax Tutorials with Examples, Ajax Tutorials for Beginners</A>
		<DD>Ajax tutorials, ajax complete tutorials for beginners, ajax tutorials step by step with Examples, Java Ajax tutorials, Java Ajax tutorials with examples.
		<DT><A HREF="http://www.java4s.com/ajax/" ADD_DATE="1475883182" LAST_MODIFIED="1482432212" ICON_URI="http://icon.xmarks.com/ix0osyrz-fu" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACdklEQVQ4jaWSX0hTARTGv7vdzbCV4t9FQj30EEJISFQYZVjUSzUs66Gih+glKJBAKEwvGUoRBbFQy4HO5WzzL20aSt07MHXOtek2Xf5pYlo2rUV7mG7unh6UQAMb9IPzdvjOx/cdYAWG53NZIo7leY7leZ4lIgn+FwIxMS3OfG85ODn3oHxsSl/8I9h/PRT+fC0SCeXGfGlgXHXJNZ9CHf2p1G3fTTbfXhqZvrUcCJAKAIj+4eTD+JnMvo/Hxjv7skK1prhwy3uEBscu05fZUENMAgAxNy5Shs2p72mxpInNFmbR6r4pOp2zNQCQnQ0ZAHZDiYJcUvi+aoeaBAUZBCwOuu+RxzVfCYDB2jAZEP52ZG6mHZOzNYE6EyMaBSw5PFXiiNuvBoBUpezK1iQUroitY7VzZsJLOfbR8nClAaTvZpfsLgMt+Ok+gBPJSiklJGMOAO7UY1tFI/YVabBljdDUJOX3OgtJ3YBonSk+4hkVRKOxrRPA47TtslqZHLYnHThXqkOwTI+3JVpcBQAEg96jM58oazkaeNrRc1hU6yXLOrNStNr4yPGTh0geD3NyurQ7XoGFvAt4VNGGnrJGmEu0uA2AgaFrV/S1cGqxTdhPVa/ixDoToq3CgbDD4aXT+XnvNm2GJildMq1IQPSICs8etkPN6eDm6vGzwAA5mvhEet4K0rRj6UWzNGrsyiS78w25hifsRL9SACAxDVlyOc7qhpBRqkMZ9xLFd3XYAwCwDRmNlr5qsruqydKrIUGwhKxWj9bnG1CuxrNx/wDgdVOOe/hbkcvpP+9wjO5c0/kKEgBSAAzHgV0dyfqlPxARE8P7AgB+AxkiPGTN+bJUAAAAAElFTkSuQmCC">Ajax Tutorials, Ajax Tutorials with Examples, Ajax Tutorials for Beginners</A>
		<DD>Ajax tutorials, ajax complete tutorials for beginners, ajax tutorials step by step with Examples, Java Ajax tutorials, Java Ajax tutorials with examples.
		<DT><A HREF="https://www.youtube.com/watch?v=55FwdtnvQAM" ADD_DATE="1479117479">Registration Form Using jQuery + AJAX: PART 1 - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=tp3Gw-oWs2k&list=PL6gx4Cwl9DGDiJSXfsJTASx9eMq_HlenQ" ADD_DATE="1479117479">AJAX Tutorial - 1 - Introduction to AJAX - YouTube</A>
		<DT><A HREF="http://it-ebooks.info/book/1030/" ADD_DATE="1476447418" LAST_MODIFIED="1482432212" ICON_URI="http://icon.xmarks.com/ix1rvsed-2l" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACSklEQVQ4jbWTyUvUYRyHXyjfzXcSOglCUIcgOgROF3X097Nc0sysFDVr0NRyKS1TsSxsMUoIOgWa4zauvybNxiU1l9K00calxnsknfoDun46jM1MpBBE3/vzwAOfLyH/4yx2skc3GIpnDiB7NAy6Qd1/R2aQHY/XkjC0cQUN6yY0rJvwwKPwxLMPzi81KJo8iG3ZiA4SNvKtygc+Wjeh/rPC3VWFW8sKNYsSFQsS9a6UrSXOjct+2OOF76wo1LoVql0S1+YlSmcFCqcFiifCf5doBl39BT/0KNz/pFC3onDzo0KVS6L8vUTJO4GCKQHrOEfWKEeEjez2CSpdoah2B6NuLRj31hRuLyvcWJKo/CBRNidR9FYgf1Lg/DhHhpMjsZNCM+gPn6DKHYzrSxJXFyRK5yQuzQjkvxGwvhbIHuJIH+A4+ZwhuYchwU5xpI1Ct3N/RsWiRPmCROmsxMUZgQsTAudGObKcHGf6OVINhqRuhvgOithWiuhmiug26heUzUuUzEoUTgvkjQvkjHBkvuI4/YLhRB/DsS6GuHYKvYUi+hlFZGMQYroCBJnDoSiYEsgdEzg7zJExyJHmYEjpZUjsZDjaTqG1UFg24cjGIMT00VqfQH9KVO6Y8va+9PYeD+jVbBSWpiAfnNa1988taAb7njUYglSDIbmbId7u7Y1ppogKgHOMQ9B7dlq2HJNmsK/Fw2bEdVDord7eqE0w1rYLVkc4tF56ars1E0IIMTeRkIS+EOT1H4bVYYbVYUZ6z35ovWz7P/iX+wk4O1GC0cf1SwAAAABJRU5ErkJggg==" LAST_CHARSET="UTF-8">Beginning Ajax with PHP - Free Download eBook - pdf</A>
		<DD>Ajax breathes new life into web applications by transparently communicating and manipulating data in conjunction with a server-based technology. Of all the server-based technologies capable of working in conjunction with Ajax, perhaps none are more s
		<DT><A HREF="http://www.javatpoint.com/ajax-tutorial" ADD_DATE="1479117479" ICON_URI="http://icon.xmarks.com/ix1rvsed-2y" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAVCAYAAACg/AXsAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94MAQYPI7jeTJQAAAGkSURBVDjL7ZQxSxxBFMd/Ozs7TkC55DA2HqJgKsFIqmBnZZVPEK656q5PkcZPEMvrtj00TdIdCNdZpQ4hRQgHKXIqJClMTj2zO88ib2U5PPSs82DY2dn3fvOffe9NxD8zgNXnXU2AHMgjDXwILAMVIFIHdB6VgqQEuQBOgGMABzyTe1iv13sP1IojVAC89xJC+Aic6fpCHMcrAHmefwJ+q7J5Y8xqCGEOeADgga00TcU59xV4AawDz6vV6pt2uy3eewEawIaOl865c2vtAfAEYAbY9N6LtXYXWFLwQr1efy0iBWQbmNWd11qt1mGSJO+AFQME4KeIfMmybB/4AVwCmTEmAIgImokMGAEnaZruAd+AodWPg9FotAX80b8ut6T2NMuyt0BcQIIGn+lcSmmdBPkLnBbvdqxwpim0a7XTVOhE+w+5J0SLbWpIBBgRicZ8o7tCjPbOo+FwWCmtPwaq2jvmNmUVYKPZbO50u93Pxd3R6XQ+NBqNV8BT9ZkIioFav98/cs7JTSNJku9ATX2vzz6uZBZYVOmutGOu3f0LGGi/BYArMOLGbEKJU04AAAAASUVORK5CYII=">AJAX Tutorial - javatpoint</A>
	</DL><p>

	########################################### Ajax ###########################################

	**** New Ajax language	***

	*******http://www.w3schools.com/php/php_ajax_php.asp
	***http://www.javatpoint.com/ajax-technologies
	***https://www.tutorialspoint.com//ajax/index.htm
	https://www.youtube.com/playlist?list=PLGJDCzBP5j3wAb2JwheEyf8uep7CXUaD-

	http://www.sssit.org/php-syllabus
	http://www.sssit.org/php-development

	**** New Ajax language	***

	http://www.w3schools.com/html/html_charset.asp
	http://www.w3schools.com/html/html_urlencode.asp
	http://www.w3schools.com/html/html_form_elements.asp

	Algorithms and Data structures:-
	https://www.youtube.com/watch?v=aGjL7YXI31Q&list=PLEbnTDJUr_IeHYw_sfBOJ6gk5pie0yP-0

	########################################### Ajax ###########################################
	
</div>