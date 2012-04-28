<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Framit</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
<!--
Framit  : Hacking tool by frame handling
          Open source project initiated by Raphael Bastide

VERSION : 0.7
REVISION: Raphael Bastide
URL     : http://lab.raphaelbastide.com/tools/framit/
SOURCE  : http://github.com/raphaelbastide/framit/
CONTACT : bonjour@raphaelbastide.com
-->
</head>

<?php

function get_or($key, $default) {
	return (isset($_GET[$key]))? $_GET[$key] : $default;
}


	/*variables*/
	$place = get_or('place', '');
	$css = get_or('css', '');
	$css2 = get_or('css2', '');
	$url = get_or('url', '');
	$rotate = get_or('rotate', '');
	$url2 = get_or('url2', '');
	$rotate2= get_or('rotate2', '');
	$refresh = get_or('refresh', '');
	$refresh2 = get_or('refresh2', '');
	$placeCSS = '';

	/*Place*/
	switch($place) {
		case 1:
			$placeCSS='place1';
			break;
		case 2:
			$placeCSS='place2';
			break;
		case 3:
			$placeCSS='place3';
			break;
	}
?>

<body>

	<?php if(isset($url)) : ?>
	<?php
		echo '<iframe name="frame" id="frame" class="frame '.$placeCSS.'" src ="'.$url.'"
					style="-moz-transform:rotate('.$rotate.');-webkit-transform:rotate('.$rotate.');'.
					$place.';'.$css.'"';
		if(isset($refresh) && $refresh == '1') {
			echo ' onload="reloadIt(\'frame\')">';
		} else {
			echo '>';
		}
		echo	'</iframe>';


	?>
	<?php endif; ?>

	<?php if(isset($url2)) : ?>
	<?php
		echo '<iframe name="frame2" id="frame2" class="frame '.$placeCSS.'" src ="'.$url2.'"
					style="-moz-transform:rotate('.$rotate2.');-webkit-transform:rotate('.$rotate2.');'.
					$place.';'.$css2.'"';
		if(isset($refresh2) && $refresh2 == '1') {
			echo ' onload="reloadIt(\'frame2\')">';
		} else {
			echo '>';
		}
		echo	'</iframe>';

	?>
	<?php endif; ?>


	<label id="menu"><input id="open" type="checkbox" name="menu" value=""/> Framit</label>
	<?php include_once 'form.php'; ?>

</body>
</html>