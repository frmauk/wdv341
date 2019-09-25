<?php

//Date Functions;
	$inDate = $_POST['date'];
	function formatDateMonthFirst($inDate) {
		$outDate = date_create($inDate);
		$outDate = date_format($outDate, "m/d/Y");
		echo $outDate;
	}
	function formatDateDayFirst($inDate) {
		$outDate = date_create($inDate);
		$outDate = date_format($outDate, "d/m/Y");
		echo $outDate;
	}
//String Functions
	$inString = $_POST['string'];
	function formatString($inString) {
		echo "<p> The length of the string is: <b>" . strlen($inString) . "</b> </p>";
		echo "<p> When you remove the outside white space the string is: <b>" . trim($inString) . "</b> </p>";
		echo "<p> The string in lower case is: <b>" . strtolower($inString) . "</b> </p>";
		
		$outString = stristr($inString, "DMACC");
		if ($outString == false) {
			echo "<p> Does the string contain 'DMACC': <b> false </b>";
		}
		else {
			echo "<p> Does the string contain 'DMACC': <b> true </b>";
		}
		
	}

//Number FUnctions
	$inNumber = $_POST['number'];
	function formatNumber($inNumber) {
		$outNumber = number_format($inNumber);
		echo $outNumber;
	}

//for currency, i originally tried to use money_format, but that doesn't work on windows, so i used number_format
	$inCurrencyNumber = $_POST['currencyNumber'];
	function formatCurrency($inCurrencyNumber) {
  		$english_format_number = number_format($inCurrencyNumber); 
		echo "$",$english_format_number;

			}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php functions</title>
</head>
	
<body>
	<main>
	
	<div class="assignment">	
		<?php
			echo "<h3> Intro to PHP: Unit 3 PHP Functions Assignment </h3>";
			echo "<hr>";
		?>
		
		<br/>
		
		<form action="" method="post">
			<label for="date"> Date </label>
			<input type="date" id="date" name="date" />

			<div>
				<input class="button" type="submit" value="Submit" />
				<input class="button" type="reset" value="Reset" />
			</div>
		</form>
		<p> The date with the <b>month</b> first:  <?php echo formatDateMonthFirst($inDate); ?> </p>
		<p> The date with the <b>day</b> first: <?php echo formatDateDayFirst($inDate); ?> </p>
		
		<br/><br/>
		
		<form action="" method="post">
			<label for="string"> String </label>
			<input type="text" id="string" name="string" value="DMACC" />

			<div>
				<input class="button" type="submit" value="Submit" />
				<input class="button" type="reset" value="Reset" />
			</div>
		</form>
		<p> 
			<b> Some information about this string: </b> <?php echo $inString ?> <br/>
			<?php echo formatString($inString); ?> </b> 
		</p>
		
		<br/><br/>

		<form action="" method="post">
			<label for="number"> Number </label>
			<input type="number" id="number" name="number" value="1234567890" />
			<p>
				Here is a formatted number: <b><?php echo formatNumber($inNumber); ?> </b>
			</p>
		

			<label for="currencyNumber"> Number </label>
			<input type="number" id="currencyNumber" name="currencyNumber" value="123456" />
			<p>
				Here is a number formatted as currency: <b><?php echo formatCurrency($inCurrencyNumber) ?> </b>

			</p>
			
			<div>
				<input class="button" type="submit" value="Submit" />
				<input class="button" type="reset" value="Reset" />
			</div>
		</form>
	</div>
		
	</main>
</body>
</html>