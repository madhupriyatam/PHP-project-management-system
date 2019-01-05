<html>
<style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 5px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>
	<body bgcolor="#ffe6cc">
	<?php 
	session_start();
	require('database.php');
	echo "<h2>Welcome ";
	echo $_SESSION['username'];
	echo " to the Portal page</h2>";
	
	$username = $_SESSION['username'];

	?>
		<br>
		<br>
		<br>
		<br>	
	<p align="right" ><a href="logout.php">Logout</a></p>
	<center>
	
	<a href="list_od.php"><h2>Available list of Organ Donors around your hospital </h2></a>
	<a href="list_bd.php"><h2>Available list of Blood Donors around your hospital </h2></a>

	</center>
	
	
</body>
</html>