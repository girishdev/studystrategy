<?php $topic = 'java'; ?>

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
				<div class="col-left col-md-12">
				<?php
					$sub_topic = 'java quiz';
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
					$sub_topic = 'java Important';
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
					echo '<h2><u>' . $topic . ' Index</u></h2>';
					$i = 1;
					$select = $db->query("SELECT DISTINCT sub_topic FROM topics WHERE main_topic='".$topic."'");
						while($rows_sub = $select->fetch_array()){
							$sub_topic = ucfirst($rows_sub['sub_topic']);
							echo '<h4 style="color:#006400;"><u>'."$i. ".$sub_topic . '</u></h4>';
							$j = 1;
							$select_sub = $db->query("SELECT DISTINCT sub_sub_topic FROM topics WHERE sub_topic='".$sub_topic."'");
							while($rows_sub_sub = $select_sub->fetch_array()){
								$sub_sub_topic = ucfirst($rows_sub_sub['sub_sub_topic']);
								echo '<h5 style="color:#0000FF;">'."$j). ".$sub_sub_topic . '</h5>';
								$j++;
							}
							$i++;
						}
				?>
			</div>
		</div>
	</div>

</div>
