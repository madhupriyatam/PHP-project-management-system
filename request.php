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
	$query = "SELECT * FROM `p_login` WHERE `username` = '$username'";
        $result = mysqli_query($connection, $query);
		echo "<p align='right'>Your credit points are:";
		while($array = mysqli_fetch_row($result)){
			echo $array[3];
		}
		echo "<p>";
	?>
		<br>
		<br>
		<br>
		<br>	
	<p align="right" ><a href="logout.php">Logout</a></p>
	<center>
	
	<a href="req_o.php"><h2>Request Organ </h2></a>
	<a href="don_o.php"><h2>Donate Organ</h2></a>
	<a href="req_b.php"><h2>Request Blood</h2></a>
	<a href="don_b.php"> <h2>Donate Blood</h2></a>
	</center>
	
	
</body>
</html>