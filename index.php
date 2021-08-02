<?php
    if(isset($_POST['start'])){
		
		if(!empty( $_POST['start']) && !empty( $_POST['start'] )){
			
			print_r($_POST);
		}
	}

?>



<form action method="post">

	<input type="time" name="start">
	<input type="time" name="end">
	<input type="submit" name="">

</form>