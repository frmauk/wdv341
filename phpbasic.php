<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP basics</title>
</head>

<body>
			<?php 
			$yourName = "Faith Mauk"; 
			// 1. This variable contains my full name
			
			echo "<h1>Assignment: PHP Basics</h1>";
			// 2. This will display the assignment name, putting it in an h1 element
			?>
	         <!-- 3. PHP is used inside the h2 element to display my name -->
			<h2><?php echo $yourName; ?></h2>
	
			<?php
				// 4. These are variables containing numbers
	              $number1 = 1;
				  $number2 = 40;
				  $number3 = 100;
			?>
			<!-- 5. The following displays the value of each variable, followed by the new
			value of the total variable once the two nubmers are combined. -->
		<p>The value of the number1 variable is <?php echo $number1; ?>.</p>
		<p>The value of the number2 variable is <?php echo $number2; ?>.</p>
	    <p>The value of the number3 variable is <?php echo $number3; ?>.</p>
			<p>The value of the total variable when all the variables are combined
			is <?php echo $total = $number1 + $number2 + $number3; ?>.</p>
	
			<script>
			<?php
				/* This code is using PHP to create a Javascript array, then
					output the array using PHP, then uses javascript to display the values of the array.
				*/ 
				echo "var terms = ['PHP','HTML','Javascript'];";
			?>
			
			for(i=0; i < terms.length; i++)
			{
				document.write("<p>" + terms[i] + "</p>");
			}
		</script>
</body>
</html>
