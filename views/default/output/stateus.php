<?php

	$dir = elgg_get_plugins_path();
	require_once("{$dir}vendor/phpCountryDropdown/phpCountryDropdown.lib.php");
	
	$statesus = getUSStatesArray();

	echo htmlspecialchars($statesus[$vars['value']], ENT_QUOTES, 'UTF-8', false);
