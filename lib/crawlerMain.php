<?php
require 'dbConfig.php';

//user input for the crawler.
//exclude certain links
//traverse websites method should be altered.
//proper export to json for database import 

//url of the page being tested. 
//this will be changed to the input url of the customers website.

//compare the start url against the last url in the crawled array
$start = "http://www.tunesoman.com";
set_time_limit(90);

$startClone = $start;

$already_crawled = array();
$crawling = array();

function get_details($url){
    $options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: crawlerBot\n"));
    $context = stream_context_create($options);

    //getting the dom
    $doc = new DOMDocument();
    @$doc->loadHTML(@file_get_contents($url, false, $context));

    $title = $doc->getElementsByTagName("title");
    @$title = $title->item(0)->nodeValue;

    global $crawlResult;
	$crawlResult = '{"Title: "'.rtrim($title).'", "URL: "'.$url.'"},';
    return $crawlResult;
	//$test1 = $url;
}

function follow_links($url){

    global $already_crawled;
    global $crawling;
    //$parsedLastUrl = explode('.', $lastUrl);
    //$explodeLastUrl = $parsedLastUrl[1];
	//$parsedStart = explode('.', $startClone);
	//$explodeStartUrl = $parsedStart[1];
	//echo $explodeStartUrl;
	//echo $explodeLastUrl;


    $options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: crawlerBot\n"));

    $context = stream_context_create($options);

    //getting the dom
	//parses html pages
    $doc = new DOMDocument();
	//filegetcontents gets the stuff on the page. $url is what is passed in
	//this could be curl
    @$doc->loadHTML(@file_get_contents($url, false, $context));

    //getting all <a> tags on the page on the page 
    $linkList = $doc->getElementsByTagName("a");

	//loops through all of the links
    foreach($linkList as $link){
        //getting the links attached to the a tags
        $l = $link->getAttribute("href");
        
        //adapts to all sort of links by appending the website tunnel/directory/domain 
        //
        if(substr($l, 0, 1) == "/" && substr($l, 0, 2) != "//"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"].$l;
        }
        else if(substr($l, 0, 2) == "//"){
            $l = parse_url($url)["scheme"].":".$l;
        }
        else if(substr($l, 0, 2) == "./"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"]).substr($l, 1);
        }
        else if(substr($l, 0, 1) == "#"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"].parse_url($url)["path"].$l;
        }
        else if(substr($l, 0, 3) == "../"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$l;
        }
        else if(substr($l, 0, 11) == "javscript:"){
            continue;
        }
        else if(substr($l, 0, 5) != "https" && substr($l, 0, 4) != "http"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$l;
        }
        /*
        if($explodeStartUrl == $explodeLastUrl){
		    $sql = "INSERT INTO crawler (urls) VALUES ('".$l."')";
            $DBcon->query($sql);
        }
        */
		//making sure theere is no dupes.
		//returns true or false if an element is found in an array
        if(!in_array($l, $already_crawled)){
			global $startClone;
			global $parsedLastUrl;
			//the value of $l is = to a blank value in that array
            $already_crawled[] = $l;
            $crawling[] = $l;

			//get_details shows what is added to the array
            echo get_details($l)."\n";

			$lastUrl = $l;
			$parsedLastUrl = explode('.', $lastUrl);
			$explodeLastUrl = $parsedLastUrl[1];
			$parsedStart = explode('.', $startClone);
			$explodeStartUrl = $parsedStart[1];
			echo $explodeStartUrl;
			echo $explodeLastUrl;
            global $crawlResult;
            $crawlExport = json_encode($crawlResult);
			/*
			if($parsedLastUrl !== $parsedStart){
				break;
			}
			else{
				continue;
			}
            //print_r("last item in the array is: ".$parsedLastUrl['host'].PHP_EOL);
            //print_r($parseStart['host'].PHP_EOL);
			if($explodeLastUrl !== $explodeStartUrl){
				echo $explodeLastUrl;
			    exit;	
            }
            while($explodeLastUrl == $explodeStartUrl){
                continue;
            }
             */
            if($explodeStartUrl == $explodeLastUrl){
                $sql = "INSERT INTO crawler (urls) VALUES ('".$l."')";
                global $DBcon;
                $DBcon->query($sql);
            }
            else{
                echo "not same domain";
            }
            file_put_contents("crawlResults.json", $crawlExport, FILE_APPEND);
        }
    }
    
    array_shift($crawling);
    foreach($crawling as $site){
        follow_links($site);
    }
}

follow_links($start);
?>

    
