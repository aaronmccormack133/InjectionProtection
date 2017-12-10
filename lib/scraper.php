<?php
// Run this file from cli every 5-10 minutes
// doesn't matter if it takes 20-30 seconds
$time_start = microtime(true);
  
require('dbConfig.php');
require 'simple_html_dom.php';
 $i = 0;
$html_output = ""; // use this to build up html output
  for($j=1;$j<27;$j++){


$sites = array(
 
  array('https://www.google.ie/search?q=about.php?cartID=&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
  array('https://www.google.ie/search?q=accinfo.php?cartId=&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
  array('https://www.google.ie/search?q=acclogin.php?cartID=&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
  array('https://www.google.ie/search?q=add.php?bookid=&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
  array('https://www.google.ie/search?q=add_cart.php?num=&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
  array('https://www.google.ie/search?q=addcart.php?&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
  array('https://www.google.ie/search?q=addItem.php&dcr=0&ei=JQjJWf6QD-mcgAb3-qXQAw&start='.$j.'0&sa=N&biw=1920&bih=901', 'cite'),
    /* more sites go here, like this */
    // array('URL', 'KEY')
);

  
  

// loop over each site
foreach ($sites as $site){
  
   $url = $site[0];
   $key = $site[1];
   // fetch site
   $syds = file_get_html($url);
   $test = array();
   // loop over each link
  
   foreach($syds->find($key) as $element) {
     // add link to $html_output
    
     

$sql = "INSERT INTO link (links)
VALUES ('$element->plaintext')";



if ($DBcon->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $DBcon->error;
}

     
   }
  sleep(40);
}
  }
  

// save $html_output to a local file
if(file_exists("links.php")){
  file_put_contents("links.php", $html_output, FILE_APPEND);


}else {
  echo "err";
}
// Display Script End time
$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start)/60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';

function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

echo convert(memory_get_usage(true)); // 123 kb

function outputProgress($current, $total) {
    echo "<span style='position: absolute;z-index:$current;background:#FFF;'>" . round($current / $total * 100) . "% </span>";
    myFlush();
    sleep(1);
}

function progressBar($done, $total) {
    $perc = floor(($done / $total) * 100);
    $left = 100 - $perc;
    $write = sprintf("\033[0G\033[2K[%'={$perc}s>%-{$left}s] - $perc%% - $done/$total", "", "");
    fwrite(STDERR, $write);
}

?>
