<?php include 'header.php' ;?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="./js/audio.min.js"></script>
    <script src="./js/audio-load.js"></script>
<h2>Audio</h2>

<div id="list">
    <div id="wrapper">
        <img src="./img/audio-cover.jpg" width="100%">
        <audio preload></audio>
        <ol>
            <?php
            $working_dir = getcwd();
            $audio_dir = "../3-AUDIO/";

            chdir($audio_dir);
            $files = glob("*.{wav,mp3,aiff}", GLOB_BRACE );
            
            natsort($files);
            chdir($working_dir);

            foreach ($files as $file) {
            $nom = substr($file, 0, strrpos($file, "."));
            ?>
                <li><a href="#" data-src="<?php echo $audio_dir . $file ?>"><?php echo $nom ?></a></li>
            <?php }
            ?>
        </ol>
    </div>
</div>

</body>

<?php include 'footer.php' ;?>

</html>