<?php
/**
 * Elgg Countries
 * @package countries 
 */
	
$plugin = $vars["entity"];

$countries = elgg_get_countries();
array_unshift($countries , elgg_echo('countries:settings:select_country'));

$basic_settings = elgg_format_element('div', [], elgg_view_input('dropdown', array(
    'name' => 'params[default_country]',
    'value' => ($plugin->default_country?$plugin->default_country:elgg_get_default_country()),
    'options_values' => $countries,
    'label' => elgg_echo('countries:settings:default_country'),
    'help' => elgg_echo('countries:settings:default_country:help'),
    'required' => false,
))); 

echo elgg_view_module('inline', '', $basic_settings, []);