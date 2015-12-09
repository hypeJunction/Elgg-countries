<?php

/**
 * Displays a dropdown of countries
 */

$vars['options_values'] = elgg_get_countries();

if (isset($vars['class'])) {
	$vars['class'] = "{$vars['class']} elgg-input-country";
} else {
	$vars['class'] = 'elgg-input-country';
}

if (!isset($vars['name'])) {
	$vars['name'] = 'country';
}

echo elgg_view('input/dropdown', $vars);
