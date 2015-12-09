<?php

$plugin_root = __DIR__;
$root = dirname(dirname($plugin_root));
$alt_root = dirname(dirname(dirname($initial_root)));

if (file_exists("$plugin_root/vendor/autoload.php")) {
	$path = $plugin_root;
} else if (file_exists("$root/vendor/autoload.php")) {
	$path = $root;
} else {
	$path = $alt_root;
}

return array(
	'default' => array(
		'tooltipster.js' => $path . '/vendor/bower-asset/tooltipster/js/jquery.tooltipster.min.js',
		'tooltipster.css' => $path . '/vendor/bower-asset/tooltipster/css/tooltipster.css',
	)
);