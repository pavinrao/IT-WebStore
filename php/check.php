<?php 
	include("UrbanDictionary.php");
?>
<?php
	include("API.php");
?>
<?php
	require_once('/unirest/src/Unirest.php');
?>
<?php 
	session_start();

//These code snippets use an open-source library. http://unirest.io/php
$response = Unirest\Request::get("https://wordsapiv1.p.mashape.com/words/bump/also",
  array(
    "X-Mashape-Key" => "Aai3ef06JYmshf8Mg4mwsBg9Y4nMp15EIX0jsnwrYQhqAizM8C",
    "Accept" => "application/json"
  )
);

echo $response;



	$text = $_POST['comments'];

	$wordcount = 0;
	$spamcount = 0;

	$arr = explode(' ',trim($text));


	for ($i=0; $i < str_word_count($text) ; $i++) { 
		$wordcount++;
	 }
	 for ($i=0; $i < $wordcount; $i++) { 
		echo "https://wordsapiv1.p.mashape.com/words/";
		echo $arr[$i];
		echo "/definitions";
		echo "<br>";
			
		// if (return false) {
			// 	$spamcount++;
		//	 }
	}
	if (($wordcount*0.2) < $spamcount) {
		//add a code to direct message to spam here
	}
	else {
		//add a code to direct message to inbox here
	}
	echo "Character Count: ".mb_strlen($text);
	echo "<br>";
	echo "Word Count: ".$wordcount;
	echo "<br>";
	echo "Spam Count: ".$spamcount;
	session_destroy();
//	header("location:tq4using.php");
?>