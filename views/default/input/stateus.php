<?php

	$dir = elgg_get_plugins_path();
	
	require_once("{$dir}vendor/phpCountryDropdown/phpCountryDropdown.lib.php");
	
	if (!$vars['name']) $vars['name'] = 'stateUS';
	if (!$vars['id']) $vars['id'] = 'stateUSDropdown';
	
	echo phpUSStateDropdown($vars['value'], true, $vars['name'], $vars['id'], $html);
