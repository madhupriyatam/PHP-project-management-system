<html>
<?php

	require('database.php');
    // If the values are posted, insert them into the database.
    if(isset($_POST['submit']))
		{
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $dob = $_POST['dob'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$zip_code = $_POST['zip_code'];
		$medication = $_POST['medication'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		
        $query = "INSERT INTO `person`(`fname`, `lname`, `dob`, `contact`, `e_id`, `address`, `city`, `zipcode`, `gender`) VALUES 
		('$fname', '$lname', '$dob', '$contact', '$email', '$address', '$city', '$zip_code', '$gender')";
        $result = mysqli_query($connection, $query);
		
        if($result){
			//header('Location:  http://127.0.0.1/project/a.html');
			$query1 = "SELECT * FROM `person` WHERE `e_id` = '$email'";
			$result1 = mysqli_query($connection, $query1);

			while($array = mysqli_fetch_row($result1)){
				$no = $array[0];
			}
			$plogin = "plogin_" + $no;
			$query2 = "INSERT INTO `p_login`(`username`, `password`, `en_no`, `credit`) VALUES ('$plogin','$plogin ','$no','10')";
			$result2 = mysqli_query($connection, $query2);
			
			echo "User Created Successfully<br>";
			echo "Your Login credentials are plogin_";
			echo $no;
			echo "for username and plogin_";
			echo $no;
			echo "for password.";
			
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
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
    border-radius: 2px;
    background-color: #f2f2f2;
    //padding: 5px;
	box-shadow: 10px 10px 5px #888888;
}
</style>
<title>Registration for Individual</title>
<link rel="stylesheet" href="form.css">
	
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#FFD700">
<table>
<tr>
<td>
<img src="1.png" height="200" width="200">
</td>
<td>
	<div class="topnav" id="myTopnav">

  <a href="faq.html"> FAQ </a>
  <a href="contact_us.html">CONTACT US </a> 
  <a href="registration.html">REGISTRATION</a>
  <a href="login.html"> LOGIN</a>
  <a href="home.html"> HOME </a>
  
</div>
</td>
</tr>
</table>
<div class="form-style-5">
<form method="post" >

<h1 align="center">Registration for Individual</h1>
<h2>PERSONAL DETAILS</h2>
<table>
<tr>
<td>
*First Name	:
</td>
<td>
<input type="text" name="fname" value="" size="10" maxlength="20" required><br>
</td>
</tr>

<tr>
<td>
*Last Name :
</td>
<td>
<input type="text" name="lname" value="" size="10" maxlength="20" required><br>
</td>
</tr>
<tr>
<td>
DOB     :
</td>
<td>
<input type="date" name="dob" id="dob" ><br>
</td>
</tr>
<tr>
<td>
*Contact	:
</td>
<td>
<input type="number" name="contact" max="9999999999" maxlength="10" required><br>
</td>
</tr>
<tr>
<td>
*Address	:
</td>
<td>
<textarea rows="5" cols="80" name="address" required></textarea><br>
</td>
</tr>
<tr>
<td>
City		:
</td>
<td>
<input type="text" name="city" value="" size="10" maxlength="20"><br>
</td>
</tr>
<tr>
<td>
*Zip Code	:
</td>
<td>
<input type="number" name="zip_code" value="" size="6" maxlength="6" required><br>
</td>
</tr>
<tr>
<td>
*Blood grp	:
</td>
<td>
<select name="bloodgrp" required>
<option value="please">Please Select</option>
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
Medication	:
</td>
<td>
<input type="text" name="medication" size="10" maxlength="20"><br>
</td>
</tr>
<tr>
<td>
*E-mail		:
</td>
<td>
<input type="email" name="email" size="10" maxlength="30" required><br>
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
