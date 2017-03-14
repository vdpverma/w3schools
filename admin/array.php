 <?php
$myfile = fopen("userlog.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("userlog.txt"));
fclose($myfile);
?> 