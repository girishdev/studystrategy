<?php

	// Adding New Topics STARTS //

	$htmlOut = '';

	$htmlOut .= '<div class="panel-bodyX" id="topic">
					<div class="form_content col-md-12">
						<h3>Add New Topic:</h3>
						<form id="add_topic" method="POST">
							<div class="form-group">
								<label for="main_topic">Main Topic: *</label>
								<input type="text" class="form-control" name="main_topic1" >
							</div>
							<div class="form-group">
								<label for="sub_topic">Sub Topic: *</label>
								<input type="text" class="form-control" name="sub_topic2" >
							</div>
							<div class="form-group">
								<label for="sub_sub_topic">Sub Sub Topic: *</label>
								<input type="text" class="form-control" name="sub_sub_topic3" >
							</div>
							<!--<input type="submit" name="add_topic" value="Add Topic" >-->
							<button type="submit" name="add_topic" class="btn btn-default">Add Topic</button>
						</form>
					</div>
				</div>';
	echo $htmlOut;

	if(isset($_POST['add_topic']) && isset($_POST['sub_topic2'])){
		$main_topic = trim($_POST['main_topic1']);
		$sub_topic = trim($_POST['sub_topic2']);
		$sub_sub_topic = trim($_POST['sub_sub_topic3']);

		$main_topic = strtolower($main_topic);
		$sub_topic = strtolower($sub_topic);
		$sub_sub_topic = strtolower($sub_sub_topic);

		echo $main_topic = ucwords($main_topic);echo '<br />';
		$sub_topic = ucwords($sub_topic);
		$sub_sub_topic = ucwords($sub_sub_topic);

		$insert = $db->query("INSERT INTO topics (main_topic,sub_topic, sub_sub_topic) VALUES ('{$main_topic}','{$sub_topic}','{$sub_sub_topic}')");

		if($insert == true){ 
			echo '<div class="alert alert-success">Successfully inserted, Thankyou </div>';
		} else {
			echo  "<div class='alert alert-danger'>Insert unsuccessful <b>$db->error</b></div>";
		}

	}
	
	// Adding New Topics ENDS //

?>