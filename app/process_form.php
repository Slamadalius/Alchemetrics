<?php
session_start();

if (isset($_POST['submit'])) {

	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$familyname = $_POST["familyname"];
	$token = $_POST["token"];

	$errorEmpty = false;
	$errorEmail = false;

	if(!hash_equals($_SESSION['token'], $token)){
		return false;
	}
 
	if(!empty($familyname)){
	    return false;
	  }


	if (empty($name) || empty($email) || empty($message)) {
		echo "<span class='form-message-error'>Please fill in all fields.</span>";
		$errorEmpty = true;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class='form-message-error'>Write a valid e-mail address.</span>";
		$errorEmail = true; 
	}
	else {
		$servername = "localhost";
	    $username = "root";
	    $password = "";
	    $dbname = "contacts";

	    $conn = new mysqli($servername, $username, $password, $dbname);

	    $sql = "insert into contact_form( name, email, msg ) values ('$name', '$email', '$message')";

	    if($conn->query($sql) === TRUE){
	    	$to = "guitarguy331@gmail.com"; // this is your Email address
		    $from = $email; // this is the sender's Email addres
		    $subject = "Form submission";
		    $msg = $name . " wrote the following:" . "\n\n" . $message;
		    $headers = "From:" . $from;

		    mail($to,$subject,$msg,$headers);

	    	echo "<span class='form-message-success'>E-mail has been sent!</span>";
	    } else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
	    }

	    $conn->close();
	}

}
else {
	echo "Not working!";
}

?>

<script>
	$("#mail-name, #mail-email, #mail-message").removeClass( "input-error" )

	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";

	if (errorEmpty == true){
	    $("#mail-name, #mail-email, #mail-message").addClass("input-error");
	}
	if (errorEmail == true){
	    $("#mail-email").addClass("input-error");
	}

	if (errorEmpty == false && errorEmail == false){
	    $("#mail-name, #mail-email, #mail-message").val('');
	}
</script>