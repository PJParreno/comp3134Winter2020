<?php

$readingFile = fopen("storedxss.txt", "r") or die("error opening the file!");
echo fread($readingFile,filesize("storedxss.txt"));
fclose($readingFile);

?>