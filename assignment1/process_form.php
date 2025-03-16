<?php
	$nameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
	$name = $email = $password = $confirmPassword = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["name"])) {
			$nameErr = "Name cannot be empty.";
		} else {
			$name = htmlspecialchars($_POST["name"]);
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email cannot be empty.";
		} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Must be a valid email address.";
		} else {
			$email = htmlspecialchars($_POST["email"]);
		}

		if (empty($_POST["password"])) {
			$passwordErr = "Password cannot be empty.";
		} else {
			$password = $_POST["password"];
		}

		if (empty($_POST["confirm_password"])) {
			$confirmPasswordErr = "Please confirm your password.";
		} elseif ($_POST["confirm_password"] !== $_POST["password"]) {
			$confirmPasswordErr = "Passwords must match.";
		} else {
			$confirmPassword = $_POST["confirm_password"];
		}

		if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
			echo "<h3 style='text-align: center; color: green; font-size: 20px;'>Form submitted successfully!</h3>";
			echo "<p style='text-align: center;'>Name: " . $name . "<br>";
			echo "Email: " . $email . "</p>";
		} else {
			echo "<h3 style='text-align: center; color: red; font-size: 20px;'>Form submission failed. Please fix the errors.</h3>";
		}
	}
?>