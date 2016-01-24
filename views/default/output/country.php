<?php

$value = elgg_extract('value', $vars);
if (!$value) {
	return;
}

$countries = elgg_get_countries();
if (array_key_exists($value, $countries)) {
	echo $countries[$value];
} else {
	echo $value;
}
