<!--
---------------------------
We have to know about FTP AND SSH TOOL-Filezilla, Putty..
---------------------------
Ping: How to Use It, and What It Does
	https://www.youtube.com/watch?v=5uq1qEYhbX0
	https://www.youtube.com/watch?v=NpzV9fDABMQ
	https://www.youtube.com/watch?v=7_LPdttKXPc
	https://www.youtube.com/watch?v=mpQZVYPuDGU
	https://www.youtube.com/watch?v=JCvPnwpWVUQ
	https://www.youtube.com/watch?v=72snZctFFtA
	https://www.youtube.com/watch?v=eiDcMY6YfEc
	https://www.youtube.com/watch?v=HOaIqQAeaik
	https://www.youtube.com/watch?v=8XNas3Nhh9k
	https://www.youtube.com/watch?v=Wu2A4fpFzgs
	https://www.youtube.com/watch?v=KFooN7Mu0IM
	https://www.youtube.com/watch?v=gJ5h4_0mllI
	https://www.youtube.com/watch?v=rROgWTfA5qE
	https://www.youtube.com/watch?v=s5q54lGnKvI
	https://www.youtube.com/watch?v=o-W_mDGX1bY
	
	
---------------------------

	Typo3:-
		http://schmidtsdorff.net/typo3-tutorials/typo3-installation/
		http://www.typo3forum.net/categories/typo3-hosting

---------------------------

***http://stackoverflow.com/questions/3737139/reference-what-does-this-symbol-mean-in-php?rq=1
***http://stackoverflow.com/questions/24367927/how-to-remove-extra-space-inside-textarea
	max_input_vars
Rest API

Google API

JavaScript	==>	http://www.w3schools.com/js/default.asp

XML			==>	http://www.w3schools.com/xml/default.asp

JSON		==>	http://www.w3schools.com/js/js_json_intro.asp

REST

SOAP

cPanel:-
	https://www.hosting24.com/members/index.php
	https://help.hosting24.com/384716-Errors--Problems
	https://www.pickaweb.co.uk/web-hosting/cpanel-hosting/
	
Google analytics
	for tracking website visitors

-->

<?php $topic = 'php'; ?>

<?php

?>

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
			</div>S
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
                                echo '<h5 style="color:#0000FF;">'." - $roman_letters[$j]). ".$sub_sub_topic . ' (' . $select_sub_sub->num_rows . ')' .'</h5>';
								$j++;
							}
							$i++;
						}

function php_notes1(){						
	echo '<pre>
				Base url:-
				<a target="_blank"  href="http://www.phpforkids.com/php/php-tutorial-table-of-contents.php">According this topic we are i am going</a>
				Base Core PHP url:-
				<a target="_blank"  href="http://www.sssit.org/php-syllabus">Core PHP</a>

				<h5>Chapter 1 - Introduction to PHP</h5>
					What is PHP?
					PHP Requirements
					The history of PHP
					Why choose PHP?
					Installation overview
					How to Create A PHP File

				<h5>Chapter 2 - PHP Syntax<h5>
					Opening/Closing PHP Tags
					PHP Instruction Termination
					PHP Comments
					PHP Whitespace

				<h5>Chapter 3 - PHP Basics</h5>
					PHP Variables
					Type juggling and casting
					The Echo Statement
					PHP Strings
					PHP Operators

				<h5>Chapter 4 - PHP Conditions & Loops</h5>
					If
					Else
					Elseif
					Switch
					While
					Do-While
					For
					Breaking Out of Loops
					Continue
					Break

				<h5>Chapter 5 - PHP Arrays</h5>
					What is a PHP array?
					Creating An Array
					Array Functions
					Array Loops (Foreach)

				<h5>Chapter 6 - PHP Functions<h5>	Full added
					PHP Math Functions
						http://www.w3schools.com/php/php_ref_math.asp
						http://www.javatpoint.com/php-math
					PHP String Functions
					PHP Variable Functions
					PHP Date & Time Functions
						http://phppot.com/category/php/php-date-time/
						http://www.tutorialrepublic.com/php-tutorial/php-date-and-time.php
						http://www.w3schools.com/php/php_date.asp
					PHP Includes & Requires
					PHP Mail Function
						http://www.tutorialrepublic.com/php-tutorial/php-send-email.php
					PHP Regular Expressions
					User-Defined PHP Functions

				<h5>Chapter 7 - PHP Form Handling & Browser Interaction && Web features</h5>	All url added index is almost same
					Predefined Variables & Superglobals
					Getting Form Field Data(GET)
					Posting Form Field Data(POST)
					Getting & Posting Checkbox & Radio Button Results
					PHP File Uploads
						**http://www.tutorialspoint.com/php/php_function_basename.htm
						**https://www.quora.com/How-do-I-upload-a-image-in-backend-and-display-it-in-front-end-using-php
						**https://www.startutorial.com/articles/view/php_file_upload_tutorial_part_1
					PHP Url Functions
					PHP Include Files
					PHP Form Validation
						http://www.tutorialrepublic.com/php-tutorial/php-form-validation.php
					PHP HTTP headers
					Cookies Vs. Sessions
					PHP Cookies
					PHP Sessions
					PHP Caching
						http://www.hackingwithphp.com/18/5/0/caching-php
					PHP Compression
					HTTP Authentication
						https://www.youtube.com/watch?v=U4uLAqEFh3c
						http://www.hackingwithphp.com/15/4/3/authentication-over-http
						http://php.net/manual/en/features.http-auth.php
						http://www.techflirt.com/http-basic-authentication-php
					HTTP status coades
						http://www.restapitutorial.com/httpstatuscodes.html
						https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
						http://www.tutorialspoint.com/http/http_status_codes.htm
						http://www.w3schools.com/tags/ref_httpmessages.asp

				<h5>Chapter 8 - PHP File && Filesystem Functions && Input Output</h5>	All url added index is almost same
					Opening & Closing Files
					Reading Files
					Writing to Files
					Deleting Files
					Filesystem Functions
						http://phppot.com/category/php/files-and-directories/
						http://www.tutorialrepublic.com/php-tutorial/php-file-system.php
						http://www.javatpoint.com/php-file
						http://www.phpforkids.com/php/php-tutorial-table-of-contents.php

				<h5>Chapter 9 -	Oop\'s</h5>
					http://www.hackingwithphp.com/6/0/0/objects
					http://php.net/manual/en/language.oop5.magic.php		{Classes and Objects}
					The Basics
					Properties
						<1>.Classes/Object Functions
							http://www.tutorialspoint.com/php/php_class_object_functions.htm
							http://www.nusphere.com/kb/phpmanual/function.class-exists.htm?
					Class Constants
					Autoloading Classes
					Constructors and Destructors
					Visibility
					Object Inheritance
					Scope Resolution Operator (::)
					Static Keyword
					Class Abstraction
						http://www.sunilb.com/php/php5-tutorials-abstract-class-and-interface
						http://www.xpertdeveloper.com/2014/07/abstract-vs-interface/
					Object Interfaces
						http://www.xpertdeveloper.com/2014/07/abstract-vs-interface/
					Traits
					Anonymous classes
						http://php.net/manual/en/language.oop5.anonymous.php
					Overloading
						http://phppot.com/php/overloading-in-php/
						https://www.youtube.com/watch?v=89cl-snipao
						https://www.youtube.com/watch?v=5tcIUn6nbVE
					Object Iteration
						http://php.net/manual/en/language.oop5.iterations.php
					Magic Methods
						http://phppot.com/php/php-magic-methods/
						https://www.youtube.com/watch?v=UwygHuVrVmM
						https://www.youtube.com/watch?v=QxBoRSxtapY&list=PLCvBIV4j7b7fkBZPhLObxeI5LwkVpYTHK		{php magic method}
					Final Keyword
						http://www.xpertdeveloper.com/2011/12/php-final-keyword/
					Object Cloning
						http://www.xpertdeveloper.com/2011/11/object-cloning-in-php/
						http://www.xpertdeveloper.com/2012/01/reason-to-clone-objects-in-php/
					Comparing Objects
					Type Hinting
						*http://www.xpertdeveloper.com/2011/11/type-hinting-php/
						http://www.xpertdeveloper.com/2015/08/php7-type-hinting/
						http://www.techflirt.com/tutorials/oop-in-php/php-type-hinting.html
					Late Static Bindings
					Objects and references
					Object Serialization
					OOP Changelog

					(http://us.php.net)
					Classes/Object Functions
						http://us.php.net/manual/en/function.method-exists.php

				--------------------------------------------->>>>>
					PHP Exception Explained
						http://www.xpertdeveloper.com/2013/05/php-exception/
					PHP Error Handling
						http://www.xpertdeveloper.com/2011/10/php-error-handling/
					Error handling methods in PDO
						http://www.xpertdeveloper.com/2010/09/error-handling-methods-in-pdo/
					Setup 404 Handler Using .htaccess
						http://www.xpertdeveloper.com/2011/07/setup-404-handler-using-htaccess/
					Enable PHP Error logging using htaccess
						http://www.xpertdeveloper.com/2011/05/enable-php-error-logging-using-htaccess/
					Set Error Document with .htaccess
						http://www.xpertdeveloper.com/2011/09/set-errordocument-with-htaccess/
					Different function types in PHP
						http://www.xpertdeveloper.com/2010/09/different-function-types-in-php/
				--------------------------------------------->>>>>

				<h5>Chapter 10 - Error and Exception Handling</h5>(Added Links to DB:)
					Notes: Apress.PHPMySQL		{CHAPTER 8 Error and Exception Handling in page no.. 177}

				<h5>Chapter 11 - Debugging</h5>
					Common problems
					Warnings and errors
					Debugging and troubleshooting

				<h5>Chapter 12 - PHP Database Functions (MYSQL) && Database SQL</h5>(Added Links to DB:)
					Introduction to PHP\'s Built-In MYSQL Functions
					MYSQL Connect & Close
					Running MYSQL Queries In PHP
					Handling MYSQL Query Results In PHP
					MYSQL Security & Handling User Input

				<h5>Chapter 13 - Data Format & Type</h5>
					XML Basic
						***http://www.w3schools.com/xml/xml_soap.asp
						***http://www.javatpoint.com/xml-tutorial
					SimpleXml
						********http://www.w3schools.com/php/php_xml_simplexml_read.asp
					XML Extension
					Webservices Basics
						***https://en.wikipedia.org/wiki/Web_service
						***http://www.javatpoint.com/what-is-web-service
						***http://www.java4s.com/web-services/what-is-web-services-web-services-introduction/
					SOAP
						***http://www.w3schools.com/xml/xml_soap.asp
						***https://www.tutorialspoint.com/soap/what_is_soap.htm
						http://www.javatpoint.com/service-oriented-architecture
						***http://php.net/manual/en/soapclient.gettypes.php
						***http://www.ibm.com/developerworks/opensource/tutorials/os-php-webservice/
						***https://www.youtube.com/watch?v=rzSKa8qiiMI			{REST}
							**http://www.ibm.com/developerworks/opensource/tutorials/os-php-webservice/
							**http://www.javatpoint.com/service-oriented-architecture
							**https://www.sitepoint.com/web-services-with-php-and-soap-1/
							**http://terraservice.net/TerraService.asmx?WSDL
							**https://www.doublehops.com/2009/07/07/quick-tutorial-on-getting-started-with-soap-in-php/comment-page-1/
				(http://php.net/)
					SOAP
						http://php.net/manual/en/class.soapclient.php
					JSON
						json encoding
						json decoding
						***http://www.w3schools.com/js/js_json_intro.asp
						***http://www.javatpoint.com/json-tutorial
						***http://www.java4s.com/json/what-is-json-complete-introduction-to-json/
						***https://www.youtube.com/watch?v=2qJT09LAh64
						**http://www.dyn-web.com/tutorials/php-js/json/decode.php
						**https://www.youtube.com/watch?v=Ua8oqm_HBSY
				(http://php.net/)
						***http://php.net/manual/en/function.json-encode.php

					DateTime
						***https://www.youtube.com/watch?v=w5Acj5UnQ2U&list=PLfdtiltiRHWGEybSxvspeRykTLSQ9yUip
						***http://phppot.com/category/php/php-date-time/
						***http://www.tutorialspoint.com/php/php_date_and_time.htm
						***http://www.tutorialrepublic.com/php-tutorial/php-date-and-time.php
						***http://www.tutorialrepublic.com/php-reference/php-date-and-time-functions.php
				(http://php.net/)
					Date/Time Functions
						http://php.net/manual/en/function.strtotime.php
						http://php.net/manual/en/datetime.add.php
						http://php.net/manual/en/class.datetimezone.php

					DOMDocument
				(http://php.net/)
					DOMDocument
						http://php.net/manual/en/domdocument.savexml.php
						http://php.net/manual/en/domelement.setattribute.php
						http://php.net/manual/en/class.domdocument.php
						
						Xpath
						
						Webservices Basics
						
						SOAP
						
						REST

				<h5>Chapter 14 - Security</h5>
					Configuration
					Session Security
					Cross-Site Scripting
					Cross-Site Request Forgeries
					SQL Injection
					Remote Code Injection
					Email Injection
					Filter Input
					Escape Output

				<h5>Chapter 15 - Design and Theory</h5>
					IDesign Patterns
					Code Reuse
					OOP Theory

				<h5>Chapter 16 - Image Functions Using the GD Library</h5>
					GD Library Function Reference
					Creating An Image With the PHP GD Library
					How to Draw Lines On An Image
					How to Draw Shapes On An Image
					How to Add Text to An Image
					How to Add Image Filters & Effects
					How to Create Image Thumbnails

				<h5>Chapter 17 - Additional Reading</h5>
					************ Wants to learn ************
						PHP 5 Filters
					************ Wants to learn ************

					<h5>PHP Filters:-</h5>
						http://www.tutorialrepublic.com/php-reference/php-filters.php
						http://www.w3schools.com/php/php_filter.asp
						http://www.w3schools.com/php/php_filter_advanced.asp

					<h5>Streams / Stream Functions:-</h5>
						http://php.net/manual/en/function.stream-set-timeout.php
						http://in3.php.net/manual/en/function.stream-copy-to-stream.php
						http://in3.php.net/manual/en/ref.stream.php

					<h5>Filesystem Functions:-</h5>	-----------------Written in book
						http://php.net/manual/en/function.fseek.php
					
					<h5>Variable handling functions:-</h5>		-----------------Written in book
						http://in3.php.net/manual/en/function.gettype.php
					
					<h5>Misc. Functions:-</h5>		-----------------Written in book
						http://in3.php.net/manual/en/function.define.php
						
					<h5>Predefined Variables:-</h5>
						http://in3.php.net/language.variables.superglobals
						
					<h5>PHP Options/Info Functions:-</h5>
						http://php.net/manual/en/function.dl.php
						http://in3.php.net/manual/en/function.getenv.php
						
					<h5>Network Functions:-</h5>
						http://php.net/manual/en/function.setcookie.php		{header}
						http://in3.php.net/manual/en/function.gethostbyaddr.php
					
					<h5>Function Reference:-</h5>
						http://php.net/manual/en/refs.compression.php
						
					<h5>Zlib Functions:-</h5>
						http://php.net/manual/en/function.gzencode.php

					<h5>URL Functions:-</h5>
						http://in.php.net/manual/en/function.urlencode.php
						
					<h5>Session Functions:-</h5>
						http://php.net/manual/en/function.session-id.php
					
					<h5>Zip Functions:-</h5>
						http://php.net/manual/en/function.zip-entry-open.php
						
					<h5>Math Functions:-</h5>		-----------------Written in book
						http://php.net/manual/en/function.exp.php

					<i> . Mathematical Extensions
							http://php.net/manual/en/book.gmp.php

					***	http://php.net/manual-lookup.php?pattern=3XX&scope=quickref	***
					***	http://php.net/manual-lookup.php?pattern=zlib.output_compression&scope=quickref	***

					<h5>Paradox Functions:-</h5>
						http://php.net/manual/en/function.px-new.php
						
					<h5>Informix Functions:-</h5>
						http://php.net/manual/en/function.ifx-do.php

					<h5>Statistic Functions:-</h5>
						http://php.net/manual/en/function.stats-cdf-f.php
						
					<h5>Trader Functions:-</h5>
						http://php.net/manual/en/function.trader-cci.php
						
					<h5>Features:-</h5>
						http://php.net/manual/en/features.connection-handling.php
					
					<h5>PHP Manual:-</h5>
						http://php.net/manual/en/index.php
						<1> . PHP Manual
								http://php.net/manual/en/features.php

					<h5>Sequence:-</h5>
						http://php.net/manual/en/ds-sequence.reduce.php
							{Parent}	http://php.net/manual/en/book.ds.php
							
					<h5>Vector:-</h5>
						http://php.net/manual/en/ds-vector.clear.php

					<h5>POSIX Regex Functions:-</h5>
						http://php.net/manual/en/function.ereg-replace.php
						
					<h5>ODBC Functions:-</h5>
						http://php.net/manual/en/function.odbc-do.php
						
					<h5>Calendar Functions:-</h5>
						http://php.net/manual/en/function.cal-info.php

					<h5>Iterators:-</h5>
						http://bg.php.net/manual/en/class.recursivedirectoryiterator.php
						
					<h5>Directory Functions:-</h5>
						http://php.net/manual/en/function.scandir.php

					<h5>Function handling Functions:-</h5>
						http://us.php.net/manual/en/function.function-exists.php

					<h5>Supported Protocols and Wrappers:-</h5>
						http://php.net/manual/en/wrappers.compression.php
					
					<h5>IMAP Functions:-</h5>
						http://php.net/manual/en/function.imap-body.php		
						
					<h5>SPL Functions:-</h5>
						http://php.net/manual/en/function.spl-autoload-register.php
						
					<h5>Error Handling Functions:-</h5>
						http://php.net/manual/en/function.set-exception-handler.php
						
					<h5>Exception:-</h5>
						http://php.net/manual/en/exception.getfile.php

				<h5>Chapter 18 - PHP 4/5 Differences</h5>
					Object Orientation
					E_STRICT
					References vs. Object Handles

				<h5>Chapter 19 - Building a Content Management System (CMS)</h5>
					Blueprinting the application
					Building the CMS database
					Establishing your work area
					Creating and styling the first page
					Making page assets reusable
					Connecting the application to the database

	</pre>';
}
	?>
			</div>
		</div>
	</div>

</div>

	<div class="book_mark">
	
	<?php 

function php_notes2() {
	echo '
		<pre>
		php Extensions:
		sudo apt-get install php5.6-zip
		sudo apt-get install php5.6-soap
		sudo apt-get install php5.6-xml

		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482759415">Php Notes</H3>
		<DL><p>
			<DD>Object Oriented Programming in PHP - A simple and short PHP tutorial and complete reference manual for all built-in PHP functions. This tutorial is designed for beginners to advanced developers. You will learn PHP Built-in Function, Predefined Variables Examples, Object Oriented PHP, Numbers, Scalars, Arrays, Hash File I/O, IF, ELSEIF, Do, While Loops, Operators, Regular Expressions, GET, POST, Subroutines, Coding Standard, Modules, File Management, Socket Communication, Reference, Special Variables, Syntax Overview, Form Validation, Advanced PHP, Library, Web Design, PayPal Integration, MySQL Login, Ajax Search, Ajax XML Parser, Ajax Auto Complete Search, Ajax RSS Feed Example, XML Introduction, Simple XML, Simple XML GET, SAX Parser Example, DOM Parser Example, Frame Works, Core php vs frame works php, Design Patterns.
			<DD>Tutorials for PHP, Wordpress, JQuery, Javascript, CSS
			<DT><A HREF="http://www.guru99.com/php-tutorials.html" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-m4" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAByklEQVQ4jWNgGLaAy1VXu8zWyuqGlZXVbdOA8H4GBgYWonSKijLwpHjbLXF2cflmm1fQ621kMNMgIKiAWAOY0pOt25ydXb4b+acnMjAwMJLkbjcFGfMAF5fX1nbRCxgYGFiRpIRERATspaWlM6WltUMYGBh4selnyU1yXOji6v5O2sxHn4GBgdnGQs4l2NJsfaib6zsX/4BHzjY2N71cXX/YOYYdEdNxFkfRHeApq+zn4vzcLbl0q4yMDGdapFWnq7Pzbxt7x9NqDpEBDAwM3AwMDEzZ1uZdLi4u/8wD8ytQDAg210lycXb+Z2QdWsrAwMCsoiIdZmTkU88gI8OJrK47xyzKxdn5l4t7+jkUOUNd7RoXF5ffhuYtwbjCyE9bRiU52OWiq6vrf2cXl98KWrHmcMkgPe0UFxeXfxY+mc0MaKGvri4i5a+nUxXi6vrS0sp2r7ejw35XV9f/NlHVzXBF7pYyKi5OjndcXAI/GxgFTpCVlS12ctIuNzUxOeDm6vrVxS/inqq6dQYDAwNnuJOap6uL0yvn7GltKE7kY2dX0VBTazU3Mztubm5+1tzc/Ky2ts5UeXnzYAYBAQFktVxcXFIMxKZOmgIAHMN1JSzPqQoAAAAASUVORK5CYII=">PHP Tutorials : Learn in 7 Days</A>
			<DT><A HREF="http://www.phpforkids.com/php/php-tutorial-table-of-contents.php" ADD_DATE="1475883182" ICON_URI="http://www.phpforkids.com/favicon.ico" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABbElEQVQ4jc3OPUsCcQDH8YOgoQinliKDHoZeQVB7S/kWikCIyMFEyMGlNIRw0XwIHHxAoc5NW0JKSisa4mq4VKI6n/IU+l8o5JV5vwZxqMWzlr4v4MOXoiiKIoQo0h5PKKHTPbxms2NUNxFCFE9WK8NoNEiq1TjTarm6IIzKBqqRiKdgNCKj14PRaJCw22AwbGSKxeKILOA9ELgmZjMKRiNYvw9rqytYXlrESXA7JVbYiY5ArVYbFL1epnwYBX2wD7NpC7HQJpruAUiOobxsZM/tTF2cJ5G+OULzcg4I9gN2CpJzOCdW7iY7IoQQ5dWpKyMJIYDTA8nZFmJrIzJORPF+XCoscBB8/wJRcRD8f0XmfyB9LcSl5H6PRKaA7C6a5ai/I/Ad8QF5E8CuAzwN6dlXomm6pwtExaGeA6oM8HIM8DQ+3vhpWUAbaX7W/VK9xKPK4PE2DOuO2SIbaMeybG+jUZ2Jx2MWt9MR/gJdn2Tsb8wvnwAAAABJRU5ErkJggg==">Free PHP Tutorial Table of Contents - PHP For Kids.com</A>
			<DT><A HREF="http://www.javatpoint.com/php-tutorial" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-m6" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAVCAYAAACg/AXsAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94MAQYPI7jeTJQAAAGkSURBVDjL7ZQxSxxBFMd/Ozs7TkC55DA2HqJgKsFIqmBnZZVPEK656q5PkcZPEMvrtj00TdIdCNdZpQ4hRQgHKXIqJClMTj2zO88ib2U5PPSs82DY2dn3fvOffe9NxD8zgNXnXU2AHMgjDXwILAMVIFIHdB6VgqQEuQBOgGMABzyTe1iv13sP1IojVAC89xJC+Aic6fpCHMcrAHmefwJ+q7J5Y8xqCGEOeADgga00TcU59xV4AawDz6vV6pt2uy3eewEawIaOl865c2vtAfAEYAbY9N6LtXYXWFLwQr1efy0iBWQbmNWd11qt1mGSJO+AFQME4KeIfMmybB/4AVwCmTEmAIgImokMGAEnaZruAd+AodWPg9FotAX80b8ut6T2NMuyt0BcQIIGn+lcSmmdBPkLnBbvdqxwpim0a7XTVOhE+w+5J0SLbWpIBBgRicZ8o7tCjPbOo+FwWCmtPwaq2jvmNmUVYKPZbO50u93Pxd3R6XQ+NBqNV8BT9ZkIioFav98/cs7JTSNJku9ATX2vzz6uZBZYVOmutGOu3f0LGGi/BYArMOLGbEKJU04AAAAASUVORK5CYII=">PHP Tutorial - javatpoint</A>
			<DT><A HREF="http://200-530.blogspot.in/2013/04/oop-magic-methods.html" ADD_DATE="1476447400" LAST_MODIFIED="1482499569" ICON_URI="http://icon.xmarks.com/ix1rvsed-q" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACsklEQVQ4jZ3MSWsTAQCG4UFEBRHBk3/Ci2fPSkFFEQ+lokXUpGltYzabPZnaSZo2nUkmS5tlsjRJbbOMdWmt1ZhKtFZwrYgg6kH/x+uhIgh66eG9fHw8QipfI1taJFdeJF+uk5+ro1UaaJUGhWqTYrVFsdaiVNMpz+uUb29XWVgiU15ESOWqTClZpuM5ZDWPrGooiQKxZIF4qkgiXSIxUyKVmSOdmaOpr5DVbpPJ1yhUGghKqkhQihOU4tSbD9h89Q59aZW1J10a+gqdZy9pd15QqjTprG/w+s0WsWQBWc0zq80jTChZ7J4wDs8EETnDfP0e691NGvoKd+8/pqEvI4ZV3rz9iKzmWWg8QJpMMRZWic+UEcTJJCaLn0FrgMftLs07DylVmjTvPCRXXGAmV8XuCaOV69xffkK7s4ErMMWoL8JkPIfgC8W4aLTTe9VC3zUbfQYbF4x2+gdHMVn9mKx+rtuDDNkCjDhERm6OMWgNMGQLMB5NI1h8E/T0GjjbP4xXipHKVZCTGmElgxRNU6y1kBMalcUllGSBur6M0eLjotGB65aMYPZuAyf7TDjFKHZ/hCGHiMHq5/KwG7ekcK5/GNe4gskWIKTMcuqCiZ5eA2ZvGMHsDf8GBnAGpxhxSdzwhDBYfFwxe3HfkrH7I1x3jnPV7EWanqGn1/AvwERwMskNt8To2DS+UByD1U8wksATimH1RRi8KRKOZf8GxGiaAYe4o8RoGuGMusbBwPqOOqOuIZyQVxGcbQRnmyPKJt61b5wuf+B8bYvY8x8cCKxjW/7C4fEuR9VXnK9u/fmfkFf/Bk6W3nNce4vn0VfG2t8x6p/Z7X5KcuMnx2Zfc1x7x6X6p/8Dez1PEZxt9nk77Pd12OXa3g9LXfb7OxwSn7Hn9+cPMJBocSq2uqMGEi1+AX7tlZA+gOtQAAAAAElFTkSuQmCC">200-530 Zend PHP 5.3 Certification: OOP -&gt; Magic Methods</A>
			<DT><A HREF="http://www.hackingwithphp.com/" ADD_DATE="1479117480" LAST_MODIFIED="1482499569">Table of Contents – Hacking with PHP - Practical PHP</A>
			<DT><A HREF="http://www.tutorialrepublic.com/php-reference/php-calendar-functions.php" ADD_DATE="1476447400" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-s" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA/ElEQVQ4jZXTvw/BQBQH8P6tKBMdJTaMEhuOxK9IDHThaIWgTQSDlKWWLmLsJqlELF+LVrVX1Ze85H7kPnl5d8elGlN4M1mf+NaCkmMd5gkFTyZ/QZz3sNCeAQBU/QKe0FDEB2RaMuwoimp0IN38AIWh6lRhZyQgP1AQr46RqI2/oL+B0mgD6/F05mR+iAZ0VkdnfH88IbRn0SsYbnVImoGiqDKv9uctdNYnxCqjrx6ENjFRozBvFgDAvFnI9hbvRlIm4gN4QtFVTnCHfjUhaQbE/dmHBD5lcaeDFWW6+w24kUxLhqQZTsqagVx/GQ7YyOdj0cAPFgiwMNbeCzW/6CA8qHEGAAAAAElFTkSuQmCC">PHP 5 Calendar Functions - Tutorial Republic</A>
			<DT><A HREF="http://www.php5-tutorial.com/mysql/introduction/" ADD_DATE="1479117480" LAST_MODIFIED="1482499574">Introduction to MySQL with PHP - PHP5 tutorial</A>
			<DT><A HREF="http://edward-designer.com/web/data-formats-types-php-5-3-certification-exam-series-9/" ADD_DATE="1479117480" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-x" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMhJREFUeNpiZEADRoE+CUAqHogdQHxXW2eY1AEgXthZVLgAWT0jkkYFILUeiA2QFSAZAAMXgDgQaNADEIcJSfN5dM04AEjN+fK+fgW4AVCbBRiIBwJQPQyMUD/Px6USixeQQSITNMDIBfFMsNAmEzgwMVAIWAT4BCkzgJWVjSIDmKApjFxwAGTAQgoMWMi0c87cBdDkSSq4AMoXsFgIBOIPJGj+ANUDScpAV4AyhiGRLgGpMYRlJkZ0WfeUZJTsbKClgzc7AwQYAKzAL1N+6214AAAAAElFTkSuQmCC">Data Formats &amp; Types – PHP Certification Exam Series [9] - PMP Exam, Agile PMI-ACP, ITIL, PRINCE2 Certification Tips &amp; Notes 2016</A>
			<DT><A HREF="http://docstore.mik.ua/orelly/webprog/pcook/index.htm" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-md" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABlklEQVQ4jZXTsUsbYRjH8d8RIehZNaiJSzkpDh2UiIOtS+jSIUQotIgQcKuXNlCoFaFOQv4AXQIiDqFQKDSEhFKcioKUQoYjiIPSC1aLUENBhJROwrdDMHgO3vUHz/Y8n/d94H0ln1QTUfx6bs2Pep3akIIjGwNmu3lzcYn3mQybc3PBkU+RML9yL/kw2MefUXG5PM3RwiwHMw9oNk79kRfWMCXDwLl3h58TAqBJK4EASbIVYlUdOD0tQBKS+Pv2cTBkz3GwFWKnozVUzqa4GBfHYxGajVPK2ZQ/YitEXmFKhsHFuKjFY0jS1XBg5KokaV3dHH5cwINUE1HcYoV6fsUjFiyT7yN9/E4O8PnZQ9ZSTzmZilDOpjyI3GKFaiLKeeOMm6e/Uye1eIzjR/2sq7t9E0/q+RXOG2cULBO3WOE6cLN8dy5YJrnecLsKlsn23R4unwz+339409tPTqJkGGwtZigZBvtjXcEfUS0eY/d52rPO1v1hnHSSL69f3Q65xQq2QjjpJNtfv9FGJyap2vOcuEce4B/YRPz/OdsgkwAAAABJRU5ErkJggg==">PHP Cookbook</A>
			<DT><A HREF="http://php-guide.evercodelab.com/pages/data-formats-and-types.html#soap" ADD_DATE="1475883182">Data Formats &amp; Types</A>
			<DT><A HREF="http://www.tutorialspoint.com/php/php_object_oriented.htm" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-n" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADDElEQVQ4jV2T709bdRTG71/lS1/oHG35sUorrJAZGM6CMWZmgTkciSGbiRrdoozS0rExCi1TSkX0lW80MSaTgPJTEBgaGVu7AWt77/323u89H19QDNmTnDcn55znOSfPMQATUCei4jiOAhgfG1eDtwYVQDX3YpgGUOEIUi0EIDedo+VshNZIhNvJ2wC4rosclUm1p2IAdjXhOY4jANlsVvw+v+QLBbFVRYINZ2R4eFiqNHKC0DZE5FiiAORyOfw+H/v7+2w+3GFufoFSuUyosZF0agLTtnheKoqIICLKAJTruAB8m8tR6w9gFk1+ffCA3Mx3LCwusri8glW06L7RR1/qU55ZB6K1Phrguq6q7iwNdfVs7myztLVOz8VuDMNgfXWD3b93uTbyBR9PD5CcuMPUN1NSvYkyjmXXBgJSeJKn8913eOn9Oq7HP2fq6yxD06O8fCnIqSvN9Fy+TGHvCcFgUJLJJADG7Oysam9r499Hj2R7e4dwU5ia3gjha2/Tk+wn8GErP/z0I2c+aqchHGRr8yFPn+3LhY63GBsbV0ZnNKriQ3G0IGtrGwzfuUv3rSs8zx/y82+/cH3kE/b+2eOD2FUSoyP8ubaB42rJTmUJhULK8DxPnW9vJzY4KI6rOXfuTS7d6KVzoJvl9VU+S92ka6Cbnq+u0tbWjuNoMumMNAZfx7ZtZQCOpzWRSEQS8QT3J+/T1dGJ70KI073N1PS14usKEz0fZTKdYTKTodYfEMs0AbTheZ4SOXJXS6SF1FgKgHtDd4n2X6Sj/z2SXyYQ4PvZWepr6zAtS0QErbX638oiIlprzjY3E4vF8ICJTIaRe6N4wGRmkprXTmMeMR+jYmit7WKpJKZleVpr8TxPmt5okkQ8LsWyKWXTkkw6LQGfX0zTFBER0zK9Yqkkruvaxtz8QmV3b+/kgwDQ2tJCKpViZmaGhvr6F5l5nM8zN79QMZZWVs3fF5fVxl+bKp8vqIODQ1Uum0oEJxwKqVOvvKo87SnLttXB4aHKF56qza1t9cfSslpaWTX/AxWbRLGQTtxHAAAAAElFTkSuQmCC">Object Oriented Programming in PHP</A>
			<DT><A HREF="http://phppot.com/" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-r" ICON="data:image/png;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAABMLAAATCwAAEAAAAAAAAAAAAAAAICAgADAwMABAQEAAgICAALCwsADAwMAA0NDQAODg4AD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAUAAABQAAAADkAAAOQAAAAOQAAA5AAAAA5AAADkAAAADmWUgOZZSAAOUR4A5RHgAA5ADkTkAORADlEeAOUR4AAJmZRAmZlEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" LAST_CHARSET="UTF-8">PHP Tutorials</A>
			<DT><A HREF="http://www.hackingwithphp.com/" ADD_DATE="1476447400" LAST_MODIFIED="1476447400">Table of Contents – Hacking with PHP - Practical PHP</A>
			<DT><A HREF="http://www.php5-tutorial.com/mysql/introduction/" ADD_DATE="1476447401" LAST_MODIFIED="1476447401">Introduction to MySQL with PHP - PHP5 tutorial</A>
			<DT><A HREF="http://edward-designer.com/web/data-formats-types-php-5-3-certification-exam-series-9/" ADD_DATE="1476447401" LAST_MODIFIED="1476447401" ICON_URI="http://icon.xmarks.com/ix1rvsed-x" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMhJREFUeNpiZEADRoE+CUAqHogdQHxXW2eY1AEgXthZVLgAWT0jkkYFILUeiA2QFSAZAAMXgDgQaNADEIcJSfN5dM04AEjN+fK+fgW4AVCbBRiIBwJQPQyMUD/Px6USixeQQSITNMDIBfFMsNAmEzgwMVAIWAT4BCkzgJWVjSIDmKApjFxwAGTAQgoMWMi0c87cBdDkSSq4AMoXsFgIBOIPJGj+ANUDScpAV4AyhiGRLgGpMYRlJkZ0WfeUZJTsbKClgzc7AwQYAKzAL1N+6214AAAAAElFTkSuQmCC">Data Formats &amp; Types – PHP Certification Exam Series [9] - PMP Exam, Agile PMI-ACP, ITIL, PRINCE2 Certification Tips &amp; Notes 2016</A>
			<DT><A HREF="http://200-530.blogspot.in/2013/04/oop-magic-methods.html" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-q" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACsklEQVQ4jZ3MSWsTAQCG4UFEBRHBk3/Ci2fPSkFFEQ+lokXUpGltYzabPZnaSZo2nUkmS5tlsjRJbbOMdWmt1ZhKtFZwrYgg6kH/x+uhIgh66eG9fHw8QipfI1taJFdeJF+uk5+ro1UaaJUGhWqTYrVFsdaiVNMpz+uUb29XWVgiU15ESOWqTClZpuM5ZDWPrGooiQKxZIF4qkgiXSIxUyKVmSOdmaOpr5DVbpPJ1yhUGghKqkhQihOU4tSbD9h89Q59aZW1J10a+gqdZy9pd15QqjTprG/w+s0WsWQBWc0zq80jTChZ7J4wDs8EETnDfP0e691NGvoKd+8/pqEvI4ZV3rz9iKzmWWg8QJpMMRZWic+UEcTJJCaLn0FrgMftLs07DylVmjTvPCRXXGAmV8XuCaOV69xffkK7s4ErMMWoL8JkPIfgC8W4aLTTe9VC3zUbfQYbF4x2+gdHMVn9mKx+rtuDDNkCjDhERm6OMWgNMGQLMB5NI1h8E/T0GjjbP4xXipHKVZCTGmElgxRNU6y1kBMalcUllGSBur6M0eLjotGB65aMYPZuAyf7TDjFKHZ/hCGHiMHq5/KwG7ekcK5/GNe4gskWIKTMcuqCiZ5eA2ZvGMHsDf8GBnAGpxhxSdzwhDBYfFwxe3HfkrH7I1x3jnPV7EWanqGn1/AvwERwMskNt8To2DS+UByD1U8wksATimH1RRi8KRKOZf8GxGiaAYe4o8RoGuGMusbBwPqOOqOuIZyQVxGcbQRnmyPKJt61b5wuf+B8bYvY8x8cCKxjW/7C4fEuR9VXnK9u/fmfkFf/Bk6W3nNce4vn0VfG2t8x6p/Z7X5KcuMnx2Zfc1x7x6X6p/8Dez1PEZxt9nk77Pd12OXa3g9LXfb7OxwSn7Hn9+cPMJBocSq2uqMGEi1+AX7tlZA+gOtQAAAAAElFTkSuQmCC">200-530 Zend PHP 5.3 Certification: OOP -&gt; Magic Methods</A>
			<DT><A HREF="http://www.tutorialrepublic.com/php-reference/php-calendar-functions.php" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-s" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA/ElEQVQ4jZXTvw/BQBQH8P6tKBMdJTaMEhuOxK9IDHThaIWgTQSDlKWWLmLsJqlELF+LVrVX1Ze85H7kPnl5d8elGlN4M1mf+NaCkmMd5gkFTyZ/QZz3sNCeAQBU/QKe0FDEB2RaMuwoimp0IN38AIWh6lRhZyQgP1AQr46RqI2/oL+B0mgD6/F05mR+iAZ0VkdnfH88IbRn0SsYbnVImoGiqDKv9uctdNYnxCqjrx6ENjFRozBvFgDAvFnI9hbvRlIm4gN4QtFVTnCHfjUhaQbE/dmHBD5lcaeDFWW6+w24kUxLhqQZTsqagVx/GQ7YyOdj0cAPFgiwMNbeCzW/6CA8qHEGAAAAAElFTkSuQmCC">PHP 5 Calendar Functions - Tutorial Republic</A>
		</DL><p>
	
		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482759415">Php Questions</H3>
		<DL><p>
			<DT><A HREF="http://www.zendexam.com/question/39/which-of-the-following-isare-false-regarding-oop-in-php-53/" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-mn" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADbklEQVQ4jSWO20+bdQBAf4bExEQXp5kPqPHB/8HryCQZQRlujCHIoDDoWva1BXq/0JZegcIsXxkFVii9QKEXLgUKha2jZfNhmi3GiEZ98k85PvBwkpPzdMRqukAqs00iXSC5vkU6s8Pa5i7pjSKZ/B6ZbJGN3D7Z/D7ZrRKZXJHN/D67+yes5/YQqfVtHi2lWYitsxTfIBpbYyG2zkoyx+JyhpVkjpVkjngqTzxVYGfvmNxWiWzhgK3dMiISTeKZnMMXmmc5mePwuEoskaV48IR4Ks/O3jHF/RPkhQT5nUNqz1+yEFtHjiaIrW4iZuRlzK4QJmcIX2ieyGKKYukpy8kcB4cVVlN5xifmePXqdwKhKI/jm8wtpvCHoswvpRH+UBSNyYPG6CFbOCCW2CQ0G2MlkWPip0Wm5RhmV4hobI2llQ3yO4e4gzIW9zQzcgzhCsjcVZvoUhnpGNTTqTJyq0+LQmtHbXAzODyG1uJlUOdAa/GhtfrRmb2M2oIEpqOIYVuAr24q6FDqkawBdFY/Ln8Ytz+MxuzF5QvjmYgQnJ5ncmaRyEKCIeM4nUoDJlcIobX4uNY+wM0+HQqtHeWok36dgx7JSmuPhm61iebuB/RKVpTDYyhHxrjRK3G17R4qvfvi4Fr7IO0DowwZx1Fo7RdobHSpjAyMOFEbx+nX2unT2tA5gjT/OERTpwrJ5EFIZi9ftPZye2CEUXuA+6MuJLMXyeylU6ln2BZAZ/UxZHSj0rvQ2YM0dam42tbPfb0LYXFOckch0TWgo10h0aGQaO99QEefhq57Wm7dVV80hYaOPom2HjXdyhHuKCQM9gDidqRMva/GxxM1rnhPueSucHn8Ge95TrnkqlAfqHHZ84yPJmp84KtyxXvKh8Eq9f4zvg+XEA2hMsJaQxhOaHj0K/bsn7RFXvLD4msc23/zlrPKcOacN2wVPpN/4bvHrxGGJwjbGV9OlBCNM0fUOarU6csEi38xvX1OvPwvydI/TO2c8+7YUw5f/Mfnk2eMrP3G2NYf1OnL1I3VaJg6QHwzc4Iw1xC2Ku84awhzBeGo8bazhjBUEPYqn/hf8P74cz4N/MybjirCWkVYzvh66ghhim7TKp/QIpdpCh/REjnm29kLvxE5pkUu0/jwkOvhMo0Pj2ieLdMil2mNnDA6V+B/SgaCkopeEmEAAAAASUVORK5CYII=" LAST_CHARSET="UTF-8">Zend PHP 5.3 Certification Exam - ZCE - Which of the following is/are FALSE regarding OOP in PHP 5.3? - #39</A>
			<DT><A HREF="https://guptashailendra.wordpress.com/2014/02/21/php-tricky-interview-questions-with-answers/" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-mo" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABd0lEQVQ4ja1TsaqDMBTNG/IxpR/gr/gFfpCQvaDkAzrVwUVcBO1WMKGTYCGQQQMVNcjt0Hc1bd9bHm+4g3rP8ZyTE0II+XqZw2VPYhGSqK4oF5ZyYUlUVyQWITlc9h/7Lw+xCCkX1s/aNFdD2Y+z6cfZ5Goo/axNKReWxCL8mSCqq93xepZm0kx24CUNoAIvaYDJDqSZ9O54PZOorl4JYhEi2AW+T1Ao6MfZ7I7X86bkcNlTLqw0kw4KBUGhAJfdoVzYBQAWAOjH2VAu7DOTWIR+1qb48XS7rwT4DlWdbveVwM/a9KkiqqtcDSUCkMAFoAIvaWABACY7yNVQkqiuCOXCoiRpJr0AgOv5nRQVrTZcAgTgH5nsVhuoQJpJu5jVAvpcANYlaSbt2jjd7hAUCryk2SxgiEx28O6byQ5QlTSTRmImO9hCdI7RS5oV0I+zcVVhFq6N72p/Fsk9azeLoFBbG7dKf1a5H2eDltxwf6/yv1ymP17nB9ZAglkRvAmlAAAAAElFTkSuQmCC">PHP Tricky Interview Questions With Answers | Shailendra Gupta</A>
			<DT><A HREF="http://www.hub4tech.com/certification-test" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-mp" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABy0lEQVQ4jcWT30vTURjGz3/RTXQVFKyLbrwIkiAbRkJ1GXSTEERdlGBBRkFFP70wWjqTUZgwEAyG0IKc2qCQpNIgIscGuTTJsTFrztr3nPf9dPH9uroZXRh04MB54eE5D8/5HMMGl9mwgaoioqgCrJ+1LlBVRBVUURVUBer7Lwn+NGqgwPysrpFb+kZNAByfF8uUqtZPo1CrrrFYqoGroEvv0WIeCnNQyIOAWZiZZVPbA14XHZ5dZc/Be1x8uhDcLpw+E2PH5RkoprF9B5AbO6G7GR6dg8oPzMqnDKHDQ+SCUEePxzibmEeB2fQ0ZssFdt2cRhUcIIMtMP7EF4uHKc9n2R7u41jPCy4NpNm2N8LViWWofefQyTitJ4YIX58CwKqgD1vg2WO/RLGYcj5HqDVK+53AYF8vvS+/MnB3hKbOFJFoktCpJIWKxakig2FIJUDVNyhlP7A5HCMTFN52JEpXIsO17lGa2+Ns3d+D2X2fsWwFBVx/EySHfbHzMKvLX+i49ZyPKw7PetyOjBF/W6o/1FTqDeeH53w9oJNX4N2roAPXmAMRxclvDqQBE0ZVsU7qJDonuIBGn1LBumAGVByIrJP2D/7Cfzf4BR3rroJLXyzBAAAAAElFTkSuQmCC">Certification Practice Test &amp; Quiz | Hub4Tech.com</A>
			<DT><A HREF="https://www.google.co.in/search?q=php+tutorials&oq=php+tutorials&aqs=chrome..69i57j0l5.4743j0j7&sourceid=chrome&es_sm=93&ie=UTF-8#q=php+tough+questions" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-mq" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB5klEQVQ4jYWTzWsTYRCH9yLYePL/EAlisEQvtlC13irUVagHBUX0omAv3oQqHiooTeiiudTvtaiIVZGqlHoRtB+StrE9yYK0mw8ipLG7mcnjIdmYL8nA7/bOM/Obd8YwmsL3/T0iYqnqmqr6Va2KyDgQbn5fCyAkIgk6hIhYjuN0tUueBSh7HsXJh+TOD5HuP4B7KEru7Ek2n05Q9rwAMtMACSqru07ujInbG2mr/PDF+k7Ga56DytnTg7i9EdJH9lO4F8P/Po+fXKSQiJM9NYA4P5sdhQ0RsQBK83fIDOzD7evGTy60mldtN4+4oaprAPIlgvcqRPHBhU5zrGNqylBVH6D0cQel6W2UM28aHvWMFFp01f4TALx/gA+hCiA91RFw5VEjYBXg9+ddZKd38nJx9L8tX3u+Rc9IgdGprQCwYlQ3jG/LNzlsH6XbHmTOXWpJTv1S+m5UOphNSTDEMQMIA3jic/ztJfY+OUbUNrm9MMHXjSRz7jJ3kzb99y0OXs9zLlGkXK5APc/bHSySBbCxmcGsQtrJfHGL9Xw5qB6rbaLjOF0iMgPgqc/jH68Zej9M9JlJ1DY58e4yiaVJiqWtIPkTsL3hHqoQq8PXIyKxluSmwwqLSFxVU6rqVbUiImM1z3XxF/9k+3A9su/8AAAAAElFTkSuQmCC">php tough questions - Google Search</A>
			<DT><A HREF="http://phpinterviewquestions.co.in/" ADD_DATE="1476447418" LAST_MODIFIED="1482499574" LAST_CHARSET="windows-1252">PHP Interview questions and answers for freshers</A>
			<DD>Important PHP Interview Questions with best Answers.These questions are frequently asked in all IT Companies.This Questions are very helpfull for freshers
			<DT><A HREF="http://interview.shiksha360.com/advanced-php-interview-questions-and-answers/" ADD_DATE="1475883182">Advanced PHP Interview Questions and Answers</A>
			<DT><A HREF="http://www.navnishbhardwaj.com/php-interview-questions-answers/" ADD_DATE="1476505475" LAST_MODIFIED="1482499572">PHP Interview Questions Answers - | #TechnoQA</A>
			<DT><A HREF="https://sharag.wordpress.com/2008/08/28/freshers-phpmysql-technical-interview-questions-answers/" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-mr" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABd0lEQVQ4ja1TsaqDMBTNG/IxpR/gr/gFfpCQvaDkAzrVwUVcBO1WMKGTYCGQQQMVNcjt0Hc1bd9bHm+4g3rP8ZyTE0II+XqZw2VPYhGSqK4oF5ZyYUlUVyQWITlc9h/7Lw+xCCkX1s/aNFdD2Y+z6cfZ5Goo/axNKReWxCL8mSCqq93xepZm0kx24CUNoAIvaYDJDqSZ9O54PZOorl4JYhEi2AW+T1Ao6MfZ7I7X86bkcNlTLqw0kw4KBUGhAJfdoVzYBQAWAOjH2VAu7DOTWIR+1qb48XS7rwT4DlWdbveVwM/a9KkiqqtcDSUCkMAFoAIvaWABACY7yNVQkqiuCOXCoiRpJr0AgOv5nRQVrTZcAgTgH5nsVhuoQJpJu5jVAvpcANYlaSbt2jjd7hAUCryk2SxgiEx28O6byQ5QlTSTRmImO9hCdI7RS5oV0I+zcVVhFq6N72p/Fsk9azeLoFBbG7dKf1a5H2eDltxwf6/yv1ymP17nB9ZAglkRvAmlAAAAAElFTkSuQmCC">Freshers PHP/MySQL Technical Interview Questions &amp; Answers | Sharag&#39;s Tech Interview HELP</A>
			<DT><A HREF="http://www.careerride.com/PHP-submit-form.aspx" ADD_DATE="1475883182" ICON_URI="http://icon.xmarks.com/ix0osyrz-ms" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB/ElEQVQ4jZWTwWsTQRjF849Ik9m2JpvZBtOmWrBaKvXkyaM3C0ICll568eRVQREEqVTrQVTUg6AQba1WijfRg0iJtQpabzYzazcxm0138/OwaZrGNtiBd3nz8eb73vcm8jkRfVy0REVZRm1fkIb3LRFdiqxLw1GWwQ5IgUrGQkjBP/fb2IwULfFnB2lGUek49shh7JFBVDoecrsKCD9StES5SfR1Uzp/Dm9hDv/rF/zVFbz5PE72LKqve88Oylsvlyaz1LWi/QTrv3By47t10hCQAp1O4L1+CUDd1ri3pnHvzFB3NgDw5vKoQwfbPWkRGB7ALyyHxfmnYUGqB/f2NJufPlJ9dB+dkXsIJGPYxzL4KwUA3If3ULKxgXQCfSSFziQ7eNBJwOpGpXpRqZ4OAlJgt4xQffYkzIBlULl6idriAu7MDXS/uS0ajtLiQb9J7c2rpuuVa5epXL9CXevQl/nn2KNDuLM3cR/cxT45jErG2tY4NdF0nSAI0diKkxvHyY1Td10IAsoXL6DiB1oEpECleilNTVB7u0Twc41g7Qe1pUVKk1mUFPw+dYLN9+/wC8tsnDmNMrvaoiwFyoyiMxJ7bBh77Ch6INkIkEBJgX18EHt0qCXK0ijt6zNt8ZaBtoQfWTW7XhSlcJU0vKI0qv8DJQ1PS6P63Yx++AuxhJWT+th1pQAAAABJRU5ErkJggg==">PHP - Explain how to submit form without a submit button.</A>
			<DT><A HREF="http://programmers.stackexchange.com/questions/55854/interview-questions-in-oop?rq=1" ADD_DATE="1479117480" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-33" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABcUlEQVQ4ja3PsYoaYRSG4VPogJ2d6AXI3oBgOc0MgzCChUiCyEyzLLvl3sCylZ07zcKAoGA6y8Q6hB8kF2FhiEbCVDY6M+L/ptphA6sSNh+c7pyH74j8z6xvboiCgHchvx8eiB4f+X53x5erK9T19WUwen4+ufTZsvhkmueR6OmJH67Lzw8f+XV/T3R7yzfHyY6++v773vqnWJaF7/t4nkev16PT6dBut6nX61Sr1fNNWq0Wg8GA19lutywWC5RSNJtNGo3G24ht2/T7fcIw5Hg8kqYpaZpyOBwyYDQaYdv2aUBEZDgcorUmSZJsXoAgCE4DpmnieR5hGKK1Jo7jDEjTFKUU4/H4NCAiUqvVmE6nAH81SJIEpRSTyeQ8ICLiui77/T47jOM4azCbzS4DjuOw2+0A0FqjtQZAKYVS6jLQ7XaZz+csl0vW6zWr1YrNZnO+gWEYGIZBPp+nUCiQy+UoFouUy2VKpRKVSuXNERH5A+OVSIxr3NrHAAAAAElFTkSuQmCC">php - Interview Questions in OOP - Programmers Stack Exchange</A>
			<DT><A HREF="https://www.tutorialspoint.com/questions_and_answers.htm" ADD_DATE="1475883182" ICON_URI="https://www.tutorialspoint.com/favicon.ico" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADDElEQVQ4jV2T709bdRTG71/lS1/oHG35sUorrJAZGM6CMWZmgTkciSGbiRrdoozS0rExCi1TSkX0lW80MSaTgPJTEBgaGVu7AWt77/323u89H19QDNmTnDcn55znOSfPMQATUCei4jiOAhgfG1eDtwYVQDX3YpgGUOEIUi0EIDedo+VshNZIhNvJ2wC4rosclUm1p2IAdjXhOY4jANlsVvw+v+QLBbFVRYINZ2R4eFiqNHKC0DZE5FiiAORyOfw+H/v7+2w+3GFufoFSuUyosZF0agLTtnheKoqIICLKAJTruAB8m8tR6w9gFk1+ffCA3Mx3LCwusri8glW06L7RR1/qU55ZB6K1Phrguq6q7iwNdfVs7myztLVOz8VuDMNgfXWD3b93uTbyBR9PD5CcuMPUN1NSvYkyjmXXBgJSeJKn8913eOn9Oq7HP2fq6yxD06O8fCnIqSvN9Fy+TGHvCcFgUJLJJADG7Oysam9r499Hj2R7e4dwU5ia3gjha2/Tk+wn8GErP/z0I2c+aqchHGRr8yFPn+3LhY63GBsbV0ZnNKriQ3G0IGtrGwzfuUv3rSs8zx/y82+/cH3kE/b+2eOD2FUSoyP8ubaB42rJTmUJhULK8DxPnW9vJzY4KI6rOXfuTS7d6KVzoJvl9VU+S92ka6Cbnq+u0tbWjuNoMumMNAZfx7ZtZQCOpzWRSEQS8QT3J+/T1dGJ70KI073N1PS14usKEz0fZTKdYTKTodYfEMs0AbTheZ4SOXJXS6SF1FgKgHtDd4n2X6Sj/z2SXyYQ4PvZWepr6zAtS0QErbX638oiIlprzjY3E4vF8ICJTIaRe6N4wGRmkprXTmMeMR+jYmit7WKpJKZleVpr8TxPmt5okkQ8LsWyKWXTkkw6LQGfX0zTFBER0zK9Yqkkruvaxtz8QmV3b+/kgwDQ2tJCKpViZmaGhvr6F5l5nM8zN79QMZZWVs3fF5fVxl+bKp8vqIODQ1Uum0oEJxwKqVOvvKo87SnLttXB4aHKF56qza1t9cfSslpaWTX/AxWbRLGQTtxHAAAAAElFTkSuQmCC">Technical Questions and Answers</A>
			<DT><A HREF="http://www.web-technology-experts-notes.in/2014/01/oop-interview-questions-and-answer.html" ADD_DATE="1476447400" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-u" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAfklEQVQ4je3P0QqCMBhAYd//tYoggkSEjOhCUFSGjqZ/20S302UPUFAXngf44CR8WLIB/wKUxlMMliVEMiXkSthVD47NiF8DRW85dxOX/sldW9YYaWR+A9Xo2dcG7RaugyXthFM7kSvhpi2H2pApQbuFVmZChNK4Ly5swI+BFwve9adzfAyUAAAAAElFTkSuQmCC">OOP Interview Questions and Answers | Web Technology Experts Notes</A>
			<DT><A HREF="http://www.itechaleart.com/2013/06/top-50-oop-interview-questions.html" ADD_DATE="1476447401" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-16" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABw0lEQVQ4jZXTy2oTYRTA8WxdlLgRXBREXyC41FeQgiK+Q3El6gu4FurCjUJxI6hYtQFbaGq8JE1JhwQvaTvJFJNKTE1iZzKZyXzzTWaS7+9CEANJSs7yHPhxLpwYU0IpNa0MQGxc0nEcyuUynucRBMHsQCaTIZ/PU6vVaDQaSClnA1KpFMnVN2xlP/GlWMBxurMBpnnMsxfPSb5+xYd3m7ON4LouD5eW+L6+RtMyEULMBuhGmfiZsywuXKF+9AsA4U9GRgAhBN++lrh3c5Fbd+7yuVAEoLC9jXncOhmwLIuNjU0e3LjO2vIT+r5gqBTdjs36ygpqMJgOhGHIVjbL/oHBbqlE17YI+n0816W4swNDxfCkHbTbbYxKhWrFoOf28IXgqKJz/9pVXj56DDCCjD3j29Uk9cMfiJ6H3bXZz2VYjp+il7hIZ/48Yb2O+h9QSuF5Hq1Wi2q1SjqdxjJNojBC+j4HuRy3T8/BpcuEF87R1yv/uogBRFFEp9PBMAw0TUPTNIQQDAYDZBDwe6/E01gMEgnkXBxfL492ACClxHEcms0muq4jpUQIgQwkkRDYe7v03n9E/jzk7y3U5B1MinHP/QfhM7wmSaDL3wAAAABJRU5ErkJggg==">Top 20 OOPs Interview Questions and Answers - itechaleart</A>
			<DT><A HREF="http://www.knowledgepublisher.com/article-694.html" ADD_DATE="1476447405" LAST_MODIFIED="1482499572">PHP Interview Questions and Answers</A>
			<DT><A HREF="http://skillgun.com/php/basics/interview-questions-and-answers/paper/274" ADD_DATE="1476447416" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-2i" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAUCAYAAACEYr13AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QcRBikoTY8CGAAAAB1pVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAACk0lEQVQ4y42UT4iVZRTGf+fOzVIjpkBmEURdiKho0apNUlEUOvoRLVpIBIFNCTpSpkwStGjjwkybRTAEYlAw7bp9FlQ6079FLly0qIbo2mowNHC+OxMz3/ue87SYP3a7TXrW5/k9zzmc94X/qRfO7OFaZddqGJnee1M31Xd3/a+hbqQt3ai3VJGGHIZMzDfXFU7tY+KxcZL7ZOCFI1xBRsSqszHSWNd6Hnaf3XuPKx6v5UoEiaBWAAj4Ezi9LmBi5zigUwnfXMstxbI4K5BkwDlgtg/wyjeHAHj57OhEzv5QHa4sp8apFbjQyuZOdoqyd4mvfTvG0a1HGJ0+sH9urvvOlarCb23awkCm6zVVJJICM/NOUTYBehIc3XqEg98dHpFxPBoyb2LJnKygJsgKYQbwNkCrvaMXcPj7N3aF4r2sjG1qqHnbjXgDarlShMSyXNK7AJ2i7AUkxfkcrhxOUligA1n+ZK24lAhbcf/ZzC632sP0jTDYGPw1k5XlJPnv7ac+ODa9/eMvFyOfiKtXdx5IneL0f1/iS1OjSwuxuKHyRaq8eMdcpI0LkX5I0qCZCXizU5RvrfavJdj39asAZOX5OhxXlEuKPSHNuBhcsTLgx38argHGHzm2vIfwSDiCsUCv1wSBZLIZ4PZOUX7Sau/oB+z6avcygLg5pM/mfelgUpAUjtmY4P5OUc622sN0inINsPaYPnri/ZUR/IY60nRCh2rpsuDhC0U5A3BXe5jV5fUlAHjuixc31PLZytOVLP2U8ft+K8qZ1cgX/iXuA3SjvjPQ8w2zVgO2/7Lz00sPlE/3RF7/Q/nwGbulOfDgvZvtj00D5lPbJi9yHXU1gdnGKvuZc5W3prZNXnz082evR8/foO6H35OR5TQAAAAASUVORK5CYII=">php basics interview questions and answers paper 274 - skillgun</A>
			<DT><A HREF="http://www.programmerinterview.com/index.php/php-questions/php-interview-questions-and-answers/" ADD_DATE="1476447418" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-2j" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACvElEQVQ4jYWTWUiUcRTF///vM3O0PW2TjFFnpnTmyxk11zSlcdSZdlJbqJxKQcWyIiMrzZxqMlEzHG2lTWyjomyjMKwgWogoCooeessnH6q36NeDFhVWDxcu3HvPPXDOEUIIBispJYpUEUIwZIg/yYkpROgjf5tLKRF/AxBCoEoFU6SJgsUFlJeW417pRjNrjBk95te9wY9Dxo4lJSEBp8PBPKeTHLsdp8PBfJeLbLsdc1Q0w4OG9QPIH5QUBSklAQEBxMfGkZaUSHpSEjaLhThtOlazmfiYGNKSksnNcmCzaIMz0AUGokVp5DkXUFpWyobSlVz1eejy1VNduYWi1cUUzJ3PVL0BETJyJBOCx2E0TCPeFk+qLYYbp9qYFT2FhroqHjy8SVt7PQe8NTTXbeVIq4cnT29TsX4NoeOGIQqXuvF6fXgajtPs68DX1MK9M+08On+Q04c8tLc2Ubd5A4/OtdHTeYDyiiIunj7KzZbd9BxpRBSv3ciTZ+85f6UH37EL7PE2YTWbcS9ZxJXD9by9dYlP717y7UsfXz/30vfiDu/uXqayuJCs1ETE5IlhWC1WDPoItGgzJqOR9IzZNDXuo2TZIiIjDByuraH3cScf75+gZdNWwkKn/CGjFNhsNlwuF1NNJiZNCsWZncnJ1hrydxyievoK3sSa+WDRU5+az3gtA1VRUFUVIaXsbwZRY5RuKNbwaXToNV6PMPJKF8LzmansLilCCIFf/93v9h2wJ6qi4C8lo4MD2Ls9matVWXRVJnJtv4NdtetQFBVF+YeVpTLQBwm23bGzszud7d2x1F7PRQwdsLqf+ncAISRWawJbvBvxnHGTWxHO0l0z2HupnLKqIowGI4qq/DtMhcvX0tF5loVL8kjJTCMrdw7uVSV0dpwjJyf7/2n8mUp/PwIDdQQF6fDv//qzvgP90Kr8N7+eQwAAAABJRU5ErkJggg==">Advanced PHP Interview Questions And Answers</A>
			<DT><A HREF="https://www.google.co.in/?gfe_rd=cr&ei=LainVZrUIufI8Aej2LOgDQ&gws_rd=ssl#q=php+important+questions+based+on+oops" ADD_DATE="1476447418" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-2n" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB5klEQVQ4jYWTzWsTYRCH9yLYePL/EAlisEQvtlC13irUVagHBUX0omAv3oQqHiooTeiiudTvtaiIVZGqlHoRtB+StrE9yYK0mw8ipLG7mcnjIdmYL8nA7/bOM/Obd8YwmsL3/T0iYqnqmqr6Va2KyDgQbn5fCyAkIgk6hIhYjuN0tUueBSh7HsXJh+TOD5HuP4B7KEru7Ek2n05Q9rwAMtMACSqru07ujInbG2mr/PDF+k7Ga56DytnTg7i9EdJH9lO4F8P/Po+fXKSQiJM9NYA4P5sdhQ0RsQBK83fIDOzD7evGTy60mldtN4+4oaprAPIlgvcqRPHBhU5zrGNqylBVH6D0cQel6W2UM28aHvWMFFp01f4TALx/gA+hCiA91RFw5VEjYBXg9+ddZKd38nJx9L8tX3u+Rc9IgdGprQCwYlQ3jG/LNzlsH6XbHmTOXWpJTv1S+m5UOphNSTDEMQMIA3jic/ztJfY+OUbUNrm9MMHXjSRz7jJ3kzb99y0OXs9zLlGkXK5APc/bHSySBbCxmcGsQtrJfHGL9Xw5qB6rbaLjOF0iMgPgqc/jH68Zej9M9JlJ1DY58e4yiaVJiqWtIPkTsL3hHqoQq8PXIyKxluSmwwqLSFxVU6rqVbUiImM1z3XxF/9k+3A9su/8AAAAAElFTkSuQmCC">php important questions based on oops - Google Search</A>
			<DT><A HREF="http://php-best-10.blogspot.in/2010/02/advanced-interview-question.html" ADD_DATE="1476447418" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-2z" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAiUlEQVQ4jWNggIJ/aUz/ScEMyIBUzSiGkKsZbgiG4L6+//++vfv/798/BD637v+/IiEiDNjXh6oRGd/aR4QByDbPi4NgZLEmIwIGwBSuykOIzYtDiG9qwjAEuwGEMO0NQPYCDK/KI8IAbIEIwzDxb+/IjEYY3tdHRkKC2YymGbsB9MwPFOVImD4AmSK780dhlOYAAAAASUVORK5CYII=">Best PHP: Advanced PHP Interview Question</A>
			<DT><A HREF="https://www.thesoftwareguy.in/35-important-interview-questions-answers-php-freshers/" ADD_DATE="1476447418" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-36" ICON="data:image/png;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA/4QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAREQAAAAAAABERAAAAAAAAEREAAAAAAAAREQAAAAAAABERAAAAAAAAEREAAAAAAAAREQAAAAAAABERAAAAAAAAEREAAAAAAAAREQAAAAEREREREREQARERERERERABEREREREREAAAAAAAAAAAAAAAAAAAAAD//wAA/D8AAPw/AAD8PwAA/D8AAPw/AAD8PwAA/D8AAPw/AAD8PwAA/D8AAIABAACAAQAAgAEAAP//AAD//wAA">35 Important interview questions with answers - thesoftwareguy</A>
			<DT><A HREF="http://learnthat.com/89-php-web-developer-interview-questions/" ADD_DATE="1476447419" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-34" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAC30lEQVQ4jY2Ra0hTcRjG/07TzRMenRMVk6bTwrxk2kXN3NBSyUwqL3lvury7zGJTcXEWFiWYlcw11JrT4+XIRPO2KTn0S1SWqVRUEEElIgRGFrrp3j4oFmxRz+fn9+N9eBEyF4KgEQTPiiAQLVHUKm6oKHrdcrVs7DIhj9ws0MxypgHrlDzJNxCjNyC1f1aSV0wihBCPh6z+RlgghNC5OnUIQdY1qMbkMZ65fWRjeQY0izIgWPiwdKOWZGkeJwgaQmCdXSv98OMrPktpT3yKvvbdz67kRald6at0HYDVRucf2S/suintFEBRXfkoQvB/ewHAoqpjzrl2aNEFdDo6igD/vdLZi7H3JqrDKwYdQJG3rYZ661ammHJNoijTCQALmF9h7zv7VLWRzaemqSbKw7VGAy73p/QBlYMnffPU9U5Z/ctOZ8klPEnlYSpYmMHY/O5l18yuVsbp9kSZ6rGPz6X+2+5izejE0y/ubH73OJ6qBqdUcg1PUXI2KYvfgqkBW28BpY+RaLJA94C+q1g7m1Y96g0IMbgV2jugI+hHRMMar/z+dXqsnG16wYwW4+RShsjKIX7whb4bDjnj4FvQOxldrW0OkzwB+cBLt6iqkQBmKmVEEQ0eZi/YU6A2xF3RZoeWD1z3E44ZA0v6ILB0AHYXDev3CfsLyuqn7ZnJqnXEk3mZFfgX9up54pH87NpHHE9B3yqeRBpsEpSrWNogcEWDRTFVmiA8pRvQ1oQ/BVoVxsnpWY2sGBIAQjTnNPKjVUI74IltP3fw1XMS8nkwO71zknG8zUg3K1iYwTiCniWXTIpyTG4X4WdUK/T4NiPrVOt80PmeW+6J5Hvbo0rAuAq9TdhdM19YXNy+M6vrs2UcCbbxHcA41gS2kQqgcxXA4CmBflgBWIhsHTsoW0P+9Z6mAljAfDI65/FY5RorumWFGdVsZPIU4MhVGB3D5QZWqHyNdUhuZB2QGXD/xi3BLwFdSkNnDRspAAAAAElFTkSuQmCC">89 PHP Web Developer Interview Questions | Learnthat.com</A>
			<DT><A HREF="http://school4php.blogspot.in/2011/10/100-php-interview.html" ADD_DATE="1476447419" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-32" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAiUlEQVQ4jWNggIJ/aUz/ScEMyIBUzSiGkKsZbgiG4L6+//++vfv/798/BD637v+/IiEiDNjXh6oRGd/aR4QByDbPi4NgZLEmIwIGwBSuykOIzYtDiG9qwjAEuwGEMO0NQPYCDK/KI8IAbIEIwzDxb+/IjEYY3tdHRkKC2YymGbsB9MwPFOVImD4AmSK780dhlOYAAAAASUVORK5CYII=">Advanced PHP: 100 PHP Interview Questions and Answers</A>
			<DT><A HREF="http://www.woodstitch.com/resources/php-interview-questions.php" ADD_DATE="1476447419" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-38" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACF0lEQVQ4jZWT32tSYRjHn+OvuaPTOGpz6mpabWubGmXJjmmvQkTsIiLMsQaBRlAQbS0QyrGmx8Au+nHprZTsZnSzvAkjd8T/whv/iHX57eLkmXZm0AsPvO/3+fJ5eJ/3fYiIMCp809PIZDKoVCqoVquo1+vodDo4+nWE/qJ/AUYFz/PI5XLo9Xogm8sMqzB2olGv12PcenLOKoxhZtYDSr8KovAtDqPRoDHNR90Q781odKPJiO1GAunXQZB/yQlJZginvBrj6k4IT6tRjR5OeSC1kwiEXEoPNmoisu+vDJnMvAlvvjNIMoPLNzGQ4/Dw3WW8+CKCiFMAsbQf0iGD4LaqxsjtaZRlBXAze0HV7Q4eUiuJG2uBvkaw2MzYbQ4aOeQ+RvByL4bshwi29kQVkFgNoPSTwSaMHwOICPe3g8jvXwfHcTh12gKpxZBcP4dQyoOyzHB20QEiwvPaMtbfXhq8rrIJhF0oywxz1ybBHpxXqxiMBhQOErizuQDfnACpzbAgTmkBRITNzyLWimFs1MShKivP5lE4SODu1hLyX+PQ6XTHAI7j1EM8E0CpxSC1GS4uu1V9ym+H1E6i1Eri1uPZ4WdtNpvwepU/YLWbsfuDIb//VxUiPKlGUZYZnN6JYQAAdLtdOBxKkzI74aFn68fVlTN49Cmi/db9qSoWi3+a6YQwadEYzbwJizHPaECj0fjvqSQi/AZlS4YjlCV4QAAAAABJRU5ErkJggg==">PHP Job Interview Questions And Answers</A>
			<DT><A HREF="http://www.gkseries.com/computer-engineering/php/introduction-to-php/introduction-to-php" ADD_DATE="1476447419" LAST_MODIFIED="1482499574" ICON_URI="http://icon.xmarks.com/ix1rvsed-37" ICON="data:image/png;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAABAAAAA2nIoAMo19ABs0MABK5soAH0M9ABclIwAvfnAAJ2BWAEbXvQBCyLAAK29jAD66pAAjUUkAExYWAE711wAAAAAA7u7u7u7u7u7u7u7u7u7u7ubd3dbt3uzb7NTE3O3ejS7s2+vc7d6tDuzb69zt01Lu7Nvr3O3R0e7s2wTc7dJT7uzbHdzt3W7u7Nvu7u3VLu7s2+O57dHQ7uzb69zt2NTu7Nvr3O3efb7s3d3c7d69zuDMzMDszufD7u7u7u7u7u4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA">Chapter-wise PHP Multiple Choice Questions and Answers</A>
			<DT><A HREF="http://www.withoutbook.com/OnlineTestStart.php?quizId=8&quiz=PHP%20Online%20Practice%20Test%20|%20Online%20Exam" ADD_DATE="1475883182">PHP Online Test | Online Quiz | Mock Exam</A>
			<DT><A HREF="https://www.youtube.com/watch?v=1Cy9dmEkjZA&list=PLYk7LaYGKNhmi0SXHjC_L_GYpnFXqJGCM&index=3" ADD_DATE="1475883182">EXPLAIN CONSTANT IN CLASS - YouTube</A>
			<DT><A HREF="https://www.youtube.com/watch?v=8Z0eODlaXcA" ADD_DATE="1475883182">PHP interview questions and answers by Nishant Kumar - YouTube</A>
			<DT><A HREF="http://phpinterviewquestions.co.in/" ADD_DATE="1479117480" LAST_CHARSET="windows-1252">PHP Interview questions and answers for freshers</A>
			<DT><A HREF="http://www.navnishbhardwaj.com/php-interview-questions-answers/" ADD_DATE="1479117480">PHP Interview Questions Answers - | #TechnoQA</A>
			<DT><A HREF="http://www.web-technology-experts-notes.in/2014/01/oop-interview-questions-and-answer.html" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-u" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAfklEQVQ4je3P0QqCMBhAYd//tYoggkSEjOhCUFSGjqZ/20S302UPUFAXngf44CR8WLIB/wKUxlMMliVEMiXkSthVD47NiF8DRW85dxOX/sldW9YYaWR+A9Xo2dcG7RaugyXthFM7kSvhpi2H2pApQbuFVmZChNK4Ly5swI+BFwve9adzfAyUAAAAAElFTkSuQmCC">OOP Interview Questions and Answers | Web Technology Experts Notes</A>
			<DT><A HREF="http://www.itechaleart.com/2013/06/top-50-oop-interview-questions.html" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-16" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABw0lEQVQ4jZXTy2oTYRTA8WxdlLgRXBREXyC41FeQgiK+Q3El6gu4FurCjUJxI6hYtQFbaGq8JE1JhwQvaTvJFJNKTE1iZzKZyXzzTWaS7+9CEANJSs7yHPhxLpwYU0IpNa0MQGxc0nEcyuUynucRBMHsQCaTIZ/PU6vVaDQaSClnA1KpFMnVN2xlP/GlWMBxurMBpnnMsxfPSb5+xYd3m7ON4LouD5eW+L6+RtMyEULMBuhGmfiZsywuXKF+9AsA4U9GRgAhBN++lrh3c5Fbd+7yuVAEoLC9jXncOhmwLIuNjU0e3LjO2vIT+r5gqBTdjs36ygpqMJgOhGHIVjbL/oHBbqlE17YI+n0816W4swNDxfCkHbTbbYxKhWrFoOf28IXgqKJz/9pVXj56DDCCjD3j29Uk9cMfiJ6H3bXZz2VYjp+il7hIZ/48Yb2O+h9QSuF5Hq1Wi2q1SjqdxjJNojBC+j4HuRy3T8/BpcuEF87R1yv/uogBRFFEp9PBMAw0TUPTNIQQDAYDZBDwe6/E01gMEgnkXBxfL492ACClxHEcms0muq4jpUQIgQwkkRDYe7v03n9E/jzk7y3U5B1MinHP/QfhM7wmSaDL3wAAAABJRU5ErkJggg==">Top 20 OOPs Interview Questions and Answers - itechaleart</A>
			<DT><A HREF="http://www.knowledgepublisher.com/article-694.html" ADD_DATE="1479117480">PHP Interview Questions and Answers</A>
			<DT><A HREF="http://skillgun.com/php/basics/interview-questions-and-answers/paper/274" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-2i" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAUCAYAAACEYr13AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QcRBikoTY8CGAAAAB1pVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAACk0lEQVQ4y42UT4iVZRTGf+fOzVIjpkBmEURdiKho0apNUlEUOvoRLVpIBIFNCTpSpkwStGjjwkybRTAEYlAw7bp9FlQ6079FLly0qIbo2mowNHC+OxMz3/ue87SYP3a7TXrW5/k9zzmc94X/qRfO7OFaZddqGJnee1M31Xd3/a+hbqQt3ai3VJGGHIZMzDfXFU7tY+KxcZL7ZOCFI1xBRsSqszHSWNd6Hnaf3XuPKx6v5UoEiaBWAAj4Ezi9LmBi5zigUwnfXMstxbI4K5BkwDlgtg/wyjeHAHj57OhEzv5QHa4sp8apFbjQyuZOdoqyd4mvfTvG0a1HGJ0+sH9urvvOlarCb23awkCm6zVVJJICM/NOUTYBehIc3XqEg98dHpFxPBoyb2LJnKygJsgKYQbwNkCrvaMXcPj7N3aF4r2sjG1qqHnbjXgDarlShMSyXNK7AJ2i7AUkxfkcrhxOUligA1n+ZK24lAhbcf/ZzC632sP0jTDYGPw1k5XlJPnv7ac+ODa9/eMvFyOfiKtXdx5IneL0f1/iS1OjSwuxuKHyRaq8eMdcpI0LkX5I0qCZCXizU5RvrfavJdj39asAZOX5OhxXlEuKPSHNuBhcsTLgx38argHGHzm2vIfwSDiCsUCv1wSBZLIZ4PZOUX7Sau/oB+z6avcygLg5pM/mfelgUpAUjtmY4P5OUc622sN0inINsPaYPnri/ZUR/IY60nRCh2rpsuDhC0U5A3BXe5jV5fUlAHjuixc31PLZytOVLP2U8ft+K8qZ1cgX/iXuA3SjvjPQ8w2zVgO2/7Lz00sPlE/3RF7/Q/nwGbulOfDgvZvtj00D5lPbJi9yHXU1gdnGKvuZc5W3prZNXnz082evR8/foO6H35OR5TQAAAAASUVORK5CYII=">php basics interview questions and answers paper 274 - skillgun</A>
			<DT><A HREF="http://www.programmerinterview.com/index.php/php-questions/php-interview-questions-and-answers/" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-2j" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACvElEQVQ4jYWTWUiUcRTF///vM3O0PW2TjFFnpnTmyxk11zSlcdSZdlJbqJxKQcWyIiMrzZxqMlEzHG2lTWyjomyjMKwgWogoCooeessnH6q36NeDFhVWDxcu3HvPPXDOEUIIBispJYpUEUIwZIg/yYkpROgjf5tLKRF/AxBCoEoFU6SJgsUFlJeW417pRjNrjBk95te9wY9Dxo4lJSEBp8PBPKeTHLsdp8PBfJeLbLsdc1Q0w4OG9QPIH5QUBSklAQEBxMfGkZaUSHpSEjaLhThtOlazmfiYGNKSksnNcmCzaIMz0AUGokVp5DkXUFpWyobSlVz1eejy1VNduYWi1cUUzJ3PVL0BETJyJBOCx2E0TCPeFk+qLYYbp9qYFT2FhroqHjy8SVt7PQe8NTTXbeVIq4cnT29TsX4NoeOGIQqXuvF6fXgajtPs68DX1MK9M+08On+Q04c8tLc2Ubd5A4/OtdHTeYDyiiIunj7KzZbd9BxpRBSv3ciTZ+85f6UH37EL7PE2YTWbcS9ZxJXD9by9dYlP717y7UsfXz/30vfiDu/uXqayuJCs1ETE5IlhWC1WDPoItGgzJqOR9IzZNDXuo2TZIiIjDByuraH3cScf75+gZdNWwkKn/CGjFNhsNlwuF1NNJiZNCsWZncnJ1hrydxyievoK3sSa+WDRU5+az3gtA1VRUFUVIaXsbwZRY5RuKNbwaXToNV6PMPJKF8LzmansLilCCIFf/93v9h2wJ6qi4C8lo4MD2Ls9matVWXRVJnJtv4NdtetQFBVF+YeVpTLQBwm23bGzszud7d2x1F7PRQwdsLqf+ncAISRWawJbvBvxnHGTWxHO0l0z2HupnLKqIowGI4qq/DtMhcvX0tF5loVL8kjJTCMrdw7uVSV0dpwjJyf7/2n8mUp/PwIDdQQF6fDv//qzvgP90Kr8N7+eQwAAAABJRU5ErkJggg==">Advanced PHP Interview Questions And Answers</A>
			<DT><A HREF="https://www.google.co.in/?gfe_rd=cr&ei=LainVZrUIufI8Aej2LOgDQ&gws_rd=ssl#q=php+important+questions+based+on+oops" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-2n" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB5klEQVQ4jYWTzWsTYRCH9yLYePL/EAlisEQvtlC13irUVagHBUX0omAv3oQqHiooTeiiudTvtaiIVZGqlHoRtB+StrE9yYK0mw8ipLG7mcnjIdmYL8nA7/bOM/Obd8YwmsL3/T0iYqnqmqr6Va2KyDgQbn5fCyAkIgk6hIhYjuN0tUueBSh7HsXJh+TOD5HuP4B7KEru7Ek2n05Q9rwAMtMACSqru07ujInbG2mr/PDF+k7Ga56DytnTg7i9EdJH9lO4F8P/Po+fXKSQiJM9NYA4P5sdhQ0RsQBK83fIDOzD7evGTy60mldtN4+4oaprAPIlgvcqRPHBhU5zrGNqylBVH6D0cQel6W2UM28aHvWMFFp01f4TALx/gA+hCiA91RFw5VEjYBXg9+ddZKd38nJx9L8tX3u+Rc9IgdGprQCwYlQ3jG/LNzlsH6XbHmTOXWpJTv1S+m5UOphNSTDEMQMIA3jic/ztJfY+OUbUNrm9MMHXjSRz7jJ3kzb99y0OXs9zLlGkXK5APc/bHSySBbCxmcGsQtrJfHGL9Xw5qB6rbaLjOF0iMgPgqc/jH68Zej9M9JlJ1DY58e4yiaVJiqWtIPkTsL3hHqoQq8PXIyKxluSmwwqLSFxVU6rqVbUiImM1z3XxF/9k+3A9su/8AAAAAElFTkSuQmCC">php important questions based on oops - Google Search</A>
			<DT><A HREF="http://php-best-10.blogspot.in/2010/02/advanced-interview-question.html" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-2z" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAiUlEQVQ4jWNggIJ/aUz/ScEMyIBUzSiGkKsZbgiG4L6+//++vfv/798/BD637v+/IiEiDNjXh6oRGd/aR4QByDbPi4NgZLEmIwIGwBSuykOIzYtDiG9qwjAEuwGEMO0NQPYCDK/KI8IAbIEIwzDxb+/IjEYY3tdHRkKC2YymGbsB9MwPFOVImD4AmSK780dhlOYAAAAASUVORK5CYII=">Best PHP: Advanced PHP Interview Question</A>
			<DT><A HREF="https://www.thesoftwareguy.in/35-important-interview-questions-answers-php-freshers/" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-36" ICON="data:image/png;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA/4QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAREQAAAAAAABERAAAAAAAAEREAAAAAAAAREQAAAAAAABERAAAAAAAAEREAAAAAAAAREQAAAAAAABERAAAAAAAAEREAAAAAAAAREQAAAAEREREREREQARERERERERABEREREREREAAAAAAAAAAAAAAAAAAAAAD//wAA/D8AAPw/AAD8PwAA/D8AAPw/AAD8PwAA/D8AAPw/AAD8PwAA/D8AAIABAACAAQAAgAEAAP//AAD//wAA">35 Important interview questions with answers - thesoftwareguy</A>
			<DT><A HREF="http://learnthat.com/89-php-web-developer-interview-questions/" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-34" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAC30lEQVQ4jY2Ra0hTcRjG/07TzRMenRMVk6bTwrxk2kXN3NBSyUwqL3lvury7zGJTcXEWFiWYlcw11JrT4+XIRPO2KTn0S1SWqVRUEEElIgRGFrrp3j4oFmxRz+fn9+N9eBEyF4KgEQTPiiAQLVHUKm6oKHrdcrVs7DIhj9ws0MxypgHrlDzJNxCjNyC1f1aSV0wihBCPh6z+RlgghNC5OnUIQdY1qMbkMZ65fWRjeQY0izIgWPiwdKOWZGkeJwgaQmCdXSv98OMrPktpT3yKvvbdz67kRald6at0HYDVRucf2S/suintFEBRXfkoQvB/ewHAoqpjzrl2aNEFdDo6igD/vdLZi7H3JqrDKwYdQJG3rYZ661ammHJNoijTCQALmF9h7zv7VLWRzaemqSbKw7VGAy73p/QBlYMnffPU9U5Z/ctOZ8klPEnlYSpYmMHY/O5l18yuVsbp9kSZ6rGPz6X+2+5izejE0y/ubH73OJ6qBqdUcg1PUXI2KYvfgqkBW28BpY+RaLJA94C+q1g7m1Y96g0IMbgV2jugI+hHRMMar/z+dXqsnG16wYwW4+RShsjKIX7whb4bDjnj4FvQOxldrW0OkzwB+cBLt6iqkQBmKmVEEQ0eZi/YU6A2xF3RZoeWD1z3E44ZA0v6ILB0AHYXDev3CfsLyuqn7ZnJqnXEk3mZFfgX9up54pH87NpHHE9B3yqeRBpsEpSrWNogcEWDRTFVmiA8pRvQ1oQ/BVoVxsnpWY2sGBIAQjTnNPKjVUI74IltP3fw1XMS8nkwO71zknG8zUg3K1iYwTiCniWXTIpyTG4X4WdUK/T4NiPrVOt80PmeW+6J5Hvbo0rAuAq9TdhdM19YXNy+M6vrs2UcCbbxHcA41gS2kQqgcxXA4CmBflgBWIhsHTsoW0P+9Z6mAljAfDI65/FY5RorumWFGdVsZPIU4MhVGB3D5QZWqHyNdUhuZB2QGXD/xi3BLwFdSkNnDRspAAAAAElFTkSuQmCC">89 PHP Web Developer Interview Questions | Learnthat.com</A>
			<DT><A HREF="http://school4php.blogspot.in/2011/10/100-php-interview.html" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-32" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAiUlEQVQ4jWNggIJ/aUz/ScEMyIBUzSiGkKsZbgiG4L6+//++vfv/798/BD637v+/IiEiDNjXh6oRGd/aR4QByDbPi4NgZLEmIwIGwBSuykOIzYtDiG9qwjAEuwGEMO0NQPYCDK/KI8IAbIEIwzDxb+/IjEYY3tdHRkKC2YymGbsB9MwPFOVImD4AmSK780dhlOYAAAAASUVORK5CYII=">Advanced PHP: 100 PHP Interview Questions and Answers</A>
			<DT><A HREF="http://www.woodstitch.com/resources/php-interview-questions.php" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-38" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACF0lEQVQ4jZWT32tSYRjHn+OvuaPTOGpz6mpabWubGmXJjmmvQkTsIiLMsQaBRlAQbS0QyrGmx8Au+nHprZTsZnSzvAkjd8T/whv/iHX57eLkmXZm0AsPvO/3+fJ5eJ/3fYiIMCp809PIZDKoVCqoVquo1+vodDo4+nWE/qJ/AUYFz/PI5XLo9Xogm8sMqzB2olGv12PcenLOKoxhZtYDSr8KovAtDqPRoDHNR90Q781odKPJiO1GAunXQZB/yQlJZginvBrj6k4IT6tRjR5OeSC1kwiEXEoPNmoisu+vDJnMvAlvvjNIMoPLNzGQ4/Dw3WW8+CKCiFMAsbQf0iGD4LaqxsjtaZRlBXAze0HV7Q4eUiuJG2uBvkaw2MzYbQ4aOeQ+RvByL4bshwi29kQVkFgNoPSTwSaMHwOICPe3g8jvXwfHcTh12gKpxZBcP4dQyoOyzHB20QEiwvPaMtbfXhq8rrIJhF0oywxz1ybBHpxXqxiMBhQOErizuQDfnACpzbAgTmkBRITNzyLWimFs1MShKivP5lE4SODu1hLyX+PQ6XTHAI7j1EM8E0CpxSC1GS4uu1V9ym+H1E6i1Eri1uPZ4WdtNpvwepU/YLWbsfuDIb//VxUiPKlGUZYZnN6JYQAAdLtdOBxKkzI74aFn68fVlTN49Cmi/db9qSoWi3+a6YQwadEYzbwJizHPaECj0fjvqSQi/AZlS4YjlCV4QAAAAABJRU5ErkJggg==">PHP Job Interview Questions And Answers</A>
			<DT><A HREF="http://www.gkseries.com/computer-engineering/php/introduction-to-php/introduction-to-php" ADD_DATE="1479117480" ICON_URI="http://icon.xmarks.com/ix1rvsed-37" ICON="data:image/png;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAABAAAAA2nIoAMo19ABs0MABK5soAH0M9ABclIwAvfnAAJ2BWAEbXvQBCyLAAK29jAD66pAAjUUkAExYWAE711wAAAAAA7u7u7u7u7u7u7u7u7u7u7ubd3dbt3uzb7NTE3O3ejS7s2+vc7d6tDuzb69zt01Lu7Nvr3O3R0e7s2wTc7dJT7uzbHdzt3W7u7Nvu7u3VLu7s2+O57dHQ7uzb69zt2NTu7Nvr3O3efb7s3d3c7d69zuDMzMDszufD7u7u7u7u7u4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA">Chapter-wise PHP Multiple Choice Questions and Answers</A>
			<DT><A HREF="http://programmers.stackexchange.com/questions/55854/interview-questions-in-oop?rq=1" ADD_DATE="1476447419" LAST_MODIFIED="1476447419" ICON_URI="http://icon.xmarks.com/ix1rvsed-33" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABcUlEQVQ4ja3PsYoaYRSG4VPogJ2d6AXI3oBgOc0MgzCChUiCyEyzLLvl3sCylZ07zcKAoGA6y8Q6hB8kF2FhiEbCVDY6M+L/ptphA6sSNh+c7pyH74j8z6xvboiCgHchvx8eiB4f+X53x5erK9T19WUwen4+ufTZsvhkmueR6OmJH67Lzw8f+XV/T3R7yzfHyY6++v773vqnWJaF7/t4nkev16PT6dBut6nX61Sr1fNNWq0Wg8GA19lutywWC5RSNJtNGo3G24ht2/T7fcIw5Hg8kqYpaZpyOBwyYDQaYdv2aUBEZDgcorUmSZJsXoAgCE4DpmnieR5hGKK1Jo7jDEjTFKUU4/H4NCAiUqvVmE6nAH81SJIEpRSTyeQ8ICLiui77/T47jOM4azCbzS4DjuOw2+0A0FqjtQZAKYVS6jLQ7XaZz+csl0vW6zWr1YrNZnO+gWEYGIZBPp+nUCiQy+UoFouUy2VKpRKVSuXNERH5A+OVSIxr3NrHAAAAAElFTkSuQmCC">php - Interview Questions in OOP - Programmers Stack Exchange</A>
		</DL><p>

		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482759415">Php</H3>
		<DL><p>
			<DT><A HREF="http://php.wudi.in/" ADD_DATE="1475883180">PHP Manual</A>
			<DT><A HREF="http://stackoverflow.com/questions/2973202/mysqli-fetch-array-mysqli-fetch-assoc-mysqli-fetch-row-expects-parameter-1?rq=1" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-ga" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHElEQVQ4jZ1QLU8DQRDdhJSZURU1mFMVlXWIJrUklQgkrqm4y+5MVR0C1z9BmpAK+AHnMKfwJPyAUw3Jfcz8gSLgcNdueMmInZ335s1zLgJVSknMXC9MsGgDLv8vwDAxpkPrYRxNagMuVWDRvTVApkzvr3fuIm5roJkKliaw7UjKmCvjQ7z1zI2UMTfBokop+UrdlTEd1A+u+617GKvgzgLN/npMm98MbppweauCj70C9coNlWFtjJ/G+KEBsnrlhrXHuQqWxjCJPqH2OFfGvTI1Krhr/GB6/m7BQhn3LdNGBRZVSslPFrCOEmj8YKoB701gq4y5CpbK1Jjg20ni0/PLsddV5kZd8r1z3YcJHfsqSuAcTgrEVsyiaHwDeSy1MkMyrCcAAAAASUVORK5CYII=">php - mysqli_fetch_array()/mysqli_fetch_assoc()/mysqli_fetch_row() expects parameter 1 to be resource or mysqli_result, boolean given - Stack Overflow</A>

			<DT><A HREF="http://php.net/manual/en/function.ctype-digit.php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gb" ICON="data:image/png;base64,Qk02AwAAAAAAADYAAAAoAAAAEAAAABAAAAABABgAAAAAAAADAADEDgAAxA4AAAAAAAAAAAAAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICA19fXAAAA19fX19fXwICAwICA19fXwICAwICA19fX19fXAAAA19fX19fXwICAwICA19fXAAAAAAAAAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAAAAAAAAAA19fX19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXwICA19fX19fX19fXwICA19fXAAAA19fX19fXwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA">PHP: ctype_digit - Manual</A>
			<DT><A HREF="http://stackoverflow.com/questions/13411839/get-html-translation-table-expects-at-most-2-parameters-3-given" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix1rvsed-35" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHElEQVQ4jZ1QLU8DQRDdhJSZURU1mFMVlXWIJrUklQgkrqm4y+5MVR0C1z9BmpAK+AHnMKfwJPyAUw3Jfcz8gSLgcNdueMmInZ335s1zLgJVSknMXC9MsGgDLv8vwDAxpkPrYRxNagMuVWDRvTVApkzvr3fuIm5roJkKliaw7UjKmCvjQ7z1zI2UMTfBokop+UrdlTEd1A+u+617GKvgzgLN/npMm98MbppweauCj70C9coNlWFtjJ/G+KEBsnrlhrXHuQqWxjCJPqH2OFfGvTI1Krhr/GB6/m7BQhn3LdNGBRZVSslPFrCOEmj8YKoB701gq4y5CpbK1Jjg20ni0/PLsddV5kZd8r1z3YcJHfsqSuAcTgrEVsyiaHwDeSy1MkMyrCcAAAAASUVORK5CYII=">php - get_html_translation_table expects at most 2 parameters, 3 given - Stack Overflow</A>
			<DT><A HREF="http://php.net/manual/en/language.oop5.php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gd" ICON="data:image/png;base64,Qk02AwAAAAAAADYAAAAoAAAAEAAAABAAAAABABgAAAAAAAADAADEDgAAxA4AAAAAAAAAAAAAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICA19fXAAAA19fX19fXwICAwICA19fXwICAwICA19fX19fXAAAA19fX19fXwICAwICA19fXAAAAAAAAAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAAAAAAAAAA19fX19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXwICA19fX19fX19fXwICA19fXAAAA19fX19fXwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA">PHP: Classes and Objects - Manual</A>
			<DT><A HREF="http://www.lynda.com/PHP-tutorials/Object-Oriented-Programming-PHP/107953-2.html?srchtrk=index:1%0Alinktypeid:2%0Aq:php%0Apage:1%0As:relevance%0Asa:true%0Aproducttypeid:2" ADD_DATE="1475883181" LAST_MODIFIED="1482432208" ICON_URI="http://icon.xmarks.com/ix0osyrz-ge" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACrUlEQVQ4jXWTb0jUBxjHv/f73d3vx1kiGtkiHHLTFtHqMJgSBrIXDsa2osGgIxxjWmsviiCMrdrswqDYi9q9cOnZ7oW9WFGKQ8mUXuj55/TywnVj0KHZizsjsePaCx3y6YXitNmLz5uH5/vleR6+jwDH/xiTl3HTT6KomcdbQoybNUTdO/ld5pu9WlMYsYuJGyHGNcdfYqpLtDS+zyeV4kCV5n48ZoSIWN71DYZcHxJTkj8FcfGkXVy+UEtycoZdH+xFErYlDn2k5Ey3s2KtwUO9y6iSxAWjgoeiJeBlavo5CwvzxONxysvLkYQkjh7UJAPW9v8Mho0QjwRRwZiY6rRpbDjB3bsdtLa20t7eTiKRwOfzkZ+fT94GcTNghPlVLhGxvAwrQ1QwvGTyrMOg/tRXZLOvmJ6eJp1Ok0qlCAQClJWVIYnD1coSde8UA/ITEwwtMyKm7oiqyt30DwyQzWYBWFxcpKenh8LCQiRRWiSiv8kvxrZeZVQwuMyQSHeKglyThgsBZmdnAZifn6epqQmHw4Ek3C7RcSWnT4xu+4WYILLMoPi3X/jeE7v2VHAt2Mz5nxrJZDIEg8GVQ0ri1iX7gWLX5e9r3cHL+7n802fwsjePF72biDY7afhanPGLk1+6SaeeEYvFqDv6LV98XEz4nMh0mX4F6uTdV+7L/HzxGKHgaX6o/47PPq2m9nMPxES6Q0S7z9L5RxcTExOkUmn+TozQVL8x+/y2SgQ4DOmG2/LgdNkr472TL8Lfi6LN4pva45SWltLW1sbgYITKyv1IRnglB5JdLGly9X6mIVxOrdm5oKAAy7KQ9NSyliK9EmWn01khKbla8BYmJe1b95ls2y42DOOGpMw6woxhGGFJb3mmVViWVWKa5hGPx3MvJyfnvmmaNZa1lP03eQ3+oS8X4O4C1QAAAABJRU5ErkJggg==">Object-Oriented Programming with PHP | Lynda.com</A>
			<DD>Shows how to integrate the principles of object-oriented programming into the build of a PHP-driven web page or application.
			<DT><A HREF="https://www.google.co.in/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=prestashop+add+meta+tags+only+for+iphone" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gf" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB5klEQVQ4jYWTzWsTYRCH9yLYePL/EAlisEQvtlC13irUVagHBUX0omAv3oQqHiooTeiiudTvtaiIVZGqlHoRtB+StrE9yYK0mw8ipLG7mcnjIdmYL8nA7/bOM/Obd8YwmsL3/T0iYqnqmqr6Va2KyDgQbn5fCyAkIgk6hIhYjuN0tUueBSh7HsXJh+TOD5HuP4B7KEru7Ek2n05Q9rwAMtMACSqru07ujInbG2mr/PDF+k7Ga56DytnTg7i9EdJH9lO4F8P/Po+fXKSQiJM9NYA4P5sdhQ0RsQBK83fIDOzD7evGTy60mldtN4+4oaprAPIlgvcqRPHBhU5zrGNqylBVH6D0cQel6W2UM28aHvWMFFp01f4TALx/gA+hCiA91RFw5VEjYBXg9+ddZKd38nJx9L8tX3u+Rc9IgdGprQCwYlQ3jG/LNzlsH6XbHmTOXWpJTv1S+m5UOphNSTDEMQMIA3jic/ztJfY+OUbUNrm9MMHXjSRz7jJ3kzb99y0OXs9zLlGkXK5APc/bHSySBbCxmcGsQtrJfHGL9Xw5qB6rbaLjOF0iMgPgqc/jH68Zej9M9JlJ1DY58e4yiaVJiqWtIPkTsL3hHqoQq8PXIyKxluSmwwqLSFxVU6rqVbUiImM1z3XxF/9k+3A9su/8AAAAAElFTkSuQmCC">evice width</A>
			<DT><A HREF="https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Date" ADD_DATE="1475883181" LAST_MODIFIED="1482432208" ICON_URI="http://icon.xmarks.com/ix0osyrz-gg" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADW0lEQVQ4jWWTXUybdRTGn7cvpUXNEp1mMRov/Ig36J1Xu0SzGJmCrBq0QcB9gGHTgV/ZstlJDFLH3KCsMMrKGG0GE9bw4bZ2sNG1WxkTdANxMrxYCCLLoC0fo33f///xYh8B/V2d85ycc3PyAwDARgNsNgNW0kYVoAJAuVevgFRgaVudAYDJHn5BPTKWA9v5lP8NAah1w+/AdTN9dbr1qtFcFcww7w+7H7UHZ9WGP6i4J35Lbfpz9zPtk8++eHToqTU1kU8fqQpfNlcPEo03FtA43grnWCZso6kwV/S3pFVFaD50lWkV/TQ6hiXqxwnHBFE5NANb3xQqIzTtv0yTPSTh/J1o/Itw3SRqr/lg3neu31xxUZrLzy2nlQck9oXl8weHRUX/pPZdeJpv1A1ygzOiPbbXr5sqLkhD9bBE1S8JOEYkfhy6gtQ9p8+ay/uk6Ru/ZtjZKYu9I/J2PCl5n+W7S4LUufvUdYnN7RL2KxL2AYEDv0rYB4Iwft0VSN3rp2mnTy9xD1DXdJJkQhdM6oKz0Rij8Rhno3H+0D3G9O8vEXuCApWDRHkoBGOZL6B80cMnS326s2eEi4kkhZCUUlIIwVg8zjtzMc7FYqRMcnEpyTdrBwV2XaRqC4Zg3N4WMHzWyXUlP+lVbUNcWE7eX753ZHYuyvn5eS4uLnBmNkqSLGsbFdjhp3FXbwgpRd5Ayo4OoqBFz/r2Z05MRSmEpJCCQghqiSXenovz1t93mEgmeGn0Hz735VmBMj+Vz0+HoG72+NVtrTRs8eip77lk/7VJSZJ3k7pMajqvj0/z5cIW+Xjhca7/qlsaCjokin0CpWeIks4QlLymgKHAI9WCZg2WI/qmcr82NbMgHnxhu+OCxIYaach3C1gaNBT7dKXolI5PuiW2dYSgvN8QMFibNSXXpat5zUTuST5d2M7Suohwnbmhv1rk1RVLvZ5iPUq1oJXY2kXkt0ps8WnIPxEEcur6FKuXiqVOIPtwb8pHnkPIbbmFLA/x1jFiUwOVXDeVd53TyKk/DKu3B1ZPEh93E1ZvBNhY3Ym3a5zYWPvaAz2e+LB6TVr+CYv6wfFeZNWGkVmdh2zH2of+ZLvSYTlmh6WpC3j9wCur5FqpaYZjLTIOrnvY/1f5TPdL/wJnnBiu4uKDDQAAAABJRU5ErkJggg==" LAST_CHARSET="UTF-8">Date - JavaScript | MDN</A>
			<DD>Creates a JavaScript Date instance that represents a single moment in time. Date objects are based on a time value that is the number of milliseconds since 1 January, 1970 UTC.
			<DT><A HREF="https://www.udemy.com/topic/php-video-tutorials/" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gh" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABSUlEQVQ4jdWTTUsCURSGD/jr6t7u3QRSAyK0iCiihbjuLxT1C5JRRFsU3ttCCyKcFmmim2hAooVMqMsmaMb7tjJGx+lr14GzeA88Dxw4h4iIqEwpWVvelop1peITqTm+b/YuanyfqEwpodjpz6C5VjykFcX2osONqyyyl5mFwHo9ja3rzZkZCc0fpuGwdwBjDIquHYN3b3bgBz564+6sIBo6ow4ALBQUHk8A4GtBb9xNFBRd+z8Jqv1KTFDtV74XtIctAIDjNWOC2xcHANAetpIFtlsAABhjUHJt5J0c8k4OJdeGMQYAUJpbj4RmwTRY9TV4voekGr0NkWlYn7DQLCCpeTNqzDQsnD+dYfA6QDAJEJoQnu/h4lnFLlQo7pBUfPVPf6A5uFpKExGR0Pzo14IaO6ZoCcUtqdmdVDxMhBSfSMXuheLWlPsA25CLwNGv7nAAAAAASUVORK5CYII=">Online PHP Courses - Learn PHP on Udemy</A>
			<DT><A HREF="http://davidwalsh.name/create-zip-php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gi" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADf0lEQVQ4jX2Tf1DTdRjHn43+8OysrCztrm4dlqR1FtihmFOcTFHIgfuauGlx87YKAs44BEbrO+eaFwynCTjlh3qM/UCQjS02xq8TZGAUkAv1OvOyy0zPq84fJ9/P58PTH0ZH5fW+e+6e5+79fj9/vQD+K/H0ggCiv9YYjnswD/MBAIg4zhODOB2QPwpzucfhtSwdADfvIU/+IdHMY2Fiqjw9bU30o21xP62Txv2ap4o/Hy9NVa2VS4ul8pUaAMksAIA5z61IejYp45np3LyMnH27UxRZPg23HC3aRbhLlYJle3Jxi/xV1CheRlv+G5iRtuoXeDJ78VNzJHGhcCdu3Jb7PgDA/KPeUNTi6MSdmxZicfYrNGvdAuJ2ecjt3/9gHaE+odSwV9ilXHq/9N0lNFunvW6yHT838lXklkTyugS2F35mDV+5gSqV4p42c+nkDrWapK5fwS5d+I6dcjqpx+mk7PYtpkhPEvK3Suh7mxez8MAI7inhzQAAYDjpH6vrOc/eXPK0YC3XU5vdSZOSNxDdxybS5HJTt9tLvwwGqVy2nCiVqSRNsfW+vfaEYKqoGVuUmJkM5YGhawebXVPKNS+QEuN+Ul1bRyyWClJ6zEN1fBUJhML00jdn2cWJCVqkNxOb3Um87UFhKBJBvelAFMpbe25qC4umMt5eT2QKHelo89Dffo4ya80RUhkYoAXl1bTe4aEWaw1tbvHS4Ug/M1ts5FSrD90tvrtgbeu9Zqp3Yeba58n29AQ6Ggmzdn87HezrYv0hHwsG/fRDs13g8o0k6PezK6PD9Or3E6zNF7hTUGzUA3+8LdrQPTQlk62e3CxdQFtdJ+jFsQgrNNjoaa+PHqmuJfqyT0ld3zBzuZrp1dGztHTfQbosecdGAADILqt0dF6+gbsN+jtq9Qbhk2IjufnjOP16sIedG+ynpopK2jR+gRnsDtLh899rdNQz7f5jPwBATG8vPgKxb3EJJQe+uNvblYdNjQ1YVW2fUqo/mPx2JCIcth2aPNoVEeq7z7DxoQEcPRPEw42nMc9clQ8AwPP4gIfY2GUriwwaV8qWnMtma45QYCxAjbEWiw6dRGODG/eaPmf+cPf1d3bmhlcrcrX/x8IsmB2fMPslefVjklWBuS9K/TA/sSUmVqYAgCf+diGK/l0iRuTFyPMzERXNLEeeFyPyYo7jZiINfwIzx8eHOzrWaAAAAABJRU5ErkJggg==">Create a Zip File Using PHP</A>
			<DT><A HREF="http://james.cridland.net/code/google-calendar.html" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gj" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAq0lEQVQ4jc3SPQqEMBCG4Re9gOABBNuQo9gE7AM2Vh5CvIa1rbXnSOtZvm3WIKzsQtLsVJOEefI38DdRVZWygLIs8wAgC5C1VsMwyHuvrut+YsdxKG5a1/VVIIBxHOPYGHPHBOh9Xd0nY+6cuxbV933Mp2kSoHmeBch7/wx8O/a2bdr3XQBFUXwCbdsmPWQsWtc17yvP80wGBBBCSAOaphHAsix5zURmNybFC6BnSxPGBpw+AAAAAElFTkSuQmCC">Bits of PHP code - Google Calendar feed on your website - James Cridland</A>
			<DT><A HREF="http://thecancerus.com/how-to-get-latitudelongitude-from-an-address-or-geocoding-using-php/" ADD_DATE="1475883181">How to get Latitude/Longitude from an address (or Geocoding ) using PHP | theCancerus</A>
			<DT><A HREF="http://derickrethans.nl/obtaining-the-next-month-in-php.html" ADD_DATE="1475883181">Obtaining the next month in PHP — Derick Rethans</A>
			<DT><A HREF="http://www.script-tutorials.com/importing-multiple-rss-feeds-using-newswidget-jquery/" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gk" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAJ0lEQVQ4jWNgYGD4TyFm+B8UFEQWRjGAVJtHDRg1YLgaQFFmogQDADqCMQhX9eSjAAAAAElFTkSuQmCC">Importing multiple RSS feeds – using newsWidget (jQuery)</A>
			<DT><A HREF="http://www.justwebdevelopment.com/blog/ideal-payment-integration/" ADD_DATE="1475883181">iDeal Payment Integration | PHP Development | Web Development India</A>
			<DT><A HREF="http://php.net/manual/en/index.php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gl" ICON="data:image/png;base64,Qk02AwAAAAAAADYAAAAoAAAAEAAAABAAAAABABgAAAAAAAADAADEDgAAxA4AAAAAAAAAAAAAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICA19fXAAAA19fX19fXwICAwICA19fXwICAwICA19fX19fXAAAA19fX19fXwICAwICA19fXAAAAAAAAAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAAAAAAAAAA19fX19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXwICA19fX19fX19fXwICA19fXAAAA19fX19fXwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA" LAST_CHARSET="UTF-8">PHP: PHP Manual - Manual</A>
			<DT><A HREF="http://1000projects.org/designing-a-database-system-for-tourist-application.html" ADD_DATE="1475883181" LAST_MODIFIED="1482432208" ICON_URI="http://icon.xmarks.com/ix0osyrz-gn" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABwklEQVQ4jW2SUbFlOwhEj4VtIRZiIRawgAUsYAELWMACFmIhFtZ8ZN/z3tyaj65UUmFV0/CxbDSb6INnY/+Q5n7VWG2sNl73/vHcSNR9iEIzsPRfMiwNDUM9EC8kGom6AI3Gq9EovIzeAufhnIfei70n+ywOiz4LS2NFoZF8PH8K7ylRWBmch+rJsmB6sDyIWi94IuEsrx9AErVfSOPpcB5yL5YFFoV6sTzY+0I8jWX1n4PsjWUj0Vg6ew+yhWWJ1UazWBb0nnAeLJX5BXiRfW4L3ogbGYPci2HOsGRaomEcBpyJuDF+A8SL5Y2Ek/GwzyBK8BKyhXMmh4GX8qgzrfl4Fur5ApLpiYZzzngB65XiKSw3HvHrKPdvB8m0QsOAh+rFI7fgR0OT5TdUzeZj2Ygn2XeRbq/6jlF5xLAsNO6ExJtpyRBHY/OJ2lgWWZvlxdAb1gVcB+KJ5WZo8GjeP7mZXnzE8jvGocE0I0qAD70ny5QhznrdPXaDnpY8Gnws623hMNTwCrIX9Spbmeosb8YLuNNKhjof8UIsyX0Y6jzqb3D2V4AaFzBegHhdBxKJZX83UWN/A/u/xOsLmO9iTUv+AC7Cp3WLvq3xAAAAAElFTkSuQmCC" LAST_CHARSET="UTF-8">Designing a Database System for Tourist Application | 1000 Projects</A>
			<DD>The Database System for Tourist Application has been identified with the following modules: Tours, Flight Reservation, Hotel Reservation, Local Transportation reservation, Administration
			<DT><A HREF="http://php.net/manual/en/function.round.php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-go" ICON="data:image/png;base64,Qk02AwAAAAAAADYAAAAoAAAAEAAAABAAAAABABgAAAAAAAADAADEDgAAxA4AAAAAAAAAAAAAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICA19fXAAAA19fX19fXwICAwICA19fXwICAwICA19fX19fXAAAA19fX19fXwICAwICA19fXAAAAAAAAAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAAAAAAAAAA19fX19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXwICA19fX19fX19fXwICA19fXAAAA19fX19fXwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA" LAST_CHARSET="UTF-8">PHP: round - Manual</A>
			<DT><A HREF="http://php.net/manual/en/function.ceil.php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gp" ICON="data:image/png;base64,Qk02AwAAAAAAADYAAAAoAAAAEAAAABAAAAABABgAAAAAAAADAADEDgAAxA4AAAAAAAAAAAAAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICA19fXAAAA19fX19fXwICAwICA19fXwICAwICA19fX19fXAAAA19fX19fXwICAwICA19fXAAAAAAAAAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAAAAAAAAAA19fX19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXwICA19fX19fX19fXwICA19fXAAAA19fX19fXwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA" LAST_CHARSET="UTF-8">PHP: ceil - Manual</A>
			<DT><A HREF="http://www.killerphp.com/" ADD_DATE="1475883181" LAST_MODIFIED="1482432208" ICON_URI="http://icon.xmarks.com/ix0osyrz-gq" ICON="data:image/png;base64,AAABAAEAEBAAAAAAEgBoAwAAFgAAACgAAAAQAAAAIAAAAAEAGAAAAAAAQAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC40sm7r55yjIEAAAAAAACXqqDe3M1vc2eKkY0AAAAAAAAAAAAAAAAAAAAAAAAAAAC208dtYVEwQzsAAAAAAACNmZDt6NqEmYwaLCUAAAAAAAAAAAAAAAAAAAAAAAAAAACuzcJZT0QXIRvU1dW5wb9DQjlPOC1roKuJwdEAAAAAAAAAAAAAAAAAAAAAAAAAAADBzspESj8AAABSeG8iOS5LOC4ODwqElpy28f0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABYdm0PGRAaNiRbRDZfUkcAAACKn6Wv7v0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABJhXUOJBUTDQmKaVoeGxgfFBOj0d2M5vYAAAAAAAAAAAAAAAAAAAAAAADN1dNPjX0FNCEKDgYbFRI3JyAtNC56uMSB6Pll4PAAAAAAAAAAAAAAAAAAAAAAAABJg3MFLBgIGAwLDggHBgAgNzZnxNKB7P5e3e9N3e8AAAAAAAAAAAAAAAAAAACfu7IMLBsPHRINDwsIDAcPDgpNw9A03vdf4vJP4fFE3u8AAAAAAAAAAAAAAACZr6YWKB4SDg0MCgcOEA4LCgcRJyk64vQc0+wz2OxM3/BD2+0AAAAAAACzwLk7Wk8MBwUOBQMYFRAgIRwSFRAKAAAcTlEs5Po13/En1OpQ3u9U3O4AAACevbQ0n786OzsqPTklPj0dFRGbj44rIRsZTE8o1Oc74/ZG4/Ut2PImze0tx+emxL8/v8dh7P7M4+Kh+Px48/hnvMB+pKYzpK4e0e0i2fUozeg5xdllxNCOw8Ooy8i8z81pysww9v8/7/075/Uk5/go6/9P2OJgyct7xcmkzc3A0tHU2NgAAAAAAAAAAAAAAAAAAACSyMgr2eUW8P8k2OSJwL7S1tUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC/0c9+zcmzy8YAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+MAAA/jAAAP4AAAD+AAAA/wAAAP8AAAD8AAAA/AAAAPgAAADwAAAAwAAAAIAAAAAAAAAAAAcAAMD/AADj/wAA" LAST_CHARSET="UTF-8">PHP Video Tutorials For Web Designers - KillerPHP.com</A>
			<DD>Beginners PHP tutorial for web designers.
			<DT><A HREF="http://www.studytonight.com/cpp/defining-class-and-object.php" ADD_DATE="1475883181" ICON_URI="http://icon.xmarks.com/ix0osyrz-gr" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADXUlEQVQ4jU2TT0xcVRjFbyUudFE3hkYrZBAcYN68P/NmaIn/U4xJEVpAMDFhMXFjjFujQmfKZHhvxAaSttG0VqISGzVaDcbWXcmkRjZSalOaFChJtUILjRVCeffe9+49nwta2rP6Tr7zO7vD2Ka2McYq7t7Msqw9juOUHccRpmnyWCx21jTNF9l9VdxltmDGGGOGYTi2bX+bSqWU67pkGAY1NzdTNpsl27Yj27ZPmqZpPlC0yTqOE0un06Ou60aZTIZSqRRc11WGYWBiYkJzzlU+n0c8HqdMJhO6rvtZU1NTFWOMse3bH9nV2FC/YiYNamyoR6KxITISjbq6qgq9vb24fHkGw8PDKJfLekdlZZQ0EtjMNtx47NGHXdbe2T3Ttr+LWts75N59nWjd10ltHV149qU9+OKrMfz2+yQ+PXYcU9MX8NzLLXhtfxda2ztkW8fr1NbZM8X40hyFywtaLl+FXLpC8uY8wuUFyBuzgLgDtf4vdLAKHaxCLs1u/m5eRbiyoIPFWWKy5CjhOyQ8E3LkechDuyH8FIn+aqiZM4jOHYOeP4fo10GIXAzyIxfCd0j4DsmSA8aLhgqKSQr6Y1B/TSGcOIqgrxq8v0qrP8ehLp0BVua1OPoqgnwduGeBDybBiwZ40QDjnqm4ZxM/UK31rQWoCz8h6HsK/EANoskvQWEAdeUseK4GopQCzz2NYCBO3LOIeyYY92wV5OtInujWICLwNYgjryD44EmKfu7XBEB+/Rb4wWfA83WQ370L8Xn3pvcsMO6Z4ANxLT7ZCzH6BtSl04imT2HjnYcQnf8BICJRSumN93cQH3kBICI5lgXP1WjuWWDBoDVNfj2JsayUY1mtLo4jmj6F6HRB69vXoa9NQc+VtTjcAvy3CHX+e73x4U5Jwy4FxeQkC4d22dFA7XX68W2CWKeIiLC6CP3PRfAjLeC+AzVXhr79N9Qf34S8UE80YpP0rWvr+YTBGGPslp9+IsrtPBweagro5JskTnRTcDCueCEOXkwgyNUo7tlEXi2FfvJOWDJH1t+rrWSMMUYPjEn0PR4XuarRqFDHacgm4VkkPJPoY4dCLxmEQ6njawWj7l5+iyXGtlHP/TkHpfTuqGT9Ir3kWuibq5Fvjm8UkpktsIdV3IP/BwNOQgMpjLx7AAAAAElFTkSuQmCC">Defining Class and Object in C++ | C++ Tutorial | Studytonight</A>
			<DT><A HREF="http://it-ebooks.info/book/1030/" ADD_DATE="1475883181" LAST_MODIFIED="1482432208" ICON_URI="http://icon.xmarks.com/ix1rvsed-2l" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACSklEQVQ4jbWTyUvUYRyHXyjfzXcSOglCUIcgOgROF3X097Nc0sysFDVr0NRyKS1TsSxsMUoIOgWa4zauvybNxiU1l9K00calxnsknfoDun46jM1MpBBE3/vzwAOfLyH/4yx2skc3GIpnDiB7NAy6Qd1/R2aQHY/XkjC0cQUN6yY0rJvwwKPwxLMPzi81KJo8iG3ZiA4SNvKtygc+Wjeh/rPC3VWFW8sKNYsSFQsS9a6UrSXOjct+2OOF76wo1LoVql0S1+YlSmcFCqcFiifCf5doBl39BT/0KNz/pFC3onDzo0KVS6L8vUTJO4GCKQHrOEfWKEeEjez2CSpdoah2B6NuLRj31hRuLyvcWJKo/CBRNidR9FYgf1Lg/DhHhpMjsZNCM+gPn6DKHYzrSxJXFyRK5yQuzQjkvxGwvhbIHuJIH+A4+ZwhuYchwU5xpI1Ct3N/RsWiRPmCROmsxMUZgQsTAudGObKcHGf6OVINhqRuhvgOithWiuhmiug26heUzUuUzEoUTgvkjQvkjHBkvuI4/YLhRB/DsS6GuHYKvYUi+hlFZGMQYroCBJnDoSiYEsgdEzg7zJExyJHmYEjpZUjsZDjaTqG1UFg24cjGIMT00VqfQH9KVO6Y8va+9PYeD+jVbBSWpiAfnNa1988taAb7njUYglSDIbmbId7u7Y1ppogKgHOMQ9B7dlq2HJNmsK/Fw2bEdVDord7eqE0w1rYLVkc4tF56ars1E0IIMTeRkIS+EOT1H4bVYYbVYUZ6z35ovWz7P/iX+wk4O1GC0cf1SwAAAABJRU5ErkJggg==" LAST_CHARSET="UTF-8">Beginning Ajax with PHP - Free Download eBook - pdf</A>
			<DD>Ajax breathes new life into web applications by transparently communicating and manipulating data in conjunction with a server-based technology. Of all the server-based technologies capable of working in conjunction with Ajax, perhaps none are more s
		</DL><p>
	
------------------------------------------------------------------------------------------------------------------------
	
########################################### PHP Important Question and answers ###########################################

http://200-530.blogspot.in/search/label/OOP
http://200-530.blogspot.in/

http://www.web-technology-experts-notes.in/2014/01/oop-interview-questions-and-answer.html
http://www.web-technology-experts-notes.in/2015/05/php-frequently-asked-questions-and-answer-2015.html
http://www.web-technology-experts-notes.in/2013/05/PHP-Interview-Questions-and-Answers-for-Experienced.html
http://www.techflirt.com/tutorials/oop-in-php/abstract-classes-interface.html
http://www.web-technology-experts-notes.in/2015/04/php-mysql-interview-questions-and-answers-for-experienced.html

http://www.xpertdeveloper.com/2010/08/minimize-http-requests-best-practice-to-speed-up-your-website/
http://www.sunilb.com/php/php-5-tutorial-handling-exceptions-in-php5

<br /><br />
########################################### PHP Important Question and answers ###########################################

########################################### Youtube videos of PHP ###########################################

Youtube videos of PHP:-
	http://www.killerphp.com/articles/php-frameworks-explained/		{Zend Frame works}
	https://www.youtube.com/channel/UCxnUFZ_e7aJFw3Tm8mA7pvQ	{Durgesh Sahani}
	https://www.youtube.com/watch?v=DU7WBo3b0z8				{Compress to Zip}
	https://www.youtube.com/watch?v=xERSLDwIvlU&list=PUl6DxakCjDR5AfRwWhWNbMg&index=1	{PHP Tutorial - Admin Panel System [ Part - 1/6 ]}
		Refer->{Downloaded}https://www.youtube.com/watch?v=1UlGY1mNrCY&list=PLGCjwl1RrtcSk5kQrBKMfDaU7KQD1phY9&index=2
	https://www.youtube.com/watch?v=QjY-gnWlifA				{Comparting objects}
	https://www.youtube.com/watch?v=KdNLveuPj38&list=PLgHIDAq7xh6dZwZMD65V2ZSybyAdTaeP6		{SEO}
	*{Downloaded} https://www.youtube.com/watch?v=QTd5L5RgGSc&list=PL2nsdvImagM-M5zx1wxm2u8JR_qrTPtp0&index=1		{PHP MySQL Database Beginner Tutorial}
	*{Downloaded} https://www.youtube.com/channel/UCVd5QKIss6Kka504YFt06gQ		{Advance PHP with MySQLi Tutorial}
	*{Downloaded}https://www.youtube.com/watch?v=m_apixPGrvY&list=PL9ooVrP1hQOFB2yjxFbK-Za8HwM5v1NC5		{PHP & MySQL Tutorial}
	*{Downloaded}}https://www.youtube.com/watch?v=GLhBvvEjht4&list=PLA32F858B5A92DF2D&index=2				{Advanced Php Programming}
	*https://www.youtube.com/watch?v=54q1-oVpThI&index=3&list=PL11D2683FF69C635F				{Php and mysql based newsletter system }
	https://www.youtube.com/channel/UC8Nbgc4vUi27HgBv2ffEiHw/videos

	*{Wants to download pending}https://www.youtube.com/watch?v=qhf9rR64Pd0&index=10&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla
	https://www.youtube.com/watch?v=I4hhfQQ0kzA&index=16&list=PL_HlKez9XCSML_dt8GpEXFrgicUrdA43w
	https://www.youtube.com/watch?v=HPkXhxPXxwk&list=PLvVojG9m055JYOxin4a-LwW5ysr-70kht

########################################### Youtube videos of PHP ###########################################

############################################################################################################################################################

PHP - Multiple Inheritance in PHP:-
	https://www.youtube.com/watch?v=D7oDUnQmHTI
	https://www.youtube.com/watch?v=3nwHYBFJ_GU			{Interface }
	https://www.youtube.com/channel/UCkw4JCwteGrDHIsyIIKo4tQ	
	https://www.youtube.com/watch?v=SS-9y0H3Si8
	https://www.youtube.com/watch?v=xWirlNR623E
	https://www.youtube.com/watch?v=PjPxhlBRzoQ
	https://www.youtube.com/channel/UCYxM8wytrGYSAh46JM-7LsA
	https://www.youtube.com/watch?v=H1D2yD7xYYg			{PHP OOP Tutorials Static Properties and Methods}

############################################################################################################################################################

/*======================================================================

INR 72328
Credited to your A/c No
XXXXXXX0002 on 28/12/2016
through NEFT with UTR CMS510808904
======================================/**/

</pre>';
}
?>

</div>