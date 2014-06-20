
<?php 
	//phpinfo(); 
	class Sumotext{
		public static function carrierCodeLookup($mobile, $shortcode)
		{
			return file_get_contents("http://mosms.sumotext.com/secure/sumoLookup.aspx?mobile=". $mobile . "&shortcode=". $shortcode);
		}

		public static function sendMt($mobile, $carrier, $shortcode, $key, $msg)
		{
			$end = "mobile=" . $mobile . "&carrier=" . $carrier . "&shortcode=" . $shortcode . "&key=" . $key . "&msg=" . $msg;
			return file_get_contents("https://mosms.sumotext.com/secure/sumoSend.aspx?" . $end);
			
		}

		public static function deliveryReport($smsid, $shortcode)
		{
			$end = "smsid=" . $smsid . "&shortcode=" . $shortcode;
			$raw = file_get_contents("https://mosms.sumotext.com/secure/sumoReport.aspx?" . $end);
			$obj = new StdClass();
			$pieces = explode(":", $raw);
			$obj->smsid = $pieces[0];
			$obj->sent = $pieces[1];
			$obj->message = $pieces[2];

			return $obj;
		}
	}
	
?>

