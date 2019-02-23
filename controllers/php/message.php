<!--secure email sending script using PEAR Mail-->
<!--Authored by Jack Terrell-->
<!--Copyright StrongWares LLC and Etc. Management LLC 2019-->

<?php

require_once 'Mail.php';
require_once 'Mail/RFC822.php';

//This method uses the PEAR Mail package to send an encrypted email message on a smtp server with authentication
//@param $to: string or array of strings of recipient email addresses
//@param $from: string representation of email address of sender
//@param $body: string representation of email body
//@param $is_body_html: boolean value that describes the formatting of the $body variable
function send_email($to, $from, $subject, $body, $is_body_html = false) {
	if(!valid_email($to)) {
		throw new Exception('This To address is invalid: '.htmlspecialchars($to));
	}
	if(!valid_email($from)) {
		throw new Exception('This From address is invalid: '.htmlspecialchars($from));
	}
	//set smtp email server authentication
	$smtp = array();
	$smtp['host'] = 'ssl://jackterrell.org';
	$smtp['port'] = 465;
	$smtp['auth'] = true;
	$smtp['username'] = $from;
	if($from == 'webmaster@jackterrell.org'){
		smtp['password'] = file_get_contents('/home1/jterrell/etcmanagment-config/.conf/webmaster_email.key');
	}
	if($from == 'etcmanagement@jackterrell.org'){
		smtp['password'] = file_get_contents('/home1/jterrell/etcmanagment-config/.conf/etcmanagement_email.key');
	}
	
	//establish connection
	$mailer = Mail::factory('smtp', $smtp);
	if(PEAR::isError($mailer)) {
		throw new Exception('could not create mailer.');
	}
	
	//add recipients to an array
	$recipients = array();
	$recipients[] = $to;
	
	//set the headers
	$headers = array();
	$headers['From'] = $from;
	$headers['To'] = $to;
	$headers['Subject'] = $subject;
	if($is_body_html) {
		$headers['Content-type'] = 'text/html';
	}
	
	//send the email
	$result = $mailer->send($recipients, $headers, $body);
	
	//check the result and throw and error if one exists
	if(PEAR::isError($result)) {
		throw new Exception('Error sending email: '.
						   htmlspecialchars($result->getMessage()));
	}
}

//helper method uses the PEAR Mail package's function 'parseAddressList' to validate email addresses
//@param $email: email address to test
function valid_email($email) {
	$emailObjects = Mail_RFC822::parseAddressList($email);
	if(PEAR::isError($emailObjects)) {return false;}
	
	$emailObject = $emailObjects[0];
	$email = $emailObject->mailbox.'@'.$emailObject->host;
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return false;
	}else {
		return true;
	}
}
?>