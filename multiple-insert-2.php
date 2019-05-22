<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table style="text-align: center;">
	<form method="post" action="multiple-insert-3.php">
		<?php
		 $numbers=$_POST['num'];
		//$numbers=3;
		for($i=1;$i<=$numbers;$i++)
		{
		?>
		<tr>
			<td colspan="2">Record # <?php echo $i; ?></td>
		</tr>
		<input type="hidden" value="<?php echo $numbers; ?>" name="numbers">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name[]"></td>
		</tr>
		<tr>
			<td>SurName</td>
			<td><input type="text" name="surname[]"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city[]"></td>
		</tr>
		<tr>
			<td>Language</td>
			<td><input type="text" name="language[]"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	<?php  } ?>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Insert"></td>
		</tr>
	</form>
</table>
</body>
</html>