
<html>
<style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 10px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
	<body bgcolor="#ffe6cc">
	<p align="right"><a href="request_admin.php">Go to Main Portal</a></p>
	Here are all the details of hospitals enrolled with LIFE R.E.R: 
		<?php 
		//	
		 //$query = "SELECT * FROM `person` WHERE `en_roll` = (select en_no from p_login where username = '$username')";
		
		//session_start();
		require('database.php');
		
		echo "<br>";
			echo "<table border='1' cellspacing='5' cellpadding='2'>";
			echo "<tr><td>S.No</td><td>Hospital Name</td> <td>Contact</td> <td>Address</td> <td>City</td><td>Zip Code</td></tr>	";
		
			$query1 = "SELECT * FROM `hospital`";
			$result1 = mysqli_query($connection, $query1);
			
			while($array1 = mysqli_fetch_row($result1)){
				echo "<tr><td>";
				echo $array1[0];
				echo "</td><td>";
				echo $array1[1];
				echo "</td><td>";
				echo $array1[2];
				echo "</td><td>";
				echo $array1[3];
				echo "</td><td>";
				echo $array1[4];
				echo "</td><td>";
				echo $array1[5];
				echo "</td></tr>";
			
			}

			//echo $result['name'];
		?>
			
</BODY>
</HTML>