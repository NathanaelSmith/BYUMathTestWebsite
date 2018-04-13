<?php
$dir    = 'uploads';
$files1 = scandir($dir);
$shift1 = array_shift($files1);
$shift2 = array_shift($files1);
echo '<select>';
foreach($files1 as $key => $value):
	echo '<option value="'.$value.'" >'.$value.'</option>';
endforeach;
echo '</select>';
?>
