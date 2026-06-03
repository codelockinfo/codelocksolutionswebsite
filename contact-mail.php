<?php
require_once __DIR__ . '/smtp-mailer.php';
$is_ajax = isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == '1';

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contactno = $_REQUEST['mobilenumber'];
$companyname = $_REQUEST['companyname'];
$aboutcompany=$_REQUEST['aboutcompany'];
$to = "codelockinfo@gmail.com";				
$subject="Inquiry";      

$fields = [
    'Client Name' => $name,
    'Email Address' => $email,
    'Mobile Number' => $contactno,
    'Company Name' => $companyname,
    'About the Company' => $aboutcompany
];

$message = build_email_html("Project Inquiry", "A prospective client has sent a new project inquiry from the contact page.", $fields);


$flgchk = send_smtp_mail($to, $subject, $message, $email, $name);

if($flgchk)	{
    if ($is_ajax) {
        if (ob_get_length()) ob_clean();
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
        exit;
    }
?>
		<script language="javascript" type="text/javascript"> 
				alert('Your Message Sent Successfully');
				window.location = 'index.php'; 
		</script>
<?php
}
else{
    if ($is_ajax) {
        if (ob_get_length()) ob_clean();
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Failed to send your message. Please try again.']);
        exit;
    }
?>
		<script language="javascript" type="text/javascript"> 
			alert('Your Message Not Sent Successfully');
			window.location = 'contact.php'; 
		</script>
<?php		
} //End Of inner If
?>