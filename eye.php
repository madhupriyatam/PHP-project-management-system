<html>
<?phprequire('database.php');
    // If the values are posted, insert them into the database.
    if(isset($_POST['submit'])){
        $eyebankname = $_POST['eyebankname'];

		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$zip_code = $_POST['zip_code'];

		
        $query = "INSERT INTO `eyebank`(`name`, `contact`, `address`, `city`, `zip`) VALUES ('$eyebankname', '$contact', '$address', '$city', '$zipcode')";
        $result = mysqli_query($connection, $query);
		
        if($result){
			//header('Location:  http://127.0.0.1/project/a.html');
			echo "User Created Successfully";
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }?>
<head>
<title>Eye Bank Regsitration Details</title>
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
    //padding: 5px;
	box-shadow: 10px 10px 5px #888888;
}
</style>
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
<form  method="post">
<h1 align="center">Eye Bank Regsitration Details</h1>
<h2>Please enter your EYE BANK DETAILS</h2>
<table>
<tr>
<td>*Eye Bank Name	: </td>
<td><input type="text" name="eyebankname" value="" size="25" maxlength="20" required><br>
</td>
</tr>

<tr>
<td>
*Contact		: 
</td>
<td>    
<input type="text" name="contact" max="9999999999" maxlength="10" required><br>
</td>
</tr>

<tr>
<td>
Address		:     
</td>
<td> 
<textarea rows="5" cols="80" name="address"></textarea><br>
</td>
</tr>

<tr>
<td>
City			: 
</td>
<td> 
<input type="text" name="city" value="" size="25" maxlength="20" required><br>
</td>
</tr>

<tr>
<td>
Zip Code		: 
</td>
<td> 
<input type="text" name="zip_code" max="999999" maxlength="6" required><br>
</td>
</tr>

<tr>
<td>
<input type="SUBMIT" value="SUBMIT" name="submit">
</td>
<td>
<input type="RESET" value="RESET"></td>
</tr>
</table>
</form>

</div>
</body>
</html>
