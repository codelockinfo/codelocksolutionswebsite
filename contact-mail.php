<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contactno = $_REQUEST['mobilenumber'];
$companyname = $_REQUEST['companyname'];
$aboutcompany=$_REQUEST['aboutcompany'];
$to = "codelockinfo@gmail.com";				
$subject="Inquiry";      

$headers ="From:". $email ." \r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		
$message = '<html><body>';
$message .= '<table rules="all" style="border:solid 1px #666;" cellpadding="10">';
$message .= "<tr><td><strong>Name</strong> </td><td>" .  $name . "</td></tr>";
$message .= "<tr><td><strong>Email ID</strong> </td><td>" .  $email . "</td></tr>";
$message .= "<tr><td><strong>Mobile No</strong> </td><td>" .  $contactno . "</td></tr>";
$message .= "<tr><td><strong>Company Name</strong> </td><td>" .  $companyname . "</td></tr>";
$message .= "<tr><td><strong>Tell About Your Company</strong> </td><td>" .  $aboutcompany . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


$flgchk = mail ($to, $subject, $message, $headers);	
if($flgchk)	{
?>
		<script language="javascript" type="text/javascript"> 
				alert('Your Message Sent Successfully');
				window.location = 'index.php'; 
		</script>
<?php
		}
		else{
?>
		<script language="javascript" type="text/javascript"> 
			alert('Your Message Not Sent Successfully');
			window.location = 'contact.php'; 
		</script>
<?php		
		} //End Of inner If
?>