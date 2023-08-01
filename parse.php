<?php

	//get current directory
	$working_dir = getcwd();

	$images_dossier = $_GET['images_dossier'];
	
	//get image directory
	$img_dir = $working_dir . "/" . $images_dossier . "/";
	
	//change current directory to image directory
	chdir($img_dir);
	
	//using glob() function get images 
	$files = glob("*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE );

	//sort images in natural order
	natsort($files);
	
	//again change the directory to working directory
	chdir($working_dir);
	?>
	<title><?php echo htmlspecialchars($images_dossier);?></title>
	<link rel="stylesheet" type="text/css" href="./_mnemosyne/css/style.css">
	<div id="images-parse"><h1><?php echo $images_dossier ?></h1>
	<?php

	//iterate over image files
	foreach ($files as $file) {
	?>
		<p><img src="<?php echo $images_dossier . "/" . $file ?>" style="height: auto; max-width: 50vw;"/></p>
	<?php }
?>
