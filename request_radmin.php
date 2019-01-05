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
	//session_start();
	//require('database.php');
	echo "<h2>Welcome";
	//echo $_SESSION['username'];
	echo " to the Regular Admin Portal page</h2>";
	

	?>
		<br>
		<br>
		<br>
		<br>	
	<p align="right" ><a href="logout.php">Logout</a></p>
	<center>
	
	<a href="details_org_a.php"><h2>Display all the Organ donors </h2></a>
	<a href="details_bld_a.php"><h2>Display all the Blood donors</h2></a> <br> <br>
	<a href="details_per_a.php"><h2>Display all the details of persons enrolled with LIFE R.E.R</h2></a> <br> <br>
	<a href="details_hosp_a.php"><h2>Display all the details of hospitals enrolled with LIFE R.E.R</h2></a> <br> <br>
	
	</center>
	
	
</body>
</html>