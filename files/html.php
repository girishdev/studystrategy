<?php $topic = 'Html'; ?>
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
	
	<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1485091678">Html</H3>
	<DL><p>
		<DT><A HREF="https://www.youtube.com/watch?v=go5U9wfM9h4&index=4&list=PL081AC329706B2953" ADD_DATE="1483929675">HTML5 Tutorial - 4 - Adding the Meat! - YouTube</A>
		<DT><A HREF="http://enscrollplugin.com/#try-it-now" ADD_DATE="1475883181" LAST_MODIFIED="1483931680">The enscroll jQuery Plugin</A>
		<DT><A HREF="https://css-tricks.com/use-target_blank/" ADD_DATE="1475883181" LAST_MODIFIED="1483931680">When to use target=&quot;_blank&quot; | CSS-Tricks</A>
		<DT><A HREF="https://www.youtube.com/watch?v=7pjPSdxj5Nw" ADD_DATE="1484625628">How is XHTML different from HTML? - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=lkCGx3pJwfc" ADD_DATE="1484625920">HTML 5 Absolute Beginners Tutorial –Difference between HTML and XHTML - YouTube</A>
		<DT><A HREF="http://www.deitel.com/Tutorials/Freetutorialsandarticles/tabid/1575/Default.aspx" ADD_DATE="1475883181" LAST_MODIFIED="1484637764" LAST_CHARSET="UTF-8">Deitel Free Content Library</A>
		<DD>List of our free tutorials provided at deitel.com
		<DT><A HREF="http://www.w3schools.com/html/html_urlencode.asp" ADD_DATE="1475944945" LAST_MODIFIED="1484637764">HTML URL Encoding</A>
		<DT><A HREF="http://stackoverflow.com/questions/3970746/html-how-to-force-links-to-open-in-a-new-tab-not-new-window?lq=1" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">cross browser - HTML: how to force links to open in a new tab, not new window - Stack Overflow</A>
		<DT><A HREF="http://madalgo.au.dk/~jakobt/wkhtmltoxdoc/wkhtmltopdf-0.9.9-doc.html" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">wkhtmltopdf - Manual</A>
		<DT><A HREF="http://www.aspsnippets.com/Articles/Send-Pass-Data-Values-from-one-page-to-another-using-jQuery.aspx" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">Send (Pass) Data (Values) from one page to another using jQuery</A>
		<DT><A HREF="http://tomasjanecek.cz/en/clanky/post/list-of-bootstrap-3-css-classes-with-description" ADD_DATE="1475883181" LAST_MODIFIED="1484637764" ICON_URI="http://icon.xmarks.com/ix1rvsed-10" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADGklEQVQ4jYXSb2jUBRzH8c9aYK0W2ubc3W237W63224375ze7f/Nu226Hbe5nc3duU23yBJWMppKkRQUgfNJESXIDHuiiRiLshKSCgryQQ96FqUh9ECCgVvdn2335/fuiYog2Bu+T198v/DV0r9JsvkcFe4OMvkcWyrdPFWyaUKSSVKh/i/DMDAMg47de9hstnHr5hKr2QyJ1TUKN2yISNr8SOi1Y+9gGAYWh5cbv93m1xu3yOSyrGczpNbXjOXUKpK6JW2S9NhDQFVlE73tnTT6wuTzObJ3J9Q3RGmZHYv5AInUmrGcSBuS/JKekVRwH4iPDmGrqcVk9dAfGWH+9BlaB06y1bONOmcb167/Qjqzjqk8xnIqzdJKypDULOlpSQU68XMtlzMjzL85w1R0mBennycWHaazK8qVL67Q7G0lm8+yePVHEqtpVlJpPv/uL4qKiw1JTbI57cz/4OKNr8z0DRTS5W/F1xFg8lCcRkcPXs8YPt9eMrkcmXyOs4tfU2oxcyeZZGkliV4+vwVzSSk11fVUWapZWIlw+vdePjq7A39PkL2TMb5c/ISjr5/C6+zjTuIf9kUjfPzpVZZTKeR3O/HtaMBqstFaZyU20E1wu49iayET4+1UVz3BUKQPu9PDpUvnCUeitLX1kVxbI7GaRjMXSomFRwjHD3L8WpCpyTjPDdZhLjdhqiviyFs2Pvg7yMJ6P5P7o9hqG4hNDNO6vZnOwE40NzuzvHFjCQuLJxg9WY6l8llcDSGa3Q3M/mTlvWQ/bksjkZ3NvP9ngFCXi+n9MYa623hp9hiSZJc0KOndwcFRo6qiAktZOS7PVnz+Oo5fdzD3vY1wlxd/ewW9IRO1VieNLhdhr4N771AoqVRSp6QjPd2+m8FAF4F4BUe/tXMwHuCVyw4OfejCbLUSDnWwcC7E0LDpPnCvAklFd7caeeHwq+ujw91MXyzDs81HfY2DAxeszH1jIdhSw6nbTQ8BD/a4JLOkXZLejsfGmPrMSW/Izp65aoKeelrc9kcCD55XIqlF0uHx+NgfA7v20eCoYvzck/wHokSlf+qx6qMAAAAASUVORK5CYII=" LAST_CHARSET="UTF-8">List of Bootstrap 3 CSS classes with description | Tomáš Janeček - osobní web</A>
		<DD>Every web developer should know how to properly code a responsive website. Bootstrap 3 is an ultimate framework that learns you how to think when coding responsive websites and makes their creation much easier and faster. [...] 
		<DT><A HREF="http://www.getskeleton.com/" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">Skeleton: Beautiful Boilerplate for Responsive, Mobile-Friendly Development</A>
		<DT><A HREF="https://www.le.ac.uk/oerresources/bdra/html/index.htm" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">Introduction to HTML/XHTML - Table of Contents</A>
		<DT><A HREF="http://camstudio.org/" ADD_DATE="1475883181" LAST_MODIFIED="1484637764" LAST_CHARSET="windows-1252">CamStudio - Free Screen Recording Software</A>
		<DT><A HREF="https://developer.mozilla.org/en-US/docs/Web/CSS/calc" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">calc - CSS | MDN</A>
		<DT><A HREF="http://phrogz.net/css/vertical-align/" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">Understanding vertical-align, or &quot;How (Not) To Vertically Center Content&quot;</A>
		<DT><A HREF="http://www.w3schools.com/cssref/tryit.asp?filename=trycss3_box-sizing" ADD_DATE="1475883181" LAST_MODIFIED="1484637764" LAST_CHARSET="windows-1252">Tryit Editor v2.5</A>
		<DT><A HREF="https://www.youtube.com/watch?v=pPITBtE45bg" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">(Validation image) how to use recaptcha google api in php - YouTube</A>
		<DT><A HREF="http://jsbin.com/izoca/2/edit?html,output" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">JS Bin - Collaborative JavaScript Debugging</A>
		<DT><A HREF="http://stackoverflow.com/questions/19145504/style-a-checkbox-in-firefox-remove-check-and-border" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">html - Style a checkbox in firefox — remove check and border - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/23660519/remove-check-box-blue-border" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">html - Remove Check Box blue border - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/12368910/html-display-image-after-selecting-filename" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">file upload - HTML - Display image after selecting filename - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/609273/convert-an-image-to-grayscale-in-html-css" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">Convert an image to grayscale in HTML/CSS - Stack Overflow</A>
		<DT><A HREF="http://www.w3schools.com/html/html_blocks.asp" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">HTML Block and Inline Elements</A>
		<DT><A HREF="http://stackoverflow.com/questions/21262708/nested-accordions-within-tabs" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">javascript - Nested Accordions within tabs - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/2530/how-do-you-disable-browser-autocomplete-on-web-form-field-input-tag" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">html - How do you disable browser Autocomplete on web form field / input tag? - Stack Overflow</A>
		<DT><A HREF="http://www.ascii.cl/htmlcodes.htm" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">HTML Codes - Table of ascii characters and symbols</A>
		<DT><A HREF="http://stackoverflow.com/questions/1575141/make-div-100-height-of-browser-window" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">html - Make div 100% height of browser window - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/2699284/make-page-to-tell-browser-not-to-cache-preserve-input-values" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">html - Make page to tell browser not to cache/preserve input values - Stack Overflow</A>
		<DT><A HREF="https://www.youtube.com/watch?v=23zoeTvJxOI" ADD_DATE="1481350145" LAST_MODIFIED="1484637764">HTML5 Interview Questions and Answers : 10 commonly asked questions - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=O87VaZAN7As" ADD_DATE="1479117479" LAST_MODIFIED="1484637764" LAST_CHARSET="UTF-8">▶ XML Tutorial for beginners - Learn XML coding tutorial - How to create XML file - Part 1 - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=R9InivSbbO8" ADD_DATE="1481350145" LAST_MODIFIED="1484637764">Top 25 HTML 5 Interview Question And Answers For Freshers - YouTube</A>
		<DT><A HREF="http://www.w3resource.com/html/HTML-block-level-and-inline-elements.php" ADD_DATE="1484626847">HTML block level, inline elements - HTML tutorials - w3resource</A>
		<DT><A HREF="https://www.youtube.com/watch?v=R9InivSbbO8" ADD_DATE="1481350145" LAST_MODIFIED="1484637764">Top 25 HTML 5 Interview Question And Answers For Freshers - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=23zoeTvJxOI" ADD_DATE="1481350145" LAST_MODIFIED="1484637764">HTML5 Interview Questions and Answers : 10 commonly asked questions - YouTube</A>
	</DL><p>
	
	<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1484714659">HTML XHTML</H3>
	<DL><p>
		<DT><A HREF="https://www.youtube.com/watch?v=Q9Jcr55ptno" ADD_DATE="1475883181">Difference between HTML and XHTML - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=tB5ozZJbD34" ADD_DATE="1484625415">What&#39;s the Difference Between xhtml and html - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=lkCGx3pJwfc" ADD_DATE="1475883181" LAST_MODIFIED="1484637764">HTML 5 Absolute Beginners Tutorial –Difference between HTML and XHTML - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=NBCoLBVqm7A" ADD_DATE="1479117479" LAST_MODIFIED="1484637764">Introduction to XML (Extensible Markup Language) Urdu/Hindi - YouTube</A>
		<DT><A HREF="https://www.youtube.com/watch?v=XYY5gjbiEtQ" ADD_DATE="1479117479" LAST_MODIFIED="1484637764">What is Html and XHTML -- English - YouTube</A>
	</DL><p>
	
<div>