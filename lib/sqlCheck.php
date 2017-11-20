<?php
$ch = curl_init();

$startUrl = "";

//add in a ' to the quotations in the append url bit. 
$appendUrl = $startUrl."'";

echo $appendUrl.PHP_EOL;

curl_setopt($ch, CURLOPT_URL, $appendUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

$data = curl_exec($ch);

if($data === FALSE){
	echo "curl error " . curl_error($ch);
}

$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo ($httpcode >= 200 && $httpcode < 300) ? $data : false;
?>