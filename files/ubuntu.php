<?php $topic = 'Ubuntu'; ?>
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

	<!--
		Linux very thing is case sensitive:-
		pwd - Print workign directory (Where you are currently located in)

		ls - list content of current directory

		clear

		cd - Used for navigation between directory and folder (EG:-"cd name of the folder")

		cd .. - To go previous directory

		cd / - Root directory
	
		cp - copy files (EG:-"cp folder_name -Renaming to- folder_name_copy")

		rm - remove or delete files (EG:-"rm folder_name_copy")

		cp - copy files from one directory to another (EG:-"cp folder_name test /home/kumar/Downloads")
		
		lsb_release -a (version of OS)

		sudo php -v (Version of php)
		-->

	<div class="book_mark">
	
		<DT><H3 ADD_DATE="1475944821" LAST_MODIFIED="1482759415">Ubuntu</H3>
		<DL><p>
			<DT><A HREF="http://www.howtogeek.com/198615/how-to-check-if-your-linux-system-is-32-bit-or-64-bit/" ADD_DATE="1475883183">How to Check if Your Linux System is 32-bit or 64-bit</A>
			<DT><A HREF="http://www.howtogeek.com/203768/beginner-how-to-install-google-chrome-in-ubuntu-14.04/" ADD_DATE="1475883183">Beginner: How to Install Google Chrome in Ubuntu 14.04</A>
			<DT><A HREF="http://www.elated.com/articles/ssh-and-basic-commands/" ADD_DATE="1478264623" LAST_MODIFIED="1482499571">SSH and Basic Commands</A>
			<DT><A HREF="https://help.ubuntu.com/community/SoftwareManagement" ADD_DATE="1475883183">SoftwareManagement - Community Help Wiki</A>
			<DT><A HREF="http://www.cyberciti.biz/faq/how-do-i-update-ubuntu-linux-softwares/" ADD_DATE="1475883183">How Do I Update Ubuntu Linux Softwares Using Command Line?</A>
			<DT><A HREF="https://help.ubuntu.com/community/SynapticHowto" ADD_DATE="1475883183">SynapticHowto - Community Help Wiki</A>
			<DT><A HREF="http://ss64.com/bash/" ADD_DATE="1475946027" LAST_MODIFIED="1482499571">An A-Z Index of the Bash command line | SS64.com</A>
			<DT><A HREF="http://www.vogella.com/tutorials/Ubuntu/article.html" ADD_DATE="1475946451" LAST_MODIFIED="1482499573">Ubuntu Linux - Tips and Tricks in using Linux - Tutorial</A>
			<DT><A HREF="https://www.youtube.com/watch?v=uqaoGTnxqNw" ADD_DATE="1475954664" LAST_MODIFIED="1482499573">Beginners MYSQL Database Tutorial # How to install MySQL on Ubuntu/Debian Linux - YouTube</A>
			<DT><A HREF="http://www.mediacollege.com/linux/command/linux-command.html" ADD_DATE="1481350146" LAST_MODIFIED="1482499571">Linux Commands</A>
			<DT><A HREF="http://searchenterpriselinux.techtarget.com/tutorial/77-useful-Linux-commands-and-utilities" ADD_DATE="1481350147" LAST_MODIFIED="1482499570">77 Linux commands and utilities you&#39;ll actually use</A>
			<DT><A HREF="http://www.tutorialspoint.com/unix_commands/" ADD_DATE="1481350147" LAST_MODIFIED="1482499573">Unix, Linux Commands</A>
			<DT><A HREF="https://www.youtube.com/watch?v=-q8Jj4aAWYw" ADD_DATE="1481350147" LAST_MODIFIED="1482499572">How to install and run Apache web server in Ubuntu Linux - YouTube</A>
			<DT><A HREF="http://www.elated.com/articles/ssh-and-basic-commands/" ADD_DATE="1479117482">SSH and Basic Commands</A>
			<DT><A HREF="http://www.mediacollege.com/linux/command/linux-command.html" ADD_DATE="1475945707">Linux Commands</A>
			<DT><A HREF="http://searchenterpriselinux.techtarget.com/tutorial/77-useful-Linux-commands-and-utilities" ADD_DATE="1475945714">77 Linux commands and utilities you&#39;ll actually use</A>
			<DT><A HREF="http://www.tutorialspoint.com/unix_commands/" ADD_DATE="1475946130">Unix, Linux Commands</A>
			<DT><A HREF="https://www.youtube.com/watch?v=-q8Jj4aAWYw" ADD_DATE="1475954362">How to install and run Apache web server in Ubuntu Linux - YouTube</A>
			<DT><A HREF="http://ss64.com/bash/" ADD_DATE="1481350147">An A-Z Index of the Bash command line | SS64.com</A>
			<DT><A HREF="http://www.vogella.com/tutorials/Ubuntu/article.html" ADD_DATE="1481350147">Ubuntu Linux - Tips and Tricks in using Linux - Tutorial</A>
			<DT><A HREF="https://www.youtube.com/watch?v=uqaoGTnxqNw" ADD_DATE="1481350147">Beginners MYSQL Database Tutorial # How to install MySQL on Ubuntu/Debian Linux - YouTube</A>
		</DL><p>
	
	</div>
