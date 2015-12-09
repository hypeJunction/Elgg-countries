<?php

/**
 * Countries
 *
 * @author Ismayil Khayredinov <info@hypejunction.com>
 * @copyright Copyright (c) 2015, Ismayil Khayredinov
 */

require_once __DIR__ . '/autoloader.php';

/**
 * Return a list of countries as $iso => $country_name pairs
 * @return array
 */
function elgg_get_countries() {
	return \hypeJunction\Countries::getCountries('iso', 'name', 'name');
}

/**
 * Return extended info about countries
 * If $fields is null or array, the return will be in format $iso_code => $field_value[]
 * If $fields is a string, returns an array in format $iso_code => $field_value
 *
 * @param mixed  $fields     A field name or an array of field names to return, null for all
 * @param string $sort_field Sort returned array by field
 * @return array
 */
function elgg_get_country_info($fields = null, $sort_field = 'name') {
	return \hypeJunction\Geo\Countries::getCountries('iso', $fields, $sort_field);
}