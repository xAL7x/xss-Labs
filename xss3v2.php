<center>
<form method="POST">
	D: <input type="text" name="name">
	<input type="submit" value="submit">
</form>
<?php
if(
	$_POST['name']==45
){
	echo "<button><a href='xss3vvvvvvvvvvvv3.php'>Number is successfully</a></button>";
}
?>
</center>
<form method="GET">
	<input type="submit" name="help" value="Help">
<?php
if(isset($_GET['help'])){
	echo "A=1+1
	3=A+B
	C=B*3
	Q=C*C
	D=Q*5";
}
?>
</form>