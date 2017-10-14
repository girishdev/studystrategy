
<h3>logging out please wait...</h3>

<?php
    sleep(2);
	session_destroy();
	header("Location: http://localhost/studystrategy/index.php");

?>