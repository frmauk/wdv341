<?php include("classEmailer.php"); ?>

<?php
	$testEmail = new Emailer();
	$testEmail->set_sentToAddress($_POST["toEmail"]);
	$testEmail->set_sentFromAddress($_POST["fromEmail"]);
	$testEmail->set_sentFromFirstName($_POST["firstName"]);
	$testEmail->set_subjectLine($_POST["subject"]);
	$testEmail->set_emailMessage($_POST["message"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title> Process Email </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<style>
		* {
			box-sizing: border-box;
		}
		
		.contactForm {
			align-items: flex-start;
			display: flex;
			justify-content: flex-start;
		}
		.contactForm > div {
			height: 100vh;
			padding: 5%;
			width: 50%;
		}


		.contactForm > div > form {
			display: flex;
			flex-direction: column;
		}
		.contactForm > div > form > label {
			margin-bottom: 10px;
		}
		.contactForm > div > form > input {
			font-size: 1em;
			margin-bottom: 25px;
		}
		.contactForm > div > form > textarea {
			font-size: 1em;
			height: 115px;
			margin-bottom: 35px;
			resize: none;
		}
		.contactForm input[type=submit], .contactForm input[type=reset] {
			width: 75px;
		}
		
		@media only screen and (min-width: 480px) and (max-width: 767px) {
		}
		@media only screen and (min-width: 768px) {
		}
	</style>
	
	<script>
		
		function setupJavascript() {
			
			function formTest() {
				document.getElementById("toEmail").value = "test@test.com";
				document.getElementById("firstName").value = "Testy";
				document.getElementById("fromEmail").value = "senderTest@test.com";
				document.getElementById("subject").value = "This is only a test! ";
				document.getElementById("message").innerHTML = "Hello! this is a test of our emailer";
			}
			
			function clearResults() {
				document.getElementById("message").innerHTML = "";
			}
			
			document.getElementById("formTestButton").onclick = formTest;
			document.getElementById("resetButton").onclick = clearResults;
		}
		
	</script>
	
</head>
	
<body onload="setupJavascript();">
	<main>
		
	<div class="contactForm">
		<div>
			<h3>Form Handler Assignment</h3>
			<form action="" method="post">
				<label for="toEmail">Send to</label>
				<input type="email" id="toEmail" name="toEmail" />
				
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" />

				<label for="fromEmail">Email</label>
				<input type="email" id="fromEmail" name="fromEmail" />
				
				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject" />

				<label for="message">Message</label>
				<textarea id="message" name="message"></textarea>

				<div>
					<input type="submit" value="Submit" />
					<input id="resetButton" type="reset" value="Reset" />
					<input id="formTestButton" type="button" value="Form Test" />
				</div>
			</form>
		</div>
		<div>
			<?php
				echo "<h2> To: " . $testEmail->get_sentToAddress() . "</h2>";
				echo "<h2> From: " . $testEmail->get_sentFromAddress() . "</h2>";
				echo "<h4> Subject: " . $testEmail->get_subjectLine() . "</h4>";
				echo "<p> Name: " . $testEmail->get_sentFromFirstName() . "</p>";
				echo "<p>" . $testEmail->get_emailMessage() . "</p>";
				echo "<p>" . $testEmail->sendEmail() . "</p>";
			?>
		</div>
	</div>
		
	</main>
</body>
</html>