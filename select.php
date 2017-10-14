<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Study strategies</title>

	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" language="javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/bootstrap.js" ></script>
	<script type="text/javascript" language="javascript" src="js/tutorial2.js" ></script>
	<script>
		$(document).ready(function(){
			// $("td:has(a.link)").css("color","pink");
			// $('.delete').click(function(){
				// var answer = confirm ("Are you sure you want to delete from the database?");
				// if (answer){
					// var href = $(this).closest('td').siblings().find('a.link').attr("href");
					// alert(href);
					// $.ajax({
						// url: "select.php",
						// type: "POST",
						// data: {
								// 'href': href
							  // },
						// success: function(data){
							// $('#message').html('<div class="alert alert-success">Deleted Successfully, Thankyou </div>');
							// window.setTimeout(function(){
								// window.location.href = "index.php";
							// }, 2000);
						// }
					// });/**/
				// }
			// });
		});
	</script>
</head>

<body>
<?php
//	$db = new mysqli('127.0.0.1','root','root','studytest');
//	// $db = new mysqli('212.1.210.1','tetsi202_DBname','girish618642','tetsi202_study');
//	if($db->connect_errno){
//		echo "We found an error in DB connection";
//	}

	require_once('init/database.php');

	if(isset($_POST['href'])){
		$href = $_POST['href'];
		$delete = $db->query("DELETE FROM study_list WHERE url='$href'");
	} elseif(isset($_POST['no'])) {
		header("Location: index.php");
	}

	if(isset($_POST['opturl']) && !empty($_POST['opturl'])){
		$main_topic = trim($_POST['select1']);
		$sub_topic = trim($_POST['select2']);
		$sub_sub_topic = trim($_POST['select3']);
		$url = trim($_POST['opturl']);
		$description = trim($_POST['description']);
        $date = date('Y-m-d h:i:sa');
		$insert = $db->query("INSERT INTO study_list (main_topic,sub_topic,sub_sub_topic,description,url,entered_on) VALUES
					('{$main_topic}','{$sub_topic}','{$sub_sub_topic}','{$description}','{$url}','{$date}')");
		if($insert == true){
			echo '<div class="alert alert-success">Successfully inserted 1 ting.., Thankyou </div>';
		} else {
			echo "<div class='alert alert-danger'>Insert Unsuccessful <b>$db->error</b></div>";
			echo $date;
		}
	} elseif(isset($_POST['opturl_moveto']) && !empty($_POST['opturl_moveto'])){
        // This is for Move related data, Ajax call from tutorial.js(submitform_moveto) and main request form move.php
        $main_topic = trim($_POST['select1']);
        $sub_topic = trim($_POST['select2']);
        $sub_sub_topic = trim($_POST['select3']);
        $url = trim($_POST['opturl_moveto']);
        $description = trim($_POST['description']);
		$org_sub = $_POST['org_sub'];
        $org_sub_sub = $_POST['org_sub_sub'];
        $date = date('Y-m-d h:i:sa');
        $delete = $db->query("DELETE FROM study_list WHERE sub_topic='$org_sub' AND sub_sub_topic='$org_sub_sub' AND url='$url'");
        sleep(1);
		$insert = $db->query("INSERT INTO study_list (main_topic,sub_topic,sub_sub_topic,description,url,entered_on) VALUES
					('{$main_topic}','{$sub_topic}','{$sub_sub_topic}','{$description}','{$url}','{$date}')");

		if($insert == true && $delete == true){
			echo '<div class="alert alert-success">Successfully Move</div>';
		} else {
			echo "<div class='alert alert-danger'>Move Unsuccessful<b>$db->error</b></div>";
		}

	} elseif(isset($_POST['optur_update']) && !empty($_POST['optur_update'])){
		// This is for Updating Edited data, Ajax call from tutorial.js(submitformupdate) and main request form edit.php
		$main_topic = $_POST['select1'];
		$sub_topic = $_POST['select2'];
		$sub_sub_topic = $_POST['select3'];
		$url = trim($_POST['optur_update']);
		$description = trim($_POST['description']);
		$update = $db->query("UPDATE study_list SET main_topic='$main_topic', sub_topic='$sub_topic', sub_sub_topic='$sub_sub_topic',
		description='$description' WHERE url='$url' AND url='$url'");
		if($update) {
            echo '<div class="alert alert-success">Successfully updated</div>';
        } else {
            echo '<div class="alert alert-danger">Updated Unsuccessful!</div>';
        }
	}

	if(isset($_POST['sub_topic'])) {

		$sub_topic = $_POST['sub_topic'];
		$select = $db->query(" SELECT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."' and sub_sub_topic<>'' ");
		$num_rows = $select->num_rows;
		if(!$num_rows == 0){
			?>
			<div id="sub_sub_topic"><?php
				while($rows = $select->fetch_object()){
					echo '<h5>'.$rows->sub_sub_topic . '</h5>';
				}?>
			</div><?php
		} else {
			echo "No sub Topic's found";
		}

	} elseif(isset($_POST['sub_sub_topic'])) {
		$htmlOut = '';
		$sub_sub_topic = $_POST['sub_sub_topic'];
		$select = $db->query(" SELECT * FROM study_list WHERE sub_sub_topic='".$sub_sub_topic."' order by url asc");
		$i = 1;
		$num_rows = $select->num_rows;
		if($num_rows >= 1){
			$htmlOut .= "<table class='table table-responsive table-bordered'>
							<thead><tr>
								<th>Main Topic</th>
								<th>Sub-Topic</th>
								<th>Sub-Sub-Topic</th>
								<th>Url</th>
								<th>Description</th>
								<th>Options</th>
								<!--<th>Edit</th>
								<th>Delete</th>-->
								</tr></thead>";
			while($rows = $select->fetch_object()){
				$htmlOut .= "<tbody class='action_box'><tr>
							<td>$i).{$rows->main_topic}</td>
							<td>{$rows->sub_topic}</td>
							<td>{$rows->sub_sub_topic}</td> ";
							if($rows->sub_sub_topic == true) {
								$htmlOut .= "<td><a class='link' target='_blank' href='{$rows->url}'>{$rows->sub_sub_topic}</a><br />
								{$rows->url}</td>";
							} elseif($rows->sub_sub_topic == false && $rows->sub_topic == true){
								$htmlOut .= "<td><a class='link' target='_blank' href='{$rows->url}'>{$rows->sub_topic}</a><br />
								{$rows->url}</td>";
							} elseif($rows->sub_topic == false && $rows->sub_sub_topic == false){
								$htmlOut .= "<td><a class='link' target='_blank' href='{$rows->url}'>{$rows->main_topic}</a><br />
								{$rows->url}</td>";
							}
							$description = $rows->description;
							$description = wordwrap($description, 50,"<br />\n");
							$htmlOut .= "<td class='box effect5'><pre class='description'>{$description}</pre></td>";
							$htmlOut .= "<td><a class='edit' href='main_page.php?module=edit&url={$rows->url}'>Edit</a>";
//							$htmlOut .= "<a class='move-to' href='main_page.php?move_to=move_to&main_topic={$rows->main_topic}&sub_sub_topic={$rows->sub_sub_topic}&url={$rows->url}&sub_topic={$rows->sub_topic}&description={$description}'>Move to</a>";
							$htmlOut .= "<a class='move-to' href='main_page.php?module=move&url={$rows->url}'>Move to</a>";
							$htmlOut .= "<span class='delete'>Delete</span></td>";
						$htmlOut .= "</tr></tbody>";
						$i++;
			}
			$total_records = $i - 1;
			$htmlOut .= "Total records: $total_records";
			echo $htmlOut .= "</table>";
			echo '<div id="delete_massage"></div>';
		} else {
			echo 'No Records';
		}

	} elseif(isset($_POST['main_topic'])) {

		// This is to get Sub-Topic's for Main-Topic
		$main_topic = $_POST['main_topic'];
		$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$main_topic."' AND sub_topic<>'' ");
		$count = $select->num_rows;
		if($count >= 1) {
			?>
			<label for="subtopic">Sub Topic: </label>
			<select name="select2" id="select2" class="form-control">
				<option value="test">Select Sub Topic</option>
				<?php
					while($rows = $select->fetch_array()){ ?>
						<option><?php echo $rows['sub_topic']; ?></option>
				<?php }	?>
			</select> <?php
		}
	} elseif(isset($_POST['subtopic'])) {

		// This is to get Sub-Sub-Topic's for Sub-Topic
		$subtopic = $_POST['subtopic'];
		$select = $db->query("SELECT * FROM topics WHERE sub_topic='".$subtopic."' AND sub_sub_topic<>'' ");
		$count = $select->num_rows;
		if($count >= 1) {
			?>
			<label for="subsubtopic">Sub Sub Topic: </label>
			<select name="select3" id="select3" class="form-control">
				<option value="test">Select Sub Sub Topic</option>
				<?php
					while($rows = $select->fetch_array()){
					?>
						<option><?php echo $rows['sub_sub_topic']; ?></option>
				<?php } ?>
			</select> <?php
		}
	} elseif(isset($_POST['search_for'])){
		// This is for search result
		$search_for = $_POST['search_for'];
		$htmlOut = '';
		$i = 1;
		$search = $db->query("SELECT * FROM study_list WHERE description LIKE '%".$search_for."%' OR main_topic LIKE '%".$search_for."%'
							OR sub_topic LIKE '%".$search_for."%' OR sub_sub_topic LIKE '%".$search_for."%' OR url LIKE '%".$search_for."%'");
		$count = $search->num_rows;
		if($count >= 1){
			$htmlOut .= "<table class='table table-responsive table-bordered search-results'>
							<thead><tr>
								<th>Main Topic</th>
								<th>Sub-Topic</th>
								<th>Sub-Sub-Topic</th>
								<th>Url</th>
								<th>Description</th>
								</tr></thead>";
			while($rows = $search->fetch_object()){
				$htmlOut .= "<tbody><tr>
							<td>$i).{$rows->main_topic}</td>
							<td>{$rows->sub_topic}</td>
							<td>{$rows->sub_sub_topic}</td>
							<td><a target='_blank' href='{$rows->url}'>{$rows->sub_sub_topic}</a><br />
								{$rows->url}</td>
							<td>{$rows->description}</td>
							<!--<td>
								<a class='edit' href='main_page.php?edit=edit&main_topic={$rows->main_topic}&sub_sub_topic={$rows->sub_sub_topic}&url={$rows->url}&sub_topic={$rows->sub_topic}&description={$description}'>Edit</a>
								<a class='move-to' href='main_page.php?move_to=move_to&main_topic={$rows->main_topic}&sub_sub_topic={$rows->sub_sub_topic}&url={$rows->url}&sub_topic={$rows->sub_topic}&description={$description}'>Move to</a>
								<span class='delete'>Delete</span>
							</td>-->
						</tr></tbody>";
						$i++;
			}
			echo $htmlOut .= "</table>";
		} else {
			echo 'Sorry no result found...';
		}
	}

	// This is to check Duplicate url
	if(isset($_POST['checkurl'])) {
		$checkurl = $_POST['checkurl'];
		$select = $db->query("SELECT url FROM study_list WHERE url='".$checkurl."'");
		$num_rows = $select->num_rows;
		if(!$num_rows == 0){
			echo "Sorry this url already exist ";
			?>
			<div id="url_found"><?php
				while($rows = $select->fetch_object()){
					echo '<h5>'.$rows->url . '</h5>';
				}?>
			</div><?php
		} else {
			echo 'No Entries of this url you can continue adding';
		}
	}

?>

</body>
</html>