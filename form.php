<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer/PHPMailer.php'; 
require 'PHPMailer/PHPMailer/SMTP.php'; 
 
// Create an instance of PHPMailer class 

if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $movefrom = $_POST['movefrom'];
        $moveto = $_POST['moveto'];
        $service = $_POST['service'];
        $msg = $_POST['msg'];
        
$mail = new PHPMailer;
// SMTP configuration
// $mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'standupstartups1@gmail.com';
$mail->Password = 'Standup@123';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
// Sender info 
$mail->setFrom('info@glsplindia.in', 'Ritco Express'); 
$mail->addReplyTo('info@glsplindia.in', 'Test Email'); 
 
// Add a recipient 
$mail->addAddress('gouravlogisticsolution@gmail.com'); 
 
// Add cc or bcc  
// $mail->addCC('cc@example.com'); 
// $mail->addBCC('bcc@example.com'); 
 
// Email subject 
$mail->Subject = 'Enquiry Received'; 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Email body content 
$mailContent = ' 
    <h2>New Enquiry Received</h2> 
    <p>Name :'.$name.'</p> 
    <p>Phone :'.$phone.'</p> 
    <p>Email :'.$email.'</p> 
    <p>Movefrom :'.$movefrom.'</p> 
    <p>Moveto :'.$moveto.'</p> 
    <p>Service :'.$service.'</p> 
    <p>Message :'.$msg.'</p> 
    <p>Thanks and Regards</p>  
    <p>Ritco Express</p>';  
// $mailContent = "Name : ".$name."\n"."Subject : ".$subject."\n"."Email : ".$email."\n"."Mbile : ".$mobile."\n"."Message :".$message; 
$mail->Body = $mailContent; 
$mail->headers  = "From: Sender Name <standupstartups1@gmail.com>" . "\r\n";
$mail->headers .= 'MIME-Version: 1.0' . "\r\n";
$mail->headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 
// Send email 
if(!$mail->send()){ ?>
    <script>
    alert("Message could not be sent");
    window.location.href="https://www.ritcoexpress.com/thanks.html";
    </script>
    // 
    <?php
    
}else{ ?>
    <script>
    //   $(document).ready(function(){
    //       setTimeout(function() {
             
            //   if( $_GET['status'] == 'success') {
                //  alert("Mail Send Successfully");
                 window.location.href="https://www.ritcoexpress.com/thanks.html";
            //   }
            //   else{
            //       echo 'alert("no good");';
            //   }
              
    //           }, 500);
    //   });
  </script>
  <?php
  
}
}
?>