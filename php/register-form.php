<? php $first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$emailErr = "Invalid Email!";
}
?>