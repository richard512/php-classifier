<?php
require_once("./classifier.php");

$classifier = new NaiveBayesClassifier();

if (isset($_REQUEST['train'])) {
	//Training
	$classifier->train($_REQUEST["train"], $_REQUEST["category"]);
	echo "Trained \"" . $_REQUEST["train"] . "\" to category \"" . $_REQUEST["category"] . "\"";
}

?>
