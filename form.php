<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="form" method="get">

	<h2>Placement</h2>
	<ul class="placement">
		<li><input type="radio" name="place" value="1"
		<?php if (isset($_GET['place'])){ if($_GET['place']==1){ ?>checked="checked"<?php }} ?> /> Columns </li>
		<li><input type="radio" name="place" value="2"
		<?php if (isset($_GET['place'])){ if($_GET['place']==2){ ?>checked="checked"<?php }} ?> /> Layers</li>
		<li><input type="radio" name="place" value="3"
		<?php if (isset($_GET['place'])){ if($_GET['place']==3){ ?>checked="checked"<?php }} ?> /> Rows </li>
	</ul>

	<br clear="all"/>
	<h2>Frame 1</h2>
	<input placeholder="Image or web page url" id="url" type="text" value="<?php echo $url; ?>" name="url" size="50"/><br/>

	<h3>Transform</h3>
	<ul class="radio">
		<li><input type="radio" name="rotate" value="0"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='0'){ ?>checked="checked"<?php }} ?>/> 0</li>
		<li><input type="radio" name="rotate" value="90deg"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='90deg'){ ?>checked="checked"<?php }} ?>/> 90&#xb0;</li>
		<li><input type="radio" name="rotate" value="180deg"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='180deg'){ ?>checked="checked"<?php }} ?>/> 180&#xb0;</li>
		<li><input type="radio" name="rotate" value="-90deg"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='-90deg'){ ?>checked="checked"<?php }} ?>/> -90&#xb0;</li>
	</ul>

		<h3>Custom css</h3>
		<ul>
			<li class="css">
			<textarea name="css" rows="" cols=""><?php echo $css; ?></textarea>
			</li>
		</ul>


		<h2>Frame 2</h2>
		<input placeholder="Image or web page url" id="url2" type="text" value="<?php echo $url2; ?>" name="url2" size="50"/>
		<br/>

		<h3>Transform</h3>
		<ul class="radio">
		<li><input type="radio" name="rotate2" value="0"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='0'){ ?>checked="checked"<?php }} ?>/> 0</li>
		<li><input type="radio" name="rotate2" value="90deg"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='90deg'){ ?>checked="checked"<?php }} ?>/> 90&#xb0;</li>
		<li><input type="radio" name="rotate2" value="180deg"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='180deg'){ ?>checked="checked"<?php }} ?>/> 180&#xb0;</li>
		<li><input type="radio" name="rotate2" value="-90deg"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='-90deg'){ ?>checked="checked"<?php }} ?>/> -90&#xb0;</li>
		</ul>

		<h3>Custom css</h3>
		<ul>
			<li class="css">
				<textarea name="css2" rows="" cols=""><?php echo $css2; ?></textarea>
			</li>
		</ul>

		<?php //Generate Short URL bit.ly API
				require_once('lib.php');
		?>


		<input type="submit" class="send" onclick="submitform()" value="Apply"/>

		<div class="clear"></div>


		<h2>Last Favs</h2> <span class="sub">(authors on rollover)</span>
		<?php include 'favs.php'; ?>

		<p style="text-align:right;">
		<a href="http://www.raphaelbastide.com/info/" target="_blank" > About</a>
		</p>
</form>
