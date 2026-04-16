<?php

	$errorMSG = "";

	// NAME
	if (empty($_POST["name"])) {
		$errorMSG = "Name is required. ";
	} else {
		$name = $_POST["name"];
	}

	// EMAIL
	if (empty($_POST["email"])) {
		$errorMSG .= "Email is required. ";
	} else {
		$email = $_POST["email"];
	}

	// BILL
	if (empty($_POST["bill"])) {
		$errorMSG .= "Bill is required. ";
	} else {
		$bill = $_POST["bill"];
	}

	// PHONE
	if (empty($_POST["phone"])) {
		$errorMSG .= "Phone is required. ";
	} else {
		$phone = $_POST["phone"];
	}

	// CAPACITY
	if (empty($_POST["capacity"])) {
		$errorMSG .= "Capacity is required. ";
	} else {
		$capacity = $_POST["capacity"];
	}

	$subject = ' Solar Calculation Inquiry';

	$EmailTo = "info@sonemar-solar.com"; // Replace with your email.
	$EmailTo = "fefarh@gmail.com"; // Replace with your email.

	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $name;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Phone: ";
	$Body .= $phone;
	$Body .= "\n";
	$Body .= "Bill: ";
	$Body .= $bill;
	$Body .= "\n";
	$Body .= "Capacity: ";
	$Body .= $capacity;
	$Body .= "\n";

	// send email
	$success = @mail($EmailTo, $subject, $Body, "From:".$email);

	// redirect to success page
	if ($success && $errorMSG == ""){
	   echo "success";
	}else{
		if($errorMSG == ""){
			echo "Something went wrong :(";
		} else {
			echo $errorMSG;
		}
	}

?>