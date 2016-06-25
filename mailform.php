<?php 
				require 'vendor/autoload.php';
				$username = getenv('SENDGRID_USERNAME');
				$password = getenv('SENDGRID_PASSWORD');
				$sendgrid = new SendGrid($username, $password);
				$from = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				$email = new SendGrid\Email();
				$email->addTo('john@johnmaguiredeveloper.com')
				    ->setFrom($from)
				    ->setSubject('Fresh Kills Contact 
				    	Form')
				    ->setText($message)
				    ->setHtml(
				    	"<strong>${subject}</strong>
				    	<p>${message}</p>");

				$sendgrid->send($email);
			?>