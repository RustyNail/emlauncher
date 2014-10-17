<?php
switch($package->getPlatform()){
case 'Android':
	$icon = 'fa-android';
	$name = ' Android';
	break;
case 'iOS':
	$icon = 'fa-apple';
	$name = ' iOS';
	break;
case 'OSX':
	$icon = 'fa-apple';
	$name = ' OSX';
	break;
default:
	$icon = 'fa-question';
	$name = ' unknown';
	break;
}
if(!isset($with_name)||!$with_name){
	$name = '';
}

?>
<i class="fa <?=$icon?>"></i><?=$name?>
