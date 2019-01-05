<?php
session_start();
$name = $_SESSION['username'];
	require('database.php');
    // If the values are posted, insert them into the database.
    if(isset($_POST['submit']))
		{

		$_SESSION['zip_code'] = $_POST['zip_code'];
		$_SESSION['bloodgrp'] = $_POST['bloodgrp'];

       
		
		header('Location: details_b.php');

    }
    ?>
<html>

<head>
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
<title>Request for Blood</title>

</head>
<body bgcolor="#ffe6cc">

<a href="request.php"><h2>Go to Main Portal</h2></a>
<form  method="post" >
<div>
<h1 align="center">Request for Blood</h1>

<table>


<tr>
<td>
*Contact	:
</td>
<td>
<input type="text" name="contact" value="" size="10" maxlength="12" required><br>
</td>
</tr>


<tr>
<td>
*Pin Code	:
</td>
<td>
<input type="text" name="zip_code" size="6" maxlength="6" required><br>
</td>
</tr>

<tr>
<td>
Request for Blood :
</td>
<td>
<select name="bloodgrp">
<option selected disabled>Please Select</option>
<option value="A+">A+	</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select><br>
</td>
</tr>


<tr>
<td>
Gender		:
</td>
<td> Male 
<input type="radio" name="gender" value="Male"> 
 Female 

<input type="radio" name="gender" value="Female"><br>
</td>
</tr>
<tr>
<td>
<input type="SUBMIT" value="SUBMIT" name="submit">
</td>
<td>
 <input type="RESET" value="RESET">
 </td>
</tr>

</form>
</div>
</body>
</html>
