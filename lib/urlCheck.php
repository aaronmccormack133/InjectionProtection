<?php
$url1 = parse_url("http://www.google.co.uk");
$url2 = parse_url("http://www.google.co.uk/pages.html");

if ($url1['host'] == $url2['host']){
   echo "yay";
}else{
	echo "nope";
}
?>