<?php
$ch = curl_init();

$startUrl = "http://alphaonenow.org/info.php?id=13";

//add in a ' to the quotations in the append url bit. 
$appendUrl = $startUrl."'";

echo $appendUrl.PHP_EOL;

curl_setopt($ch, CURLOPT_URL, $appendUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

global $data;
$data = curl_exec($ch);

if($data === FALSE){
	echo "curl error " . curl_error($ch);
}

$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);


function checkForVulnerability($data){
	if(stristr($data, "sql syntax") === FALSE){
		return "nope";
	}
	else{
		return "sql vulnerable";
	}
}

//echo ($httpcode >= 200 && $httpcode < 300) ? $data : false;

checkForVulnerability($data);

/*
if(stristr($data, "SQL syntax")){
	echo "Found";
}
*/
?>