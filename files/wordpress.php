<?php $topic = 'Wordpress'; ?>

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
				<div class="col-md-12">
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
					echo 'This is Doubt Section: ';
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
					echo 'This is Notes Section: ';
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
                    echo $topic;
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
								echo '<h5 style="color:#0000FF;">'." - $roman_letters[$j]). ".$sub_sub_topic . '</h5>';
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

	echo '<pre><h1>Wordpress</h1>
	======================================================================

	<h3>1. About wordpress:-</h3>
		What Is WordPress?
			https://ithemes.com/tutorials/what-is-wordpress/
		Your WordPress Login
			https://ithemes.com/tutorials/wordpress-login/
		Exploring the WordPress Dashboard
			https://ithemes.com/tutorials/wordpress-dashboard/
		Using the WordPress Admin Bar
			https://ithemes.com/tutorials/the-wordpress-admin-bar/
		Exploring WordPress Settings
			https://ithemes.com/tutorials/exploring-wordpress-settings/
		WordPress Posts vs Pages
			https://ithemes.com/tutorials/wordpress-posts-vs-pages/
		Creating a WordPress Post
			https://ithemes.com/tutorials/creating-a-wordpress-post/
		Adding Links in WordPress
			https://ithemes.com/tutorials/adding-links-in-wordpress/
		Adding Images in WordPress
			https://ithemes.com/tutorials/adding-images-in-wordpress/
		Using the WordPress Media Library
			https://ithemes.com/tutorials/using-the-wordpress-media-library/
		Formatting WordPress Posts
			https://ithemes.com/tutorials/formatting-wordpress-posts/
		Scheduling WordPress Posts
			https://ithemes.com/tutorials/scheduling-wordpress-posts/
		WordPress Categories & Tags
			https://ithemes.com/tutorials/using-wordpress-categories-and-tags/
		Creating a WordPress Page
			https://ithemes.com/tutorials/creating-wordpress-page/
		Applying a WordPress Page Template
			https://ithemes.com/tutorials/applying-wordpress-page-template/
		What are WordPress Plugins?
			https://ithemes.com/tutorials/what-are-wordpress-plugins/
		Installing WordPress Plugins
			https://ithemes.com/tutorials/installing-wordpress-plugins/
		What is a WordPress Theme?
			https://ithemes.com/tutorials/what-is-a-wordpress-theme/
		How to Install a WordPress Theme
			https://ithemes.com/tutorials/how-to-install-a-wordpress-theme/
		Using WordPress Widgets
			https://ithemes.com/tutorials/using-wordpress-widgets/
		Creating a Custom Menu in WordPress
			https://ithemes.com/tutorials/creating-custom-menu-in-wordpress/
		Managing Comments in WordPress
			https://ithemes.com/tutorials/managing-comments-in-wordpress/
		Creating Users in WordPress
			https://ithemes.com/tutorials/creating-users-in-wordpress/

	<h3>2.WordPress:-</h3>
		Contact Form 7 WordPress Plugin - 
			https://www.youtube.com/watch?v=wy70WGCjMY4
		Drop-Down Menu - 
			https://www.youtube.com/watch?v=Gm6WGZAfPNA

	<h3>30/Dec/2016:-</h3>
		https://www.youtube.com/user/websofttutorials
		***https://www.youtube.com/channel/UCXzlQyuSJvydjLgHgImKnqw
		***https://www.youtube.com/user/wpbeginner
		https://www.youtube.com/user/howtobuildawebsite11

		***https://www.youtube.com/watch?v=hpKIOqsFyPE

	<h3>Important Points:- </h3>
	Remove the Admin Toolbar with Code:-
		https://premium.wpmudev.org/blog/remove-the-wordpress-admin-toolbar/?mksi=b&utm_expid=3606929-94.SWGkQ9hyQQGxJNtgEiBgWA.1&utm_referrer=https%3A%2F%2Fwww.google.co.in%2F
		
	<pre>';	
?>

	<div class="book_mark">

		<DT><H3 ADD_DATE="1484918332" LAST_MODIFIED="1485091676">Wordpress</H3>
		<DL><p>
			<DT><H3 ADD_DATE="1484918333">wordpress notes</H3>
			<DL><p>
			</DL><p>
			<DT><A HREF="https://www.youtube.com/watch?v=8OBfr46Y0cQ&list=PLpcSpRrAaOaqMA4RdhSnnNcaqOVpX7qi5" ADD_DATE="1482376054" LAST_MODIFIED="1485091676" ICON_URI="http://icon.xmarks.com/ix1rvsed-m" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB/ElEQVQ4ja2TzWpVUQyFv7XPT1tpUQeCBW0FRUTwARwqDpz4HqLoM/gMavUFtIpTHTr17w0cOLlgvQ6sWMFb7jl7Zzk4p7aKE8FACDusJDsrCQCGZKhGm+4MVgd19KWDWP6HCGBy7sw1pXQx4UNJWgpYsN0kKQGEHZL6BPOwdwPNHPFm/f2H55qcP31rQdXdVsKAhpwoCQzG++XGt4DOZu5yu47Q9V72zNF7rAjAbC7VDbSNXQoa4ofkdjRSE9b1OturJYyhtpBsbNOePZe7rY+K7e26WlmxAWwhITsCY7GacrDcG+WwHHZGyj9mHL1xUyceP4320uWun+1GmXeEcSl2DmuIYTmVcJPDFEMOqxiXsEvXpaULF9q1R5vt8c0n2Wun+tz1FH5hKeGmzuH9cQDGcrFpWgDKZJJnr14rf9tJgVD5jVbqEu6BBpukobtISfNPn/rPGw/8+f5G1U+nTbWyDFUFxQOdEkCvdyfXvyY44mE+e7OEqoqy8z2lxUWlhdYuI20MJEoo4FsdxdNKOpJxtkkCbKD00vJKCQfRZbzX47AH0VhN2NO6RDxE6V4rtdhII1IJSuwv7Ni4PXy/t+kdDwXw8tiJq23FxWIfTmbRogU1oJoIlFSwsom5xAz40RfeXvmy9eJfb+fvYkjPxhO9c0D/POfR9wsL8BOrUVCfvz35EwAAAABJRU5ErkJggg==">WordPress Tutorial 1: Introduction - YouTube</A>
			<DT><H3 ADD_DATE="1484918333" LAST_MODIFIED="1484970107">wordpress notes</H3>
			<DL><p>
				<DT><A HREF="https://codex.wordpress.org/Theme_Development" ADD_DATE="1482376057">Theme Development « WordPress Codex</A>
				<DT><A HREF="https://www.tutorialspoint.com/wordpress/wordpress_interview_questions.htm" ADD_DATE="1482376057">WordPress Interview Questions</A>
				<DT><A HREF="https://digwp.com/2010/03/wordpress-functions-php-template-custom-functions/" ADD_DATE="1482376057">WordPress functions.php Template with 15 Essential Custom Functions | Digging Into WordPress</A>
				<DT><A HREF="http://www.buildyourownblog.net/learning-wordpress/" ADD_DATE="1482376057">Learning WordPress: 20 Videos - Build Your Own Blog</A>
				<DT><A HREF="http://www.buildyourownblog.net/blog/time-saving-copypaste-wordpress-cheat-sheet/" ADD_DATE="1482376057">Wordpress Cheat Sheet - Build Your Own Blog</A>
				<DT><A HREF="https://www.apptha.com/blog/basic-functions-for-the-wordpress-beginners/" ADD_DATE="1482376057">Basic Functions for the Wordpress Beginners | apptha</A>
				<DT><A HREF="https://www.youtube.com/watch?v=KqkiW8d9MFo" ADD_DATE="1482376057">How To Build A WordPress Website 2016 – Easy WordPress Tutorial! - YouTube</A>
				<DT><A HREF="https://www.youtube.com/watch?v=wiaT4bR3xGA" ADD_DATE="1482376057">WordPress Tutorial for Beginners 2016: Step by Step Build Your Website - YouTube</A>
				<DT><A HREF="https://www.youtube.com/watch?v=zbWDv_Dci0U" ADD_DATE="1482376057">Tables in WordPress with TablePress - YouTube</A>
				<DT><A HREF="https://www.youtube.com/watch?v=Nh4ivmAaYJI&list=PL18B44DC0045F22D6&index=22" ADD_DATE="1482376057">Forms in WordPress with Gravity Forms - YouTube</A>
				<DT><A HREF="https://codex.wordpress.org/Function_Reference" ADD_DATE="1482376057">Function Reference « WordPress Codex</A>
			</DL><p>
			<DT><A HREF="https://www.youtube.com/watch?v=8OBfr46Y0cQ&list=PLpcSpRrAaOaqMA4RdhSnnNcaqOVpX7qi5" ADD_DATE="1482376054" ICON_URI="http://icon.xmarks.com/ix1rvsed-m" ICON="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB/ElEQVQ4ja2TzWpVUQyFv7XPT1tpUQeCBW0FRUTwARwqDpz4HqLoM/gMavUFtIpTHTr17w0cOLlgvQ6sWMFb7jl7Zzk4p7aKE8FACDusJDsrCQCGZKhGm+4MVgd19KWDWP6HCGBy7sw1pXQx4UNJWgpYsN0kKQGEHZL6BPOwdwPNHPFm/f2H55qcP31rQdXdVsKAhpwoCQzG++XGt4DOZu5yu47Q9V72zNF7rAjAbC7VDbSNXQoa4ofkdjRSE9b1OturJYyhtpBsbNOePZe7rY+K7e26WlmxAWwhITsCY7GacrDcG+WwHHZGyj9mHL1xUyceP4320uWun+1GmXeEcSl2DmuIYTmVcJPDFEMOqxiXsEvXpaULF9q1R5vt8c0n2Wun+tz1FH5hKeGmzuH9cQDGcrFpWgDKZJJnr14rf9tJgVD5jVbqEu6BBpukobtISfNPn/rPGw/8+f5G1U+nTbWyDFUFxQOdEkCvdyfXvyY44mE+e7OEqoqy8z2lxUWlhdYuI20MJEoo4FsdxdNKOpJxtkkCbKD00vJKCQfRZbzX47AH0VhN2NO6RDxE6V4rtdhII1IJSuwv7Ni4PXy/t+kdDwXw8tiJq23FxWIfTmbRogU1oJoIlFSwsom5xAz40RfeXvmy9eJfb+fvYkjPxhO9c0D/POfR9wsL8BOrUVCfvz35EwAAAABJRU5ErkJggg==">WordPress Tutorial 1: Introduction - YouTube</A>
		</DL><p>

	</div>