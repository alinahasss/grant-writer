<?php 
	$arr = [];
	$jsonString = file_get_contents('data-fpg-winners.json');
	$data = json_decode($jsonString, true);
	foreach ($data as $key => $value) {
		if(strlen($key) == 11){
			$arr[] = json_decode($value);
		}
	}

	$jsonString = file_get_contents('data-fpg-loosers.json');
	$data = json_decode($jsonString, true);
	foreach ($data as $key => $value) {
		if(strlen($key) == 11){
			$arr[] = json_decode($value);
		}
	}

	echo count($arr);
	file_put_contents('result.json', json_encode($arr));

?>