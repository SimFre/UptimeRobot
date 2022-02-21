<?php

$apiKey[] = "uKatH7z6dSuN2Zyf1luRCmPDkw3fw2U0";


header("Content-type: text/plain");
$url = "https://healthchecks.io/api/v1/checks/";
foreach($apiKey as $key) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-Api-Key: " . $key]);

	$result = curl_exec($ch);
	curl_close($ch);
	$apidata = json_decode($result);


	foreach ($apidata->checks as $check) {
		echo $check->slug . "_"  . $check->status . "\n";
	}
}

?>