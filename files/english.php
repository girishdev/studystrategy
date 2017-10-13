<?php $topic = 'English'; ?>

	<div class="wordform_col">
		<form id="wordform" method="POST">
			<div class="form-group">
				<label for="englishword">English word: </label>
				<input type="text" class="form-control" id="englishword" name="englishword" />
				<label for="englishword">Kannada word: </label>
				<input type="text" class="form-control" id="kannadaword" name="kannadaword" />
				<input type="submit"  id="submit" name="word_submit" />
			</div>
		</form>
	</div>

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
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. <?php echo $topic ?> words</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="col-md-4">
					<form id="wordform" method="POST">
						<div class="form-group">
							<label for="englishword">English word: </label>
							<input type="text" class="form-control" id="englishword" name="englishword" />
							<label for="englishword">Kannada word: </label>
							<input type="text" class="form-control" id="kannadaword" name="kannadaword" />
							<input type="submit"  id="submit" name="word_submit" />
						</div>
					</form>
				</div>
				<div class="col-md-6">
					list comes here
				<?php
					$sub_topic = 'Quiz links';
					$select = $db->query("SELECT * FROM study_list WHERE main_topic='$topic' AND sub_topic='$sub_topic'");
					$num_rows = $select->num_rows;
					$x = 1;
					while($rows = $select->fetch_object()){ 
						// print_r($rows);?>
						<a href="<?php echo $rows->url; ?>" target="_blank"><?php echo "$x.) ".$rows->description ?></a><br /><br />
					<?php	// echo $x.').<span>'.$rows->sub_topic .'</span><br />';
						$x++;
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

	<?php 

		if(isset($_POST['word_submit'])){
			$englishword = $_POST['englishword'];
			$kannadaword = $_POST['kannadaword'];

			$insert = $db->query("INSERT INTO dictionary (englishword,kannadaword) VALUES 
						('{$englishword}','{$kannadaword}')");

			if($insert == true){
				echo "<div class='alert alert-success'>Successfully inserted $englishword, Thankyou </div>";
			} else {
				echo "<div class='alert alert-danger'>Insert unsuccessful <b>$db->error</b></div>";
			}
		}

// CREATE TABLE dictionary(
//    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
//    englishword VARCHAR (50) NOT NULL,
//    kannadaword VARCHAR (50) NOT NULL
// );
	?>

</div>