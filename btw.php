<?php
//output modifier to calculate percentage tax by given amount
//useage: [[+btwvalue:btw=`21`]]

$defaultbtw = 21;

$total = $input;

if ( true === isset($options) ) {
	$btw = $options;
} else {
	$btw = $defaultbtw;
}

$btw_calc = $btw+100;
$result = $total/$btw_calc*$btw;

$result = number_format($result,2);

return $result;