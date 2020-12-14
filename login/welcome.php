<?php
	session_start();
	echo "Welcome " . $_SESSION['email'];
	echo "<a href= 'logout.php'>logout</a>";
?>
© 2020 GitHub, Inc.