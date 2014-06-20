<?php
	require_once('/path/to/Sumotext.php');
	echo Sumotext::carrierCodeLookup('{mobile}', '{shortcode}');
	//response is string: "{carrier_code}"
?>