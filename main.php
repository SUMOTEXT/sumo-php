<?php
	require_once('lib.php');
	echo Sumotext::carrierCodeLookup('5012589948', '74700');
	echo Sumotext::sendMt('5012589948', 'CINGULARUS', '74700', 'CSAPI', 'yoyoyo');
	$doop = Sumotext::deliveryReport('7A2D2AF7-6851-4D22-BD41-BD8EE94C061E', '74700');
	echo $doop->smsid;
?>