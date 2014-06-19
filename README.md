sumo-php
========

Wrapper class for calling the Sumotext API in php.

##Quick Start
Clone the repository wherever you keep your php services.
```git
git clone https://github.com/SUMOTEXT/sumo-php.git
```
This package contains one file, Sumotext.php. Run `require_once` to include this file.
```php
require_once('/path/to/services/sumo-php/Sumotext.php');
```
###Example
```php
<?php
	require_once('/path/to/services/sumo-php/Sumotext.php');
	echo Sumotext::carrierCodeLookup($mobile, $shortcode);
	echo Sumotext::sendMt($mobile, $carrier, $shortcode, $key, $msg);
	echo Sumotext::deliveryReport($smsid, $shortcode);
?>
```
###Methods

#####`carrierCodeLookup($mobile, $shortcode)`

Example usage
```php
echo Sumotext::carrierCodeLookup('5012589948', '74700');
```
which prints `7A2D2AF7-6851-4D22-BD41-BD8EE94C061E:TRUE:Message successfully delivered to handset.`
