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

$data = curl_exec($ch);

if($data === FALSE){
	echo "curl error " . curl_error($ch);
}

$text = curl_exec($ch);
/*
$errorCheck = strpos($text, "SQL");

if ($errorCheck==false){
    echo "no";
}
else{
    echo "<br>SQL ERROR FOUND :D";
}
 */
global $mySqlArr;
$mySqlArr = array("SQL syntax.*?MySQL", 
    "Warning.*?mysql_", 
    "MySqlException \(0x", 
    "valid MySql result", 
    "check the manual that corresponds to your (MySQL|MariaDB) server version", 
    "MySqlClient", 
    "com\.mysql\.jdbc\.exceptions"
);

function checkingPage($data, $mySqlArr){
    if(is_array($mySqlArr)){
        foreach($mySqlArr as $mySql){
            if(is_array($mySql)){
                $pos = checkingPage($data, $mySql);
            }
            else{
                $pos = strpos($data, $mySql);
            }
        }
    }
    else{
        return strpos($data, $mySqlArr);
    }
}

echo checkingPage($data, $mySqlArr);

#https://stackoverflow.com/questions/9576772/check-if-string-exists-in-a-web-page
#code^^^
?>
