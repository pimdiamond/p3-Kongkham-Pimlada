<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('../assignment5-kongkham-pimlada/form/form.class.php');
$form = new Form();
$form->processForm(

	'pimnoodle.com' // Put you mail domain here
	, 
	'Assignment5 - Contact Forms' // Put your site name / form name here
	, 
	'pimdiamond@gmail.com' // Where will the form notification be sent?
	, 
	'noreply@pimnoodle.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field
	
);


?>

<!-- HTML bottom code goes here -->