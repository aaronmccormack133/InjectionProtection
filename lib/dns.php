<?php
/*
require('dbConfig.php');
$result = $DBcon->query("SELECT * from link");
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $test1 = $row["links"]."'";
					  $test =
  
$dns = dns_get_record("$test1");


$test1= $test[0]['ip'];

 echo $test1;


        }}
				*/


<?php

$result = dns_get_record("google.com");
print_r($result);


$test= $result[0]['ip'];

 echo file_get_contents('https://ipapi.co/'.$test.'/country/');

?>


