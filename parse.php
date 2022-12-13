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

	//iterate over image files
	foreach ($files as $file) {
	?>
		<center><p><img src="<?php echo $images_dossier . "/" . $file ?>" style="height: auto; max-width: 50vw;"/></p></center>
	<?php }
?>
