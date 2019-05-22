<?php
$con=mysqli_connect("localhost","root","","demo");
for($i=0;$i<$_POST['numbers'];$i++)
{
	$s=mysqli_query($con,"insert into contact(name,surname,city,language) value('".$_POST['name'][$i]."','".$_POST['surname'][$i]."','".$_POST['city'][$i]."','".$_POST['language'][$i]."')");
}
//echo count($_POST['name']);
// echo $_POST['numbers'];
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


?>