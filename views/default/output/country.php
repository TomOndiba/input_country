<?php

	$dir = elgg_get_plugins_path();
	require_once("{$dir}input_country/vendor/phpCountryDropdown/phpCountryDropdown.lib.php");
	
	$countries = getCountryArray();

	echo htmlspecialchars($vars['value'], ENT_QUOTES, 'UTF-8', false);
