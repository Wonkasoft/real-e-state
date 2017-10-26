<?php
/**
 * author Wonkasoft
 * author uri https://wonkasoft.com
 * source https://github.com/Wonkasoft/MailChimpAPI
 * @package MailChimp API
 * @since 1.0.0
 * 
 */
/**
 * This loads all of the API information
 * This loads the list id 
 * 
 */
include( './mailchimp-config.php' );
/**
 * This will load the MailChimp class and namespace
 * 
 */
include( './mailchimpapi.php' );
/**
 * This calls for the namespace
 * 
 */
use \TheApi\MailChimp\MailChimp;
$MailChimp = new MailChimp( $api_key );
/**
 * Submit subscriber data to MailChimp
 * For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * The MailChimp API supports POST, PUT, PULL, DELETE
 * POST Adds new record but will error if data matches ex records
 * PUT Adds new record and if the data matches it will update record
 * PULL Will get matching record from the database
 * DELETE Will delete record from the database
 * Just update the line $result = $MailChimp->post to $result = $MailChimp->put or $result = $MailChimp->pull
 * $result = $MailChimp->delete etc.
 * 
 */
 
$result = $MailChimp->post( "lists/$list_id/members", [
	'email_address' => $_POST['email'],
	'merge_fields'  => [ 'FNAME'=>$_POST['fname'], 'LNAME'=>$_POST['lname'] ],
	'status'        => 'subscribed',
	] );
if ( $MailChimp->success() ) {
	
	/**
	 * Add your success message here and you can use it for your output
	 * @var string
	 */
	$mailchimp_message = "PUT YOUR SUCCESS MESSAGE HERE";
/**
 * This will fire if the process fails
 * use custom error codes for debuging
 * error mc-101
 * 
 */
} else {
	
	/**
	 * Display error
	 * Create a custom message or use echo $MailChimp->getLastError() to post the returned error message
	 * Alternatively you can use a generic error message like: There was an error processing your request
	 * @since 1.0.0
	 * 
	 */
	
	$mailchimp_message = $MailChimp->getLastError();
}
/**
 * This is where you would put your mark up for message 
 * and or redirect to thank you page
 * 
 */
?>