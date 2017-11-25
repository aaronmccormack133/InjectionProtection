<?php

//Couple changes need to be made.
//user input for the crawler.
//exclude certain links
//traverse websites method should be altered.
//trimming titles etc.
//Character encoding should be looked at.
//proper export to json for database import 

//url of the page being tested. 
//this will be changed to the input url of the customers website.
$start = "http://www.tunesoman.com/";

$already_crawled = array();
$crawling = array();

function get_details($url){
    $options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: crawlerBot\n"));
    $context = stream_context_create($options);

    //getting the dom
    $doc = new DOMDocument();
    @$doc->loadHTML(@file_get_contents($url, false, $context));

    $title = $doc->getElementsByTagName("title");
    $title = $title->item(0)->nodeValue;

    //echo $title."\n";

    $description = "";
    $keywords = "";
    $metas = $doc->getElementsByTagName("meta");
    for($i = 0; $i < $metas->length; $i++){
        $meta = $metas->item($i);

        if(strtolower($meta->getAttribute("name") == "description"))
            $description = $meta->getAttribute("content");    
       
        if(strtolower($meta->getAttribute("name") == "keywords"))
            $keywords = $meta->getAttribute("content");
        
    }
    global $crawlResult;
    $crawlResult = '{ "Title": "'.str_replace("\n", "", $title).'", "Description": "'.str_replace("\n", "", $description).'", "Keywords": "'.str_replace("\n", "", $keywords).'", "URL": "'.$url.'"},'; 
    return $crawlResult;
}

function follow_links($url){

    global $already_crawled;
    global $crawling;

    $options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: crawlerBot\n"));

    $context = stream_context_create($options);

    //getting the dom
    $doc = new DOMDocument();
    @$doc->loadHTML(@file_get_contents($url, false, $context));

    //getting all <a> tags on the page on the page 
    $linkList = $doc->getElementsByTagName("a");
	$inputList = $doc->getElementsByTagName("input");

    foreach($linkList as $link){
        //getting the links attached to the a tags
        $l = $link->getAttribute("href");
        
        //adapts to all sort of links by appending the website tunnel/directory/domain 
        //problem with this regarding some strings being appended to that should not be.
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
            //problem with getting the title for this oen
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"].parse_url($url)["path"].$l;
        }
        else if(substr($l, 0, 3) == "../"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$l;
        }
        else if(substr($l, 0, 11) == "javscript:"){
            continue;
        }
        else if(substr($l, 0, 5) != "https" && substr($l, 0, 4) != "http"){
            $l = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"]).$l;
        }

        if(!in_array($l, $already_crawled)){
            $already_crawled[] = $l;
            $crawling[] = $l;
            echo get_details($l)."\n";

            global $crawlResult;
            $crawlExport = json_encode($crawlResult);
            
            //test to see if the file would write properly
            if(file_put_contents("crawlResults.json", $crawlExport, FILE_APPEND)){
                $fileCreated = true;
            }
            else{
                echo "Error creating file";
            }
            //echo $l."\n";
        }
    }
    if($fileCreated = true){
        echo "Json file created successfully".PHP_EOL;
		exit;
        //the file is finished writing successfully.
    }
    array_shift($crawling);
    foreach($crawling as $site){
    	follow_links($site);
    }
}

follow_links($start);

print_r($already_crawled);
?>

