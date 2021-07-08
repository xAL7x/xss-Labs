<p>My name is alhassan </p>
<p>15 years old </p>
<p>bash , python and web programmer ⚙ </p> 
 Team member: <a href="https://twitter.com/NG_Programmers3" > @NG_Programmers3</a></p>
<head>
	<title> xss medium</title>
</head>
<img src="3H3gWBnA_400x400.png">
<form method="GET">
	<input type="hidden" name="name">
	<input type="hidden" value="go">
</form>
<?php
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    $name = str_replace( '<script>', '', $_GET[ 'name' ] ); 
    echo $name;
}
?>
<form method="POST">
	<input type="text" name="a">
	<input type="submit" value="send">
</form>
<?php
if(isset($_POST['a'])){
        $rep=htmlspecialchars($_POST['a']);
        echo $rep;
}
?>
<form method="GET">
<input type="submit" name="Hint" value="Hint">
</form>
<?php
if(isset($_GET['Hint'])){
	echo "see page source";
}
?>