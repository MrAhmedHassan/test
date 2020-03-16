<?php
function getVowels($str){
	
	$arr=str_split($str);
	$arrayOfVowels=array();
	// print_r($arr);
	foreach($arr as $value){
		if($value=="a"||$value=="e"||$value=="i"||$value=="o"||$value=="u"){
			array_push($arrayOfVowels, $value);

		}
	}
	// print_r($arrayOfVowels);
	return $arrayOfVowels;
}

// function capitalizeVowels($str){
// 	$arr= str_split($str);
// 	$str = str_replace(search, replace, subject);
	

// }
// //capitalizeVowels("i am");

// function vowelPositionDetector($str){
// 	$arr=str_split($str);
// 	$vowelsArray =array();
// 	foreach($arr as $key =>$value){
// 		if($value=="a"||$value=="e"||$value=="i"||$value=="o"||$value=="u"){
// 			array_push(array, var);
// 		}
// 	}
// }
print_r(getVowels("Hello world, I am a genius developer"));