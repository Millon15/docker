<?php

$name = ["lalala", "xxx"];
$second = ["car", "watch"];
$all_together = $name + $second;
$birth = [
	"Thomas" => "1980-12-16",
	"Jhon" => "1992-12-17"
];

foreach ($birth as $k => $v) {
	echo "$k was born $v <br />";
}
