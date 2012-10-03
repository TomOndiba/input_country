<?php

	$dir = elgg_get_plugins_path();
	require_once("{$dir}vendor/phpCountryDropdown/phpCountryDropdown.lib.php");
	
	$countries = getCountryArray();

	echo htmlspecialchars($countries[$vars['value']], ENT_QUOTES, 'UTF-8', false);
