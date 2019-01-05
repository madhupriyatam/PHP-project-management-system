<?php 


 function SignIn()
 {
 if($_POST['user'] == 'super_admin' && $_POST['pass'] == 'sadmin'){
	header('Location: request_sadmin.php');
}
else if($_POST['user'] == 'regular_admin' && $_POST['pass'] == 'radmin'){
	header('Location: request_radmin.php');
}

else{
	header('Location: unsuccess_login.html');

}

}

if(isset($_POST['submit']))
{
	SignIn();
}
?>