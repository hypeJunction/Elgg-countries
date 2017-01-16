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

if (!isset($vars['value']) || !$vars['value']) {
    $vars['value'] = elgg_get_plugin_setting('default_country', 'countries');
}

//echo elgg_view('input/dropdown', $vars);

echo elgg_view('input/dropdown', $vars);