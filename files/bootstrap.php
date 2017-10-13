<?php $topic = 'Bootstrap'; ?>
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

            <DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1485091676">Bootstrap</H3>
            <DL><p>
                <DT><A HREF="file:///C:/Users/scwebstpad/Downloads/bootstrap-3.3.5/bootstrap-3.3.5/docs/examples/grid/index.html" ADD_DATE="1475883182" LAST_CHARSET="UTF-8">Grid Template for Bootstrap</A>
                <DT><A HREF="https://www.youtube.com/watch?v=qIULMnbH2-o&index=1&list=PL6gx4Cwl9DGBPw1sFodruZUPheWVKchlM" ADD_DATE="1484284019">Bootstrap Tutorial for Beginners - 1 - Introduction - YouTube</A>
                <DT><A HREF="http://tomasjanecek.cz/en/clanky/post/list-of-bootstrap-3-css-classes-with-description" ADD_DATE="1475883182" LAST_MODIFIED="1484293724" ICON_URI="http://icon.xmarks.com/ix1rvsed-10" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADGklEQVQ4jYXSb2jUBRzH8c9aYK0W2ubc3W237W63224375ze7f/Nu226Hbe5nc3duU23yBJWMppKkRQUgfNJESXIDHuiiRiLshKSCgryQQ96FqUh9ECCgVvdn2335/fuiYog2Bu+T198v/DV0r9JsvkcFe4OMvkcWyrdPFWyaUKSSVKh/i/DMDAMg47de9hstnHr5hKr2QyJ1TUKN2yISNr8SOi1Y+9gGAYWh5cbv93m1xu3yOSyrGczpNbXjOXUKpK6JW2S9NhDQFVlE73tnTT6wuTzObJ3J9Q3RGmZHYv5AInUmrGcSBuS/JKekVRwH4iPDmGrqcVk9dAfGWH+9BlaB06y1bONOmcb167/Qjqzjqk8xnIqzdJKypDULOlpSQU68XMtlzMjzL85w1R0mBennycWHaazK8qVL67Q7G0lm8+yePVHEqtpVlJpPv/uL4qKiw1JTbI57cz/4OKNr8z0DRTS5W/F1xFg8lCcRkcPXs8YPt9eMrkcmXyOs4tfU2oxcyeZZGkliV4+vwVzSSk11fVUWapZWIlw+vdePjq7A39PkL2TMb5c/ISjr5/C6+zjTuIf9kUjfPzpVZZTKeR3O/HtaMBqstFaZyU20E1wu49iayET4+1UVz3BUKQPu9PDpUvnCUeitLX1kVxbI7GaRjMXSomFRwjHD3L8WpCpyTjPDdZhLjdhqiviyFs2Pvg7yMJ6P5P7o9hqG4hNDNO6vZnOwE40NzuzvHFjCQuLJxg9WY6l8llcDSGa3Q3M/mTlvWQ/bksjkZ3NvP9ngFCXi+n9MYa623hp9hiSZJc0KOndwcFRo6qiAktZOS7PVnz+Oo5fdzD3vY1wlxd/ewW9IRO1VieNLhdhr4N771AoqVRSp6QjPd2+m8FAF4F4BUe/tXMwHuCVyw4OfejCbLUSDnWwcC7E0LDpPnCvAklFd7caeeHwq+ujw91MXyzDs81HfY2DAxeszH1jIdhSw6nbTQ8BD/a4JLOkXZLejsfGmPrMSW/Izp65aoKeelrc9kcCD55XIqlF0uHx+NgfA7v20eCoYvzck/wHokSlf+qx6qMAAAAASUVORK5CYII=" LAST_CHARSET="UTF-8">List of Bootstrap 3 CSS classes with description | Tomáš Janeček - osobní web</A>
                <DD>Every web developer should know how to properly code a responsive website. Bootstrap 3 is an ultimate framework that learns you how to think when coding responsive websites and makes their creation much easier and faster. [...] 
                <DT><A HREF="http://getbootstrap.com/components/" ADD_DATE="1479117480" LAST_MODIFIED="1484293724" ICON_URI="http://icon.xmarks.com/ix0osyrz-fz" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACR0lEQVQ4jX3OSU9TARiF4fsf+kOk84ASTMRO0BYoBtCFW6QjLZQCxQIbVMToCnZGadTEJroxkaUG1KAYw6AUDCBlqNIgtYS7oHldXG6xxbB4duc73xFy6ZxiNPYkea1mQGy52E+J6n5aqmM0l2m9FBdH+hLJXDqnEEb6EskrF3ppOl+uB7essgd3ZRR3ZZRGmSnKnehEUmiujomnw/876KbR1E1DUYSmqh5RKA+/mfzM2spWieXFDV49n+K6bZB6Y4R6Y5fE0IXQaCptTy38ACD7a5+N1Qw7m1mOjgoAfJr+isvQWeTUhxEaTBEajJJ6Y6RY8GDoGS5DFy5DJ7d6HgGw/zuPUx/GqQ/j0Idw6EMI8hw5LBfcH3paDI/EJgCYn/2OQxeiTtch0XYguAydOI/nOPVhUgvr0re9PJmtLLuZPQqFAgf5Qzwtt6nVBovsmgCCPMWhkyzNSwVzsyu8fvGOyZfvSS1Kq9LrP3FXRbBr/Ng0fmxqP8LJHKlVLrg3kMCuCWDXBKjTBdlO7wIwHH2ITe3DqvZhVXkRarVB7NpAMbw0vwbAaDyBTe3DpvbhNHaQ2c4CcPfmYywqLxaVB4vKg2A/niLx8e24YHV5k5mpBT5OL7KzJR0f5A+5au7FrGwvEqQp0hyrysuXmRQH+cMS+3t/+PB2jvbWYczKdi5X3CgS7Fq/aFF5sCg9mJWekvbysKymoo2aijYsKo8oDIbGkyfhMw7OnRYPjiWFdDqniAfHk1a1Vzwr/C+LyiPGg2PJdDqn+Avv8mz0O1/EtQAAAABJRU5ErkJggg==" LAST_CHARSET="UTF-8">Components · Bootstrap</A>
                <DD>Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.
                <DT><A HREF="http://getbootstrap.com/css/" ADD_DATE="1479117480" LAST_MODIFIED="1484293724" ICON_URI="http://icon.xmarks.com/ix0osyrz-g0" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACR0lEQVQ4jX3OSU9TARiF4fsf+kOk84ASTMRO0BYoBtCFW6QjLZQCxQIbVMToCnZGadTEJroxkaUG1KAYw6AUDCBlqNIgtYS7oHldXG6xxbB4duc73xFy6ZxiNPYkea1mQGy52E+J6n5aqmM0l2m9FBdH+hLJXDqnEEb6EskrF3ppOl+uB7essgd3ZRR3ZZRGmSnKnehEUmiujomnw/876KbR1E1DUYSmqh5RKA+/mfzM2spWieXFDV49n+K6bZB6Y4R6Y5fE0IXQaCptTy38ACD7a5+N1Qw7m1mOjgoAfJr+isvQWeTUhxEaTBEajJJ6Y6RY8GDoGS5DFy5DJ7d6HgGw/zuPUx/GqQ/j0Idw6EMI8hw5LBfcH3paDI/EJgCYn/2OQxeiTtch0XYguAydOI/nOPVhUgvr0re9PJmtLLuZPQqFAgf5Qzwtt6nVBovsmgCCPMWhkyzNSwVzsyu8fvGOyZfvSS1Kq9LrP3FXRbBr/Ng0fmxqP8LJHKlVLrg3kMCuCWDXBKjTBdlO7wIwHH2ITe3DqvZhVXkRarVB7NpAMbw0vwbAaDyBTe3DpvbhNHaQ2c4CcPfmYywqLxaVB4vKg2A/niLx8e24YHV5k5mpBT5OL7KzJR0f5A+5au7FrGwvEqQp0hyrysuXmRQH+cMS+3t/+PB2jvbWYczKdi5X3CgS7Fq/aFF5sCg9mJWekvbysKymoo2aijYsKo8oDIbGkyfhMw7OnRYPjiWFdDqniAfHk1a1Vzwr/C+LyiPGg2PJdDqn+Avv8mz0O1/EtQAAAABJRU5ErkJggg==" LAST_CHARSET="UTF-8">CSS · Bootstrap</A>
            </DL><p>

</div>
