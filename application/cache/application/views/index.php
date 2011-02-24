<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="http://localhost/github/rainframework/application/views//css/style.css" type="text/css" />
	
	<!-- Style & Script -->
	<?php $counter1=-1; if( isset($style) && is_array($style) && sizeof($style) ) foreach( $style as $key1 => $value1 ){ $counter1++; ?><link rel="stylesheet" href="<?php echo $value1;?>" type="text/css" />
	<?php } ?>

	<?php $counter1=-1; if( isset($script) && is_array($script) && sizeof($script) ) foreach( $script as $key1 => $value1 ){ $counter1++; ?><script src="<?php echo $value1;?>" type="text/javascript"></script>
	<?php } ?>

	<?php echo $javascript;?>
	<!-- // -->

</head>
<body>
	
	<div id="header" class="doc">
		<div id="menu"><div><img src="http://localhost/github/rainframework/application/views//img/logo_mini.png"><?php $counter1=-1; if( isset($menu) && is_array($menu) && sizeof($menu) ) foreach( $menu as $key1 => $value1 ){ $counter1++; ?><a href="http://localhost/github/rainframework/<?php echo $value1["link"];?>" <?php echo $value1["selected"]?'class="selected"':null;?>><?php echo $value1["name"];?></a><?php } ?></div>
	</div>

	<div id="section" class="doc">
		<div id="section_inside">
			<div id="section_inside_inside">
				<?php echo $center;?>
			</div>
		</div>
	</div>

	<div id="footer">
		<div id="inner_footer">
			<div class="left"><?php $counter1=-1; if( isset($menu) && is_array($menu) && sizeof($menu) ) foreach( $menu as $key1 => $value1 ){ $counter1++; ?><?php echo $counter1?' | ':'';?><a href="http://localhost/github/rainframework/<?php echo $value1["link"];?>" <?php echo $value1["selected"]?'class="selected"':null;?>><?php echo $value1["name"];?></a><?php } ?></div>
			<div class="center">execution time: <?php echo $execution_time;?><br/>
								executed query: <?php echo $n_query;?><br/>
			</div>
			<div class="right">Copyright rain team</div>
		</div>
	</div>

</body>
</html>
