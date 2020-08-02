<?php

	$server='localhost';
	$user="root";
	$password="";
	$db='corona';

	$con=mysqli_connect($server,$user,$password,$db);
	if($con){
		?>
		<script type="text/javascript">
			alter("connection successful");
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alter("connection not successful");
		</script>
		<?php
	}
?>