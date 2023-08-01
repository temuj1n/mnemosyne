<?php include 'header.php' ;?>
<link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />

<h2>Vidéos</h2>

<div id="list-videos">

<?php

	$working_dir = getcwd();
	$video_dir = "../2-VIDEO/bd/";
	$hd_dir = "../2-VIDEO/";

	chdir($video_dir);
	$files = glob("*.{avi,mp4,m4v,mov,wmv,mkv}", GLOB_BRACE );
	
	natsort($files);
	chdir($working_dir);

	foreach ($files as $file) {
	$poster = str_replace('mp4','jpeg',$file);
	$filehd = str_replace('mp4','m4v',$file);
	$nom = substr($file, 0, strrpos($file, "."));
	?>
		<p>
		<video
		id="my-video"
		class="video-js"
		controls
		preload="no"
		width=""
		height=""
		poster= "<?php echo $video_dir . $poster ?>"
		data-setup="{}"
		>
		<source src="<?php echo $video_dir . $file ?>" type="video/mp4" />
		</video>
		</p>
		<p><?php echo $nom ?> - <a href="<?php echo $hd_dir . $filehd ?>">Télécharger en HD</a></p>
	<?php }
?>

</div>

</body>
<script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
<?php include 'footer.php' ;?>

</html>