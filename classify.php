<?php
require_once("./classifier.php");

$classifier = new NaiveBayesClassifier();

if (isset($_REQUEST['classify'])) {
	//Categorizing
	$resp = $classifier->categorize($_REQUEST["classify"]);
	//header('Content-Type: application/json');
	echo json_encode($resp);
}

?>
