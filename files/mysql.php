<?php $topic = 'Mysql'; ?>
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1.Index and there contents</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse inds clearfix">
			<div class="panel-body" id="topic">
				<div class="col-left col-md-2">
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
				<div class="col-right index_result col-md-10">
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

					// echo 'Notest
					// Root Eg:- PHP,OOP, Abstract class...

					// 1).Notes in Description
					// 2).Date & Time
					// 3).Important links if any
					// ';

					// echo $mysql_notes;
					$mysql_notes =  mysql_notes();

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

					echo '<h2><u>' . $topic . ' Index</u></h2>';
					$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$topic."'");
						while($rows_sub = $select->fetch_array()){
							$sub_topic = ucfirst($rows_sub['sub_topic']);
							echo '<h4 style="color:#006400;">' . $sub_topic . '</h4>';
							$select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
							while($rows_sub_sub = $select_sub->fetch_array()){
								$sub_sub_topic = ucfirst($rows_sub_sub['sub_sub_topic']);
								echo '<h5 style="color:#0000FF;">' . '==> ' . $sub_sub_topic . '</h5>';
							}
						}

					/*echo $topic . ' Index';
					$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$topic."'");
						while($rows_sub = $select->fetch_array()){
							$sub_topic = strtoupper($rows_sub['sub_topic']);
							echo '<h4 style="color:green;">' . $sub_topic . '</h4>';
							$select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
							while($rows_sub_sub = $select_sub->fetch_array()){
								$sub_sub_topic = strtoupper($rows_sub_sub['sub_sub_topic']);
								echo '<h5 style="color:pink;">' . $sub_sub_topic . '</h5>';
							}
						}/**/
				?>
<!-- 				<h5>Php Index</h5>
				Base url:-
				<a target="_blank"  href="http://www.phpforkids.com/php/php-tutorial-table-of-contents.php">According this topic we are i am going</a>
				Base Core PHP url:-
				<a target="_blank"  href="http://www.sssit.org/php-syllabus">Core PHP</a> -->
				
			</div>
		</div>
	</div>
</div>

<?php

function mysql_notes() {
echo '
	<pre>	
	Job interview:-
		<a href="https://www.youtube.com/watch?v=iMS16PUKwCs">job</a>

<h3>Primary Key:-</h3>
	One of the candidate keys which has No NULL values.
	NULL:-	Unknown.
	1).No Null values are allowed.
	2).For a given Table, ATMOST ONE PK is allowed.

<h3>Alternate Keys:-</h3>
	All the CK except PK is are known as AK
	1).Null values are allowed
	2).More than one AK is also allowed
	
<h3>Super key:-</h3>
	Super key are the candidate key  + zero or more then zero attributes
	
<h3>Joins:-</h3>
Joins (Inner Joins, Left Joins, Right Joins, Full Outer Joins):-
	<h3>Inner joins:</h3>
		SELECT * FROM table1
			inner join table2
			on table1.countryID = table2.countryID
	
	<h3>Left Joins:</h3>
		SELECT * FROM table1
			left join table2
			on table1.countryID = table2.countryID

	<h3>Right Joins:</h3>
		SELECT * FROM table1
			right join table2
			on table1.countryID = table2.countryID

	<h3>Full Outer Joins:</h3>
		SELECT * FROM table1
			full outer join table2
			on table1.countryID = table2.countryID
			
<h3>tblCountry:-</h3>
	CountryID	CountryName
	1			India
	2			Nepal
	4			Srilanka

<h3>tblState:-</h3>
	StateID	CountryID		StateName		
	1		1				Maharastra
	2		1				Punjab
	3		2				Kathmandu
	4		Null			california

<h3>Inner Join</h3>		// Display only matching records
		SELECT * FROM tblCountry 
			inner join tblState 
			on tblCountry.CountryID = tblState.CountryID

<h3>Left Join</h3>		// Display only all records from "tblCountry=>Left table" but it will display only matching records "tblState=>Right table"
		SELECT * FROM tblCountry
			left join tblState
			on tblCountry.CountryID = tblCountry.CountryID

<h3>Right Join</h3>		// Display only matching records from "tblCountry=>Left table" & also display all records "tblState=>Right table"
		SELECT * FROM tblCountry
			right join tblState
			on tblCountry.CountryID = tblCountry.CountryID
			
<h3>Full Outer Join</h3>		// Comdination of (Inner Join+Left Join+Right Join)
	// Display only matching records from "tblCountry=>Left table" & also display matching records "tblState=>Right table"
	// And also displays all non matching Records form both the tables
			
		SELECT * FROM tblCountry
			full outer join tblState
			on tblCountry.CountryID = tblState.CountryID
	</pre>';

}
			
?>