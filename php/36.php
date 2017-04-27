<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Num1: <input type="text" name="fnum1" value="<?php echo $_REQUEST['fnum1'] ?>" required>
  Num2: <input type="number" name="fnum2" value="<?php echo $_REQUEST['fnum2'] ?>" required>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "Aixo es post";
    // collect value of input field
    $num1 = $_REQUEST['fnum1'];
    $num2 = $_REQUEST['fnum2'];
    echo "Nombre caracters abans del trim: ".strlen($num1)."<br>";
    $aux = trim($num1);
    echo "Nombre caracters despres trim: ".strlen($aux);
    if (empty($num1) || empty($num2)) {
        echo "Number empty";
    } else {
        echo $num1+$num2;
    }
}
else{
	echo "Aixo es GET";
}
?>

</body>
</html>