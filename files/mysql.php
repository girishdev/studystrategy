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
                            echo $x.').<span>'.ucwords($rows->sub_topic) .'</span><br />';
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
                    <div class="col-left col-md-12">
                        <?php
                        $sub_topic = "$topic quiz";
                        $select = $db->query("SELECT * FROM study_list WHERE main_topic='$topic' AND sub_topic='$sub_topic'");
                        $num_rows = $select->num_rows;
                        $x = 1;
                        while($rows = $select->fetch_object()){ ?>
                            <a href="<?php echo $rows->url; ?>" target="_blank"><?php echo "$x.) ".$rows->description ?></a><br />
                            <?php $x++;
                        }
                        ?>
                    </div>
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
                    <div class="col-left col-md-12">
                        <?php
                        $sub_topic = "$topic Important";
                        $select = $db->query("SELECT * FROM study_list WHERE main_topic='$topic' AND sub_topic='$sub_topic'");
                        $num_rows = $select->num_rows;
                        $x = 1;
                        while($rows = $select->fetch_object()){ ?>
                            <a href="<?php echo $rows->url; ?>" target="_blank"><?php echo "$x.) ".$rows->description ?></a><br />
                            <?php $x++;
                        }
                        ?>
                    </div>
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
                    <form method="POST">
                        <div class="form-group">
                            <label for="notestopic">Notes Topic:</label>
                            <input type="text" class="form-control" id="notestopic" name="notestopic" placeholder="Notes Topic">
                        </div>
                        <div class="form-group">
                            <label for="notesurl">Notes Url:</label>
                            <input type="text" class="form-control" id="notesurl" name="notesurl" placeholder="Notes Url">
                        </div>
                        <div class="form-group">
                            <label for="currenttime">Current Time:</label>
                            <input type="text" class="form-control" id="currenttime" name="currenttime" placeholder="Current Time">
                        </div>
                        <div class="form-textarea">
                            <label class="notesdescription">Notes Description:</label>
                            <textarea id="notesdescription" name="notesdescription"></textarea>
                        </div>

                        <button type="submit" name="form_submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php

                    if(isset($_POST['form_submit'])){
                        echo $_POST['exampleInputEmail1'];echo "<br />";
                        echo $_POST['exampleInputPassword1'];echo "<br />";
                        echo $_POST['user_message'];echo "<br />";

                        echo $notes_about = trim($topic); // php
                        echo '<h1>TTTT TTT T</h1>';
                        $notes_topic = trim($_POST['notes_topic']);
                        $notes_url = trim($_POST['notes_url']);
                        $notes_description = trim($_POST['notes_description']);

                        // $insert = $db->query("INSERT INTO study_list (main_topic,sub_topic,sub_sub_topic,description,url) VALUES
                        // 			('{$main_topic}','{$sub_topic}','{$sub_sub_topic}','{$description}','{$url}')");
                        // if($insert == true){
                        // 	echo '<div class="alert alert-success">Successfully Notes added 1, Thankyou </div>';
                        // } else {
                        // 	echo "<div class='alert alert-danger'>Insert unsuccessful <b>$db->error</b></div>";
                        // }

                        // exit();

                        // Notes:-
                        // notes_about
                        // notes_topic
                        // notes_url
                        // notes_description
                        // current_time
                        // current_date
                    }

                    // $php_notes1 = php_notes1();
                    // $php_notes2 = php_notes2();

                    /*echo 'Notest
                    Root Eg:- PHP,OOP, Abstract class...
                    1).Notes in Description
                    2).Date & Time
                    3).Important links if any
                    ';/**/

                    ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">6. Upload your <?php echo $topic; ?> Projects</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="projectname">Project Name:</label>
                            <input type="text" class="form-control" id="projectname" name="projectname" placeholder="Project Name">
                        </div>
                        <div class="form-group">
                            <label for="projectcreateddate">Project Created Date:</label>
                            <input type="text" class="form-control" id="projectcreateddate" name="projectcreateddate" placeholder="Project Created Date">
                        </div>
                        <div class="form-group">
                            <label for="projectcreatedforpurpose">Project Created For/Purpose:</label>
                            <input type="text" class="form-control" id="projectcreatedforpurpose" name="projectcreatedforpurpose" placeholder="Project Created For/Purpose">
                        </div>
                        <div class="form-group">
                            <label for="projectrequirements">Project Requirements:</label>
                            <input type="text" class="form-control" id="projectrequirements" name="projectrequirements" placeholder="Project Requirements">
                        </div>
                        <div class="form-group">
                            <label for="projectrelativeurl">Project Relative URL:</label>
                            <input type="text" class="form-control" id="projectrelativeurl" name="projectrelativeurl" placeholder="Project Relative URL">
                        </div>
                        <div class="form-textarea">
                            <label class="projectdiscription">Project Discription:</label>
                            <textarea id="projectdiscription" name="projectdiscription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="projectfileupload">Project File Upload:</label>
                            <input type="file" class="form-control-file" id="projectfileupload">
                        </div>
                        <div class="form-group">
                            <label for="projectfileuploadimage">Project File/Image Upload Button:</label>
                            <input type="file" class="form-control-file" id="projectfileuploadimage">
                        </div>

                        <button type="submit" name="form_submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php

                    if(isset($_POST['form_submit'])){

                        echo $_POST['exampleInputEmail1'];echo "<br />";
                        echo $_POST['exampleInputPassword1'];echo "<br />";
                        echo $_POST['user_message'];echo "<br />";

                        echo $notes_about = trim($topic); // php
                        $notes_topic = trim($_POST['notes_topic']);
                        $notes_url = trim($_POST['notes_url']);
                        $notes_description = trim($_POST['notes_description']);

                        // Project Name
                        // Project Created Date
                        // Project Created For/Purpose
                        // Project Requirements
                        // If Necessary URl/Relative URL
                        // Project Discription(all about)

                        // Project File Upload Button
                        // Project File/Image Upload Button

                    }

                    ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">7. <?php echo $topic; ?> Index</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php

                    $roman_letters = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII',
                        'XIX','XX','XXI','XXII','XXIII','XXIV','XXV','XXVI','XXVII','XXVIII','XXIX','XXX','XXXI','XXXII','XXXIII','XXXIV','XXXV','XXXVI','XXXVII',
                        'XXXVIII','XXXIX','XL','XLI','XLII','XLIII','XLIV','XLV','XLVI','XLVII','XLVIII','XLIX','L','LI','LII','LIII','LIV','LV','LVI','LVII','LVIII',
                        'LIX','LX','LXI','LXII','LXIII','LXIV','LXV','LXVI','LXVII','LXVIII','LXIX','LXX');
                    echo '<h2><u>' . $topic . ' Index</u></h2>';
                    $i = 1;
                    $select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$topic."'");
                    while($rows_sub = $select->fetch_array()){
                        $sub_topic = ucfirst($rows_sub['sub_topic']);
                        echo '<h4 style="color:#006400;"><u>'."$i. ".$sub_topic . '</u></h4>';
                        $j = 0;
                        $select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
                        while($rows_sub_sub = $select_sub->fetch_array()){
                            $sub_sub_topic = ucfirst($rows_sub_sub['sub_sub_topic']);
                            $select_sub_sub = $db->query("SELECT * FROM study_list WHERE sub_sub_topic='".$sub_sub_topic."'");
                            echo '<h5 style="color:#0000FF;">'." - $roman_letters[$j]). ".$sub_sub_topic . ' (' . $select_sub_sub->num_rows . ')' . '</h5>';
                            $j++;
                        }
                        $i++;
                    }

                    ?>
                </div>
            </div>
        </div>

    </div>

<?php
//$mysql_notes =  mysql_notes();
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