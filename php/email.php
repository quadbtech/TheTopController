<?php

require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';
require_once 'link.php';

$email="";
$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set("Asia/Calcutta");
$date_now = date("r");

if(isset($_POST['email'])){

    if (filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
        $query = "INSERT INTO `coming_soon` (`email`, `from_ip`, `from_browser`, `date`) VALUES ('$email' , '$from_ip', '$from_browser', '$date_now')";

        if($result = mysqli_query($link, $query))  {
                        
            $err = array();

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            
            $mail->isSMTP();  // the mailer is set to use SMTP
            // $mail->Host = "smtp.zoho.in";  // specify main and backup server
            // $mail->SMTPAuth = true; // SMTP authentication is turned on
            // $mail->Username = "support@thetopcontroller.com";  // SMTP username
            // $mail->Password = "#Rajabeta420"; // SMTP password
            // $mail->SMTPSecure = 'ssl';
            // $mail->Port = 465;

            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
            $mail->SMTPAutoTLS = false; 
            $mail->Port = 25; 
            
            $mail->From = "promotions@thetopcontroller.com";
            $mail->FromName = "The Top Controller";	 // name is optional
            $mail->AddAddress($email);
            $mail->AddReplyTo("promotions@thetopcontroller.com", "Promotions | The Top Controller");
            
            $mail->WordWrap = 50;  // set word wrap to 50 characters
            $mail->IsHTML(true); // set email format to HTML
            
            $mail->Subject = "Your Exclusive Invitation to TopController";
            $mail->Body    = file_get_contents('template.html');
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
            
            if(!$mail->Send()) {
                $err['mail'] = $mail->ErrorInfo;
                echo $err['mail'];
                //    echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
            }
            else{
                // echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
            }

            echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
        }else{
            echo "<script>console.log('error','problem with query')</script>"; 
        }

    } else{
        echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
    }
    

}else{
    echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
}






// $err = array();

// $mail = new PHPMailer\PHPMailer\PHPMailer();

// $mail->isSMTP();  // the mailer is set to use SMTP
// $mail->Host = "smtp.zoho.in";  // specify main and backup server
// $mail->SMTPAuth = true; // SMTP authentication is turned on
// $mail->Username = "support@thetopcontroller.com";  // SMTP username
// $mail->Password = "#Rajabeta420"; // SMTP password
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 465;

// $mail->From = "support@thetopcontroller.com";
// $mail->FromName = "The Top Controller";	 // name is optional
// $mail->AddAddress('support@thetopcontroller.com');
// $mail->AddReplyTo("support@thetopcontroller.com", "Support | The Top Controller");

// $mail->WordWrap = 50;  // set word wrap to 50 characters
// $mail->IsHTML(true); // set email format to HTML

// $mail->Subject = "The Top Controller form submission";
// $mail->Body    = "There has been a form submission.<br>Email : ".$email."<br>From IP : ".$from_ip."<br>From Browser : ".$from_browser;
// $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     if(!$mail->Send()) {
//         $err['mail'] = $mail->ErrorInfo;
//         echo $err['mail'];
//         //    echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
//     }
//     else{
//         echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
//     }
// }
// else{
//     echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
// }



// $to = 'info@thetopcontroller.com';
// $subject = 'Message from TheTopController.com';

// $name = "";
// $email = "";
// $phone = "";
// $message = "";
// $body = "body: ";
// $body .= "\n\n";

// if( isset($_POST['name']) ){
//     $name = $_POST['name'];

//     $body .= "Name: ";
//     $body .= $name;
//     $body .= "\n\n";
// }
// if( isset($_POST['subject']) ){
//     $subject = $_POST['subject'];
// }
// if( isset($_POST['email']) ){
//     $email = $_POST['email'];

//     $body .= "";
//     $body .= "Email: ";
//     $body .= $email;
//     $body .= "\n\n";
// }
// if( isset($_POST['phone']) ){
//     $phone = $_POST['phone'];

//     $body .= "";
//     $body .= "Phone: ";
//     $body .= $phone;
//     $body .= "\n\n";
// }
// if( isset($_POST['message']) ){
//     $message = $_POST['message'];

//     $body .= "";
//     $body .= "Message: ";
//     $body .= $message;
//     $body .= "\n\n";
// }

// $headers = "From: " . $to . "\r\n" .
//     "Reply-To: " . $to . "\r\n" .
//     "X-Mailer: PHP/" . phpversion();

// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     mail($to, $subject, $body, $headers);
//     echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
// }
// else{
//     echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
// }




// $send_to = "support@thetopcontroller.com";
// $send_subject = "Contact form ";



// /*Be careful when editing below this line */

// $f_email=cleanupentries($_POST["email"]);
// $from_ip = $_SERVER['REMOTE_ADDR'];
// $from_browser = $_SERVER['HTTP_USER_AGENT'];

// function cleanupentries($entry) {
// 	$entry = trim($entry);
// 	$entry = stripslashes($entry);
// 	$entry = htmlspecialchars($entry);

// 	return $entry;
// }

// $message = "This email was submitted on " . date('m-d-Y') . 
// "\n\nEmail: \n" . $f_email . 
// "\n\n\nTechnical Details:\n" . $from_ip . "\n" . $from_browser;

// $send_subject .= " - {$f_email}";

// $headers = "From: " . $f_email . "\r\n" .
//     "Reply-To: " . $f_email . "\r\n" .
//     "X-Mailer: PHP/" . phpversion();


// if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
//     if(mail($send_to, $send_subject, $message, $headers)){
//         echo "mail sent";
//     }
//     echo "true";
// }else{
//     echo "invalid email";
//     exit;
// }


?>