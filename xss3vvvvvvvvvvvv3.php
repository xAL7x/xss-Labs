<form method="POST">
 	xss: <input type="text" name="name">
	<input type="submit" value="xss">
	<br>
<?php if( array_key_exists( "name", $_POST ) && $_POST[ 'name' ] != NULL )
	 { $name = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_POST[ 'name' ] );
	 echo $name;
	 }
?>