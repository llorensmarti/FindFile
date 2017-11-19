<?php
$fuck = file($argv[1]);
echo "Create by Wilson <3\r\n"; 
foreach($fuck as $sites) {
	$site=trim($sites);
	echo "website => $sites\r";
	sleep(2);
	$config = @file_get_contents("http://".$site);
	if(preg_match("/FILTRE/i",$config)) {
    file_put_contents("results.txt", "file find => $site\r\n",FILE_APPEND);
	}
	
}
?>
