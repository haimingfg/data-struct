<?php


// 给定一个整数比如41021，计算在给定整数范围内(41021)尾数是031(或者13)的所有数字的个数
$input_last_number = '600';

$max_number = 41021;

// $max_number_position = digital_position($max_number, 10);

// $input_last_number_position = digital_position($input_last_number, 10);
$input_last_number_position = strlen($input_last_number);
// var_dump($input_last_number_position);
$count = 0;

if ($max_number > $input_last_number) {
	$count++;

	$left_max_number = (int) ($max_number / pow(10, $input_last_number_position));

	$input_last_max_number = $left_max_number * pow(10, $input_last_number_position) + $input_last_number;
	if ($input_last_max_number > $max_number) {
		$left_max_number--;
	}

	$count += $left_max_number;
}


var_dump($count);


$count = 0;
$current_number = $input_last_number;
$left_max_number = (int) ($max_number / pow(10, $input_last_number_position));
while($current_number < $max_number) {
	$count++;
	var_dump($current_number);
	$current_number = $input_last_number + pow(10, $input_last_number_position) * $count;
	
}
var_dump($count);

function digital_position($digital, $radix)
{
	$position = 1;
	$digital = $digital / $radix;
	while( $digital > 1) {
		$digital = $digital / $radix;
		$position++;
	}

	return $position;
}