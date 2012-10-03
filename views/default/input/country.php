<?php

	$dir = elgg_get_plugins_path();
	
	require_once("{$dir}vendor/phpCountryDropdown/phpCountryDropdown.lib.php");
	
	if (!$vars['name']) $vars['name'] = 'country';
	if (!$vars['id']) $vars['id'] = 'countryDropdown';
	
	echo phpCountryDropdown($vars['value'], true, $vars['name'], $vars['id'], $html);
