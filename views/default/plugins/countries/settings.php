<?php
/**
 * Elgg Countries
 * @package countries 
 */
	
$plugin = $vars["entity"];

$countries = elgg_get_countries();
array_unshift($countries , elgg_echo('countries:settings:select_country'));

echo elgg_view('input/country', array(
    'name' => 'params[default_country]',
    'value' => ($plugin->default_country?$plugin->default_country:''),
    'options_values' => $countries,
    'label' => elgg_echo('countries:settings:default_country'),
    'help' => elgg_echo('countries:settings:default_country:help'),
    'required' => false,
)); 
