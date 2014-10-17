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
	$icon = 'fa-apple fa-apple-osx';
	$name = ' OSX';
	break;
case 'Windows':
	$icon = 'fa-windows';
	$name = ' Windows';
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
