<?php
	require_once('/path/to/Sumotext.php'); //exposes Sumotext:: helper class

	$delivery_report = Sumotext::deliveryReport('{smsid}', '{shortcode}');

	echo $delivery_report->message;
	echo $delivery_report->sent;
	echo $delivery_report->message;
?>