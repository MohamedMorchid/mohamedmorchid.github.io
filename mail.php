<?php
	
	function smtpmailer($to, $subject, $body) { 

		global $error;

         $to      = 'mohamed.morchid@univ-avignon.fr';
         
         $headers = 'mohamedmorchid@free.fr' . "\r\n" .
         'Reply-To: mohamedmorchid@free.fr' . "\r\n" .
         'X-Mailer: PHP/' . phpversion();

         mail($to, $subject, $body, '');
	}

?>
