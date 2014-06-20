<?php
	require_once('/path/to/Sumotext.php'); //exposes Sumotext:: helper class
	echo Sumotext::carrierCodeLookup('{mobile}', '{shortcode}');
	//response is string: "{carrier_code}"
?>