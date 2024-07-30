
<?php
  if(isset($_POST['submit'])){
    $target_dir = "resume/";
    $uploadOk = 0;
    $temp = explode(".",$_FILES["resumefile"]["name"]);
    $temp0 = trim($temp[0]);
    $temp0 = str_replace(" ","",$temp0);
    $extension = trim(end($temp));
        
     $filename = basename($_FILES["resumefile"]["name"]);
     
     $filename = time(). $temp0.".".$extension;
     if(move_uploaded_file($_FILES["resumefile"]["tmp_name"],$target_dir . $filename))
     {
         $uploadOk = 1;
     }
    
      if($uploadOk == 1){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$mobilenumber=$_POST['mobilenumber'];
		$email=$_POST['email'];
		$position=$_POST['position'];
		$location=$_POST['location'];
		$about=$_POST['aboutself'];
		$resume = "https://codelocksolutions.in/resume/". $filename  ."";
        $to = "codelockinfo@gmail.com";
        $subject="Career Inquiry";      
        $headers ="From:". $email ." \r\n";
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
          
        
        $message = '<html><body>';
        $message .= '<table rules="all" style="border:solid 1px #666;" cellpadding="10">';
        $message .= "<tr><td><strong>First Name</strong> </td><td>" .  $firstname . "</td></tr>";
        $message .= "<tr><td><strong>Last Name</strong> </td><td>" .  $lastname . "</td></tr>";
        $message .= "<tr><td><strong>Mobile No</strong> </td><td>" .  $mobilenumber . "</td></tr>";
        $message .= "<tr><td><strong>Email Id</strong> </td><td>" .  $email . "</td></tr>";
        $message .= "<tr><td><strong>Position</strong> </td><td>" .  $position . "</td></tr>";
        $message .= "<tr><td><strong>Location</strong> </td><td>" .  $location . "</td></tr>";
        $message .= "<tr><td><strong>Resume</strong> </td><td>" .  $resume . "</td></tr>";
        $message .= "<tr><td><strong>Write About Your Self</strong> </td><td>" .  $about . "</td></tr>";
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
			window.location = 'career.php'; 
		</script>
        <?php		
		} //End Of inner If
      }else{?>
      <script language="javascript" type="text/javascript"> 
          alert("Please upload resume");
          	window.location = 'career.php'; 
          	</script>
      <?php }
	} //End Of Outer If
?>