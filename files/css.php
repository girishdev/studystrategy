<?php $topic = 'Css'; ?>
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

	<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1484545333">Css</H3>
	<DL><p>
		<DT><A HREF="http://stackoverflow.com/questions/2701192/what-characters-can-be-used-for-up-down-triangle-arrow-without-stem-for-displa" ADD_DATE="1475883181">unicode - What characters can be used for up/down triangle (arrow without stem) for display in HTML? - Stack Overflow</A>
		<DT><A HREF="https://www.w3.org/TR/2009/CR-css3-background-20091217/" ADD_DATE="1475883181">CSS Backgrounds and Borders Module Level 3</A>
		<DT><A HREF="http://www.senktec.com/2014/01/using-css-display-table-cell-for-columns/" ADD_DATE="1475883181" LAST_MODIFIED="1482499574" LAST_CHARSET="UTF-8">Using CSS &quot;display: table-cell&quot; for columns - Senktec</A>
		<DT><A HREF="http://vanseodesign.com/css/vertical-centering/" ADD_DATE="1475883182">6 Methods For Vertical Centering With CSS - Vanseo Design</A>
		<DT><A HREF="http://learnlayout.com/flexbox.html" ADD_DATE="1475883182">CSS - flexbox</A>
		<DT><A HREF="http://www.w3schools.com/cssref/pr_text_text-indent.asp" ADD_DATE="1475883182">CSS text-indent property</A>
		<DT><A HREF="http://stackoverflow.com/questions/18649106/div-vertical-align-middle-css" ADD_DATE="1475883182">html - div vertical align middle css - Stack Overflow</A>
		<DT><A HREF="https://www.sitepoint.com/jquery-alert-box/" ADD_DATE="1484493099">jQuery alert box yes or no</A>
		<DT><A HREF="http://stackoverflow.com/questions/4357315/how-to-vertically-center-a-span-inside-a-div" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">html - How to vertically center a &lt;span&gt; inside a div? - Stack Overflow</A>
		<DT><A HREF="http://stackoverflow.com/questions/4889601/css-position-fixed-into-ipad-iphone" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">CSS &quot;position: fixed;&quot; into iPad/iPhone? - Stack Overflow</A>
		<DT><A HREF="https://css-tricks.com/almanac/properties/l/letter-spacing/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">letter-spacing | CSS-Tricks</A>
		<DT><A HREF="https://developer.mozilla.org/en/docs/Web/CSS/letter-spacing" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">letter-spacing - CSS | MDN</A>
		<DT><A HREF="http://cssmenumaker.com/menu/slabbed-accordion-menu" ADD_DATE="1475883182" LAST_MODIFIED="1484500235" LAST_CHARSET="UTF-8">Slabbed Accordion Menu | CSS MenuMaker</A>
		<DD>If you got a crowded sidebar then this is the menu for you. Minimal jQuery is used to achieve the accordion functionality.
		<DT><A HREF="http://html-generator.weebly.com/css-loading-animation-generator.html" ADD_DATE="1475883181" LAST_MODIFIED="1484500235">CSS Loading animation Generator</A>
		<DT><A HREF="http://css3pie.com/" ADD_DATE="1475883181" LAST_MODIFIED="1484500235">CSS3 PIE: CSS3 decorations for IE</A>
		<DT><A HREF="https://www.youtube.com/watch?v=Y1Zq-63VzCg" ADD_DATE="1475883181" LAST_MODIFIED="1484500235">CSS Vertical Align - YouTube</A>
		<DT><A HREF="http://www.impressivewebs.com/difference-block-inline-css/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">The Difference Between “Block” and “Inline” | Impressive Webs</A>
		<DT><A HREF="http://tympanus.net/Tutorials/SlideDownBoxMenu/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">Slide Down Box Menu with jQuery and CSS3</A>
		<DT><A HREF="http://webdesignfromscratch.com/html-css/css-block-and-inline/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">CSS Block vs Inline - CSS Made Simple</A>
		<DT><A HREF="http://stackoverflow.com/questions/8392211/html-span-align-center-not-working" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">css - HTML span align center not working? - Stack Overflow</A>
		<DT><A HREF="https://www.w3.org/community/webed/wiki/Optimizing_content_for_different_browsers:_the_RIGHT_way" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">Optimizing content for different browsers: the RIGHT way - Web Education Community Group</A>
		<DT><A HREF="http://www.w3schools.com/cssref/css3_pr_filter.asp" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">CSS3 filter Property</A>
		<DT><A HREF="https://css-tricks.com/almanac/selectors/f/first-letter/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">::first-letter | CSS-Tricks</A>
		<DT><A HREF="https://css-tricks.com/equal-height-blocks-in-rows/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">Equal Height Blocks in Rows | CSS-Tricks</A>
		<DT><A HREF="http://stackoverflow.com/questions/8865458/how-to-align-text-vertically-center-in-div-with-css" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">html - How to align text vertically center in div with CSS? - Stack Overflow</A>
		<DT><A HREF="http://www.w3schools.com/cssref/pr_text_letter-spacing.asp" ADD_DATE="1475883182" LAST_MODIFIED="1484500235">CSS letter-spacing property</A>
		<DT><A HREF="http://css3developer.com/" ADD_DATE="1475883182" LAST_MODIFIED="1484500235" LAST_CHARSET="UTF-8">CSSGenerator - CSS3 Generator - by CSS3 Developer</A>
		<DD>CSS Generator, Border Radius, Box Shadow, Inset Box Shadow, Text shadow, Opacity, RGBA, CSS Gradient, CSS Box Sizing, Box Resize, Transition, CSS Animation.
		<DT><A HREF="http://www.w3schools.com/cssref/sel_nth-child.asp" ADD_DATE="1479117480" LAST_MODIFIED="1484500235" LAST_CHARSET="UTF-8">CSS3 :nth-child() Selector</A>
		<DD>Free HTML CSS JavaScript DOM jQuery XML AJAX Angular ASP .NET PHP SQL tutorials, references, web building examples
		<DT><A HREF="http://css3developer.com/" ADD_DATE="1475883181" LAST_MODIFIED="1484500235" LAST_CHARSET="UTF-8">CSSGenerator - CSS3 Generator - by CSS3 Developer</A>
		<DD>CSS Generator, Border Radius, Box Shadow, Inset Box Shadow, Text shadow, Opacity, RGBA, CSS Gradient, CSS Box Sizing, Box Resize, Transition, CSS Animation.
		<DT><A HREF="http://www.w3schools.com/cssref/sel_nth-child.asp" ADD_DATE="1475883181" LAST_MODIFIED="1484500235" LAST_CHARSET="UTF-8">CSS3 :nth-child() Selector</A>
		<DD>Free HTML CSS JavaScript DOM jQuery XML AJAX Angular ASP .NET PHP SQL tutorials, references, web building examples
		<DT><A HREF="http://www.senktec.com/2014/01/using-css-display-table-cell-for-columns/" ADD_DATE="1479117480" LAST_MODIFIED="1484500235" LAST_CHARSET="UTF-8">Using CSS &quot;display: table-cell&quot; for columns - Senktec</A>
	</DL><p>

</div>