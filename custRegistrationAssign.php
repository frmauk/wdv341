<!DOCTYPE html>
<?php
$name = "";
$phone = "";
$email = "";
$badgeType = "";
$specRequest = "";
$mealType1 = NULL;
$mealType2 = NULL;
$mealType3 = NULL;
$registrationType = "";


if(isset($_POST["submit"])){
	echo "<h1>Form Submited</h1>";
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$badgeType = $_POST['BadgeType'];
$specRequest = $_POST['specRequest'];
$mealType1 = $_POST['mealType1'];
$mealType2 = $_POST['mealType2'];
$mealType3 = $_POST['mealType3'];
$registrationType = $_POST['registrationType'];
echo "<p>name: $name</p>";
echo "<p>phone: $phone</p>";
echo "<p>email: $email</p>";
echo "<p>badge type: $badgeType</p>";
echo "<p>friday dinner: $mealType1</p>";
echo "<p> saturday lunch: $mealType2</p>";
echo "<p>sunday brunch:$mealType3</p>";
echo "<p>type of registration: $registrationType</p>";

echo "<p>special requests: $specRequest</p>";


}


?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Self Posting Form</title>
<style>

#orderArea	{
	width:600px;
	border:thin solid black;
	margin: auto auto;
	padding-left: 20px;
}

#orderArea h3	{
	text-align:center;	
}
.error	{
	color:red;
	font-style:italic;	
}

</style>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Unit-5 and Unit-6 Self Posting - Form Validation Assignment


</h2>
<p>&nbsp;</p>


<div id="orderArea">
<form name="form3" method="post" action="custRegistrationAssign.php">
  <h3>Customer Registration Form</h3>

      <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value = "<?php echo $name; ?>">
      </p>
      <p>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" value = "<?php echo $phone; ?>">
      </p>
      <p>
        <label for="email">Email Address: </label>
        <input type="text" name="email" id="email" value = "<?php echo $email; ?>">
      </p>
      <p>
        <label for="select">Registration: </label>
        <select name="registrationType" id="regType">
          <option value="">Choose Type</option>
          <option value="attendee"
				  <?php if (isset($registrationType) && $registrationType=="attendee") echo "selected";?>>Attendee</option>
			
          <option value="presenter" 
				  <?php if (isset($registrationType) && $registrationType=="presenter") echo "selected";?>>Presenter</option>
			
          <option value="volunteer"
				  <?php if (isset($registrationType) && $registrationType=="volunteer") echo "selected";?>>Volunteer</option>
			
          <option value="guest"
				  <?php if (isset($registrationType) && $registrationType=="guest") echo "selected";?>>Guest</option>
        </select>
      </p>
      <p>Badge Holder:</p>
      <p>
        <input type="radio" name="BadgeType" id="clip" value="clip" 
			   <?php if (isset($badgeType) && $badgeType=="clip") echo "checked";?>>
        <label for="clip">Clip</label> <br>
		  
        <input type="radio" name="BadgeType" id="lanyard" value="lanyard" 
			   <?php if (isset($badgeType) && $badgeType=="lanyard") echo "checked";?>>
        <label for="lanyard">Lanyard</label> <br>
		  
        <input type="radio" name="BadgeType" id="magnet" value="magnet" 
			   <?php if (isset($badgeType) && $badgeType=="magnet") echo "checked";?>>
        <label for="magnet">Magnet</label>
      </p>
      <p>Provided Meals (Select all that apply):</p>
      <p>
        <input type="checkbox" name="mealType1" id="friDin"
		     <?php if (isset($mealType1)) echo "checked";?> >

        <label for="friDin">Friday Dinner</label><br>
		  
        <input type="checkbox" name="mealType2" id="satLunch"
			   <?php if (isset($mealType2)) echo "checked";?>
        <label for="satLunch">Saturday Lunch</label><br>
	
        <input type="checkbox" name="mealType3" id="sunBrunch"
			   <?php if (isset($mealType3)) echo "checked";?>
        <label for="checkbox3">Sunday Award Brunch</label>
      </p>
      <p>
        <label for="specRequest">Special Requests/Requirements: (Limit 200 characters)<br>
        </label>
        <textarea name="specRequest" cols="40" rows="5" id="specrequest"><?php echo $specRequest; ?></textarea>
      </p>
   
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="reset">
  </p>
</form>
</div>

</body>
</html>