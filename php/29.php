<!DOCTYPE html>
<html>
<body>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");
print_r (each($people));
echo "<br>";
print_r (current($people));
echo "<br>";
end($people);
echo "<br>";
print_r (key($people)."-".current($people));
reset($people);
echo "<br>";
print_r (key($people)."-".current($people));
?>

</body>
</html>