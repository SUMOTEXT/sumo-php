<?php
	require_once('/path/to/Sumotext.php'); //exposes Sumotext:: helper class

	$sent_response = Sumotext::sendMt('{mobile}', '{carrier_code}', 
		'{shortcode}', '{key}', '{message}');
	
	echo $sent_response->mobile;
	echo $sent_response->smsid;
?>