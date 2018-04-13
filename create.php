<?php
	$newName = '';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$newName = $_POST['newDir'];
		if(mkdir("uploads/".$newName)){
			echo $_POST['newDir'], ' project succesfully made.';
		}
		else{
			echo 'Failed to make a new project.';	
		}
	}
?>
