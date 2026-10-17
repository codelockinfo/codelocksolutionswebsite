
<?php
  require_once __DIR__ . '/smtp-mailer.php';
  if(isset($_POST['submit'])){
    $is_ajax = isset($_POST['ajax']) && $_POST['ajax'] == '1';
    $target_dir = "resume/";
    if (!file_exists($target_dir)) {
        @mkdir($target_dir, 0777, true);
    }
    $uploadOk = 0;
    $temp = explode(".",$_FILES["resumefile"]["name"]);
    $temp0 = trim($temp[0]);
    $temp0 = str_replace(" ","",$temp0);
    $extension = trim(end($temp));
        
     $filename = basename($_FILES["resumefile"]["name"]);
     
     $filename = time(). $temp0.".".$extension;
     if(@move_uploaded_file($_FILES["resumefile"]["tmp_name"],$target_dir . $filename))
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
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $request_uri = $_SERVER['REQUEST_URI'];
        $dir_path = dirname($request_uri);
        $dir_path = ($dir_path == '/' || $dir_path == '\\') ? '' : $dir_path;
		$resume = $protocol . $host . $dir_path . "/resume/". $filename;
        $to = "codelockinfo@gmail.com";
        $subject="Career Inquiry";      
        $fields = [
            'First Name' => $firstname,
            'Last Name' => $lastname,
            'Mobile Number' => $mobilenumber,
            'Email Address' => $email,
            'Applying For Position' => $position,
            'Location' => $location,
            'Resume Link' => $resume,
            'About The Submitter' => $about
        ];
        $message = build_email_html("Career Inquiry", "A new candidate has submitted their job application details from the careers page.", $fields);

		
        $flgchk = send_smtp_mail(
            $to, 
            $subject, 
            $message, 
            $email, 
            $firstname . ' ' . $lastname, 
            $target_dir . $filename, 
            $_FILES["resumefile"]["name"]
        );
		if($flgchk)	{
			if ($is_ajax) {
				if (ob_get_length()) ob_clean();
				header('Content-Type: application/json');
				echo json_encode(['status' => 'success', 'message' => 'Your application has been submitted successfully!']);
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
			window.location = 'careers.php'; 
		</script>
        <?php		
		} //End Of inner If
      }else{
		if ($is_ajax) {
			if (ob_get_length()) ob_clean();
			header('Content-Type: application/json');
			echo json_encode(['status' => 'error', 'message' => 'Please upload resume']);
			exit;
		}
	  ?>
      <script language="javascript" type="text/javascript"> 
          alert("Please upload resume");
          	window.location = 'careers.php'; 
          	</script>
      <?php }
	} //End Of Outer If
?>