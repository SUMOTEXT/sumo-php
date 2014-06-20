<?php
	require_once('lib.php');
	echo Sumotext::carrierCodeLookup('5012589948', '74700');
	
	$sent_response = Sumotext::sendMt('5012589948', 'CINGULARUS', '74700', 'CSAPI', 'yoyoyo');
	echo $sent_response->mobile;
	echo $sent_response->smsid;

	$delivery_report = Sumotext::deliveryReport('7A2D2AF7-6851-4D22-BD41-BD8EE94C061E', '74700');
	echo $delivery_report->message;
	echo $delivery_report->sent;
	echo $delivery_report->message;
?>