<?php 
	session_start();
	$db = new mysqli('127.0.0.1','root','root','studytest');
	// $db = new mysqli('212.1.210.1','tetsi202_DBname','girish618642','tetsi202_study');
	if($db->connect_errno){
		echo 'Error';
		die();
	}

// http://192.168.43.1:8080/vendor/vrana/adminer/adminer/index.php?server=192.168.43.1%3A3306&username=root&db=study&select=study_list&columns%5B0%5D%5Bfun%5D=&columns%5B0%5D%5Bcol%5D=&where%5B0%5D%5Bcol%5D=&where%5B0%5D%5Bop%5D=%3D&where%5B0%5D%5Bval%5D=&order%5B0%5D=&limit=5000000000&text_length=100
// This Link is to Get Database Connetion

// http://192.168.43.1:8080/vendor/vrana/adminer/adminer/index.php?server=192.168.43.1
// include("edit.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Study strategies</title>
	
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" language="javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qde4lcvt09fira8t7ploif7b2awn3iu5wdvppouqxo2mdaid"></script>
	<!-- <script type="text/javascript" >tinymce.init({ selector:'textarea' });</script> -->
	<script type="text/javascript" language="javascript">
		// $('#logout').click(function(){
			// alert('test');		
		// });
	</script>
</head>

<body>

	<div class="container-fluid">

		<nav class="navbar navbar-inverse">				<!-- navbar-default -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="main_page.php" class="home navbar-brand">Home</a>
			</div>
			
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="main_page.php?module=php">PHP</a></li>
					<li><a href="main_page.php?module=mysql">Msql/DBMS</a></li>
					<li><a href="main_page.php?module=java">Java</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">CMS <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="main_page.php?module=wordpress">Wordpress</a></li>
							<li><a href="main_page.php?module=symfony">Symfony</a></li>
							<li><a href="main_page.php?module=laravel">Laravel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Operation System <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="main_page.php?module=ubuntu">Ubuntu</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Webdesign Basic <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="main_page.php?module=html">HTML</a></li>
							<li><a href="main_page.php?module=css">CSS</a></li>
							<li><a href="main_page.php?module=javascript">Javascript</a></li>
							<li><a href="main_page.php?module=jquery">Jquery</a></li>
							<li><a href="main_page.php?module=ajax">Ajax</a></li>
							<li><a href="main_page.php?module=bootstrap">Bootstrap</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Personal Development<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="main_page.php?module=job">Job profile</a></li>
							<li><a href="main_page.php?module=imp_links">Imp Links</a></li>
							<li><a href="main_page.php?module=imp_noted">Imp Noted</a></li>
							<li><a href="main_page.php?module=doubts">Doubts</a></li>
							<li><a href="main_page.php?module=english">English</a></li>
							<li><a href="main_page.php?module=aptitude">Aptitude</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a class="pull-right" href="main_page.php?module=add_topic">Add Topics</a></li>
					<li><a class="pull-right" id="logout" href="main_page.php?module=logout">Log out</a></li>
				</ul>

				<form class="navbar-form navbar-left" action="#">
					<div class="input-group">
						<input type="text" class="search-query form-control" name="search_for" placeholder="Search" />
						<div class="input-group-btn">
							<span class="input-group-btn">
								<button class="btn btn-primary" id="search_button" type="button">Search</button>
							</span>
						</div>
					</div>
				</form>
			</div>
		</nav>
			
			<?php

				if(isset($_REQUEST['module']) && !empty($_REQUEST['module'])) {?>
					<div class="panel-body clearfix"><?php
					switch ($_REQUEST['module']) {
						case 'job' :
							require_once('files/job_profile.php');
							break;
						case 'php' :
							require_once('files/php.php');
							break;
						case 'mysql' :
							require_once('files/mysql.php');
							break;
						case 'wordpress' :
							require_once('files/wordpress.php');
							break;
						case 'symfony' :
							require_once('files/symfony.php');
							break;
						case 'laravel' :
							require_once('files/laravel.php');
							break;
						case 'ajax' :
							require_once('files/ajax.php');
							break;
						case 'jquery' :
							require_once('files/jquery.php');
							break;
						case 'javascript' :
							require_once('files/javascript.php');
							break;
						case 'html' :
							require_once('files/html.php');
							break;
						case 'css' :
							require_once('files/css.php');
							break;
						case 'bootstrap' :
							require_once('files/bootstrap.php');
							break;
						case 'add_topic' :
							require_once('add_topic.php');
							break;
						case 'logout' :
							require_once('logout.php');
							break;
						case 'ubuntu' :
							require_once('files/ubuntu.php');
							break;
						case 'aptitude' :
							require_once('files/aptitude.php');
							break;
						case 'english' :
							require_once('files/english.php');
							break;
						case 'doubts' :
							require_once('files/doubts.php');
							break;
						case 'imp_links' :
							require_once('files/imp_Links.php');
							break;
						case 'imp_noted' :
							require_once('files/imp_Noted.php');
							break;
						case 'java' :
							require_once('files/java.php');
							break;
						case 'w3schools' :
							require_once("http://www.w3schools.com/html/default.asp");
							break;
					}?>
					</div><?php
				} else {
	?>
	<div class="panel-body" id="topic">
		<div class="form_content col-md-12">
			<form id="myForm" method="post" action="select.php">
				<?php
				if(isset($_REQUEST['edit']) == 'edit'){
					$org_sub = $_REQUEST['sub_topic'];
					$org_sub_sub = $_REQUEST['sub_sub_topic'];
					$org_url = $_REQUEST['url'];
					?>
					<div class="form-group">
						<label for="subtopic">Main Topic: </label>
						<input type="text" class="form-control" id="up_select1" name="select1" value="<? echo $_REQUEST['main_topic']; ?>" id="url" placeholder="Url" />
					</div>
					<div class="form-group">
						<label for="subtopic">Sub Topic: </label>
						<input type="text" class="form-control" id="up_select2" name="select2" value="<? echo $_REQUEST['sub_topic']; ?>" id="url" placeholder="Url" />
						<input type="hidden" class="form-control" id="org_sub" name="select2_org" value="<? echo $org_sub; ?>" id="url" placeholder="Url" />
					</div>
					<div class="form-group">
						<label for="subtopic">Sub Sub Topic: </label>
						<input type="text" class="form-control" id="up_select3" name="select3" value="<? echo $_REQUEST['sub_sub_topic']; ?>" id="url" placeholder="Url" />
						<input type="hidden" class="form-control" id="org_sub_sub" name="select3_org" value="<? echo $org_sub_sub; ?>" id="url" placeholder="Url" />
					</div>
					<div class="form-group">
						<label for="url">URL: </label>
						<input type="text" class="form-control" id="up_url" name="opturl" value="<? echo $_REQUEST['url']; ?>" id="url" placeholder="Url" />
						<input type="hidden" class="form-control" id="org_url" name="opturl_org" value="<? echo $org_url; ?>" id="url" placeholder="Url" />
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description" rows="3"><?php echo $_REQUEST['description']; ?></textarea>
					</div>
					<!--<input type="button" id="submitformupdateid" onclick="submitformupdate()" value="Update">-->
					<button type="button" id="submitformupdateid" onclick="submitformupdate()" class="btn btn-default">Update</button>

				<?php } elseif(isset($_REQUEST['delete']) == 'delete') {
					echo 'Are you sure you want to delete';
					$org_sub = $_REQUEST['sub_topic'];
					$org_sub_sub = $_REQUEST['sub_sub_topic'];
					$org_url = $_REQUEST['url'];
					echo '<form action="main_page.php" method="POST">
								<button type="submit" name="yes" value="YES" >YES</button>
								<input type="text" name="" value='.$org_sub.' />
								<input type="text" name="" value='.$org_sub_sub.' />
								<input type="text" name="" value='.$org_url.' />
								<button type="submit" name="no" value="NO" >NO</button>
						  </form>';
					exit();
					$delete = $db->query("DELETE FROM study_list WHERE sub_topic='$org_sub' AND sub_sub_topic='$org_sub_sub' AND url='$org_url'");
					if($delete == true){
						echo 'Deleted Successfully...';
						// sleep(5);
						header( "Refresh:2; url=main_page.php");

						// header("Location: main_page.php");
					} else {
						echo 'Delete Unsuccessfull...!';
					}
		
				} else {?>
				<div class="form-group">
					<?php $select = $db->query("SELECT DISTINCT main_topic FROM topics WHERE main_topic<>'' "); ?>
					<label for="maintopic">Main Topic: </label>
					<select name="select1" id="select1" class="form-control">
						<option value="test">Select Topic</option>
						<?php
							while($rows = $select->fetch_array()){ ?>
								<option><?php echo strtoupper($rows['main_topic']); ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<div id="data_present2"></div>
				</div>
				<div class="form-group">
					<div id="data_present23"></div>
				</div>
				<?php if(isset($_REQUEST['move_to']) == 'move_to'){ 
					$org_sub = $_REQUEST['sub_topic'];
					$org_sub_sub = $_REQUEST['sub_sub_topic'];
					$org_url = $_REQUEST['url'];?>			
					<div class="form-group">
						<label for="url">URL: </label>
						<input type="text" class="form-control" name="url" value="<?php echo $_REQUEST['url']; ?>" id="url" placeholder="Url" />
						<input type="hidden" class="form-control" id="org_sub" name="org_sub" value="<?php echo $org_sub; ?>" id="url" placeholder="Url" />
						<input type="hidden" class="form-control" id="org_sub_sub" name="org_sub_sub" value="<?php echo $org_sub_sub; ?>" id="url" placeholder="Url"/ >
						<input type="hidden" class="form-control" id="org_url" name="org_url" value="<?php echo $org_url; ?>" id="url" placeholder="Url" />
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description" rows="3"><?php echo $_REQUEST['description']; ?></textarea>
					</div>
					<!--<input type="button" id="submitformmovetoid" onclick="submitform_moveto()" value="Move">-->
					<button type="button" id="submitformmovetoid" onclick="submitform_moveto()" name="add_topic" class="btn btn-default">Move</button>
				<?php } else {
					?>
				<div class="form-group">
					<label for="url">URL: </label>
					<input type="text" class="form-control" name="url" id="url" placeholder="Url" />
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description" rows="3"></textarea>
				</div>
				<!--<input type="button" id="submitformid" onclick="submitform()" value="Save">-->				
				<button type="button" id="submitformid" onclick="submitform()" name="add_topic" class="btn btn-default">Save</button>
				<?php }
				}?>

			</form>
			<div id="message"></div>
		</div>
	</div>
	<div class="panel-body" id="data_present4"></div>

	<?php

					echo '<div class="images col-md-12">
							<div class="action">
								<h4>=>Adding url of that topic</h4>	
								<h4>=>Adding Quiz links of that topic</h4>	
								<h4>=>Adding Very Important websites  of that topic</h4>	
								<h4>=>Adding Doubts section on that topic</h4>	
								<h4>=>Adding Notes on that topic</h4>	
								<h4>=>Adding Index of that topic</h4>	
							</div>
							<div class="image_div col-md-6 col-md-offset-2">
								<img class="img-responsive" src="images/technologies_banner.png" alt="technologies_banner" />
							</div>
						 </div>';

				} ?>

 				<!-- <div class="distinct_topic">
					<?php
					/* To select the index of php */
					// $select = $db->query("SELECT DISTINCT sub_topic, main_topic, sub_sub_topic, description, url FROM study_list order by main_topic DESC");
					
					?>
					<table>
						<tr>
							<th>Main Topic</th>
							<th>Sub Topic</th>
							<th>Sub Sub Topic</th>
							<th>Description</th>
							<th>Url</th>
						</tr>
						<?php 
							// if($select){
							// while($row = $select->fetch_array()){
							// 	$main_topic = ucfirst($row["main_topic"]);
							// 	$sub_topic = ucfirst($row["sub_topic"]);
							// 	$sub_sub_topic = ucfirst($row["sub_sub_topic"]);
							// 	$description = ucfirst($row["description"]);
							// 	$url = ucfirst($row["url"]);
								?>
							<tr>
								<td><?php //echo $main_topic; ?></td>
								<td><?php //echo $sub_topic; ?></td>
								<td><?php //echo $sub_sub_topic; ?></td>
								<td><?php //echo $description; ?></td>
								<td><?php //echo $url; ?></td>
							</tr>
							<?php
						// 	}
						// } else {
						// 	echo 'No...';
						// }
						?>
					</table>
				</div> -->

				<div class="index1 col-md-4 clearfix">
				<?php
				//$topic = 'php';
				//echo '<h2><u>' . $topic . ' Index</u> -- topics Table</h2>';
				/*$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$topic."' order by sub_topic ASC");
					while($rows_sub = $select->fetch_array()){
						$sub_topic = ucfirst($rows_sub['sub_topic']);
						echo '<h4 style="color:#006400;">' . $sub_topic . '</h4>';
						$select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
						while($rows_sub_sub = $select_sub->fetch_array()){
							$sub_sub_topic = ucfirst($rows_sub_sub['sub_sub_topic']);
							echo '<h5 style="color:#0000FF;">' . '==> ' . $sub_sub_topic . '</h5>';
						}
					}/**/

				/* To select the index of php */
				/*$select = $db->query("SELECT DISTINCT main_topic, sub_topic, sub_sub_topic FROM topics WHERE main_topic='php' ORDER BY sub_sub_topic ASC");
					while($rows_sub = $select->fetch_array()){
						$sub_sub_topic = ucfirst($rows_sub['sub_sub_topic']);
						echo '<h4 style="color:#006400;">' . $sub_sub_topic . '</h4>';
					}/**/

				?>
				</div>

				<div class='index2 col-md-4 clearfix'>
				<?php
				//$topic = 'php';
				//echo '<h2><u>' . $topic . ' Index</u> -- study_list Table</h2>';
				/*$select = $db->query("SELECT DISTINCT sub_topic FROM study_list WHERE main_topic='".$topic."' order by sub_topic ASC");
					while($rows_sub = $select->fetch_array()){
						$sub_topic = ucfirst($rows_sub['sub_topic']);
						echo '<h4 style="color:#006400;">' . $sub_topic . '</h4>';
						$select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
						while($rows_sub_sub = $select_sub->fetch_array()){
							$sub_sub_topic = ucfirst($rows_sub_sub['sub_sub_topic']);
							echo '<h5 style="color:#0000FF;">' . '==> ' . $sub_sub_topic . '</h5>';
						}
					}/**/

				/* To select the index of php */
				/*$select = $db->query("SELECT DISTINCT main_topic, sub_topic, sub_sub_topic FROM study_list WHERE main_topic='php' ORDER BY sub_sub_topic ASC");
					while($rows_sub = $select->fetch_array()){
						$sub_sub_topic = ucfirst($rows_sub['sub_sub_topic']);
						echo '<h4 style="color:#006400;">' . $sub_sub_topic . '</h4>';
					}/**/

					/*mysqli_free_result($insert);
					mysqli_free_result($select);
					mysqli_free_result($delete);
					mysqli_free_result($update);

					mysqli_close($insert);
					mysqli_close($select);
					mysqli_close($delete);
					mysqli_close($update);/**/

				    /*$flushtdbst = $db->query("FLUSH TABLE study_list");
				    $flushtdbtp = $db->query("FLUSH TABLE topics");

				    if($flushtdbst && $flushtdbtp) {
				    	echo '<h3>Table is FLUSH....</h3>';
				    } else {
				    	echo 'Not flushed..';
				    }
					
					$optimizedbst = $db->query("OPTIMIZE TABLE study_list");
					$optimizedbst = $db->query("OPTIMIZE TABLE topics");

				    if($optimizedbst && $optimizedbst) {
				    	echo '<h3>Table is OPTIMIZE....</h3>';
				    } else {
				    	echo 'Not flushed..';
				    }/**/

				?>
				</div>

			<div id="message"></div>
		
		<div class="top"><i>Go Top</i></div>		
		<script type="text/javascript" language="javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" language="javascript" src="js/bootstrap.js" ></script>
		<script type="text/javascript" language="javascript" src="js/tutorial.js" ></script>
		<script type="text/javascript" language="javascript" src="js/tutorial2.js" ></script>
	</div>
</body>
</html>