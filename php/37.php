<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $ageErr = "";
$name = $email = $gender = $comment = $website = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
  	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
  		$nameErr = "Only letters and white space allowed"; 
	}
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    if($age < 18){
    	$ageErr = "No under 18";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form class="right_aligned" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name" value="<?php echo $_REQUEST['name'] ?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Age:
<input type="number" name="age" value="<?php echo $_REQUEST['age'] ?>">
<span class="error">* <?php echo $ageErr;?></span>
<br><br>
E-mail:
<input type="text" name="email" value="<?php echo $_REQUEST['email'] ?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female" <?php echo $gender=="female"?checked:"" ?>>Female
<input type="radio" name="gender" value="male" <?php echo $gender=="male"?checked:"" ?>>Male
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>

