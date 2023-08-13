
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Form</title>
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing: border-box
}
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif;
}

.main {
    width: 600px;
    margin: 100px auto;
  }
  .single-form {
    margin-bottom: 25px;
  }
  .single-form label {
    display: block;
    font-size: 22px;
  }
  .single-form input, .single-form textarea {
    width: 100%;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 16px;
    margin-top: 7px;
  }
  .single-form input[type="submit"] {
    background-color: #ff7720;
    border: 0;
    color: #fff;
    font-size: 22px;
    cursor: pointer;
  }
  .single-form span {
	color: red;
	font-weight: bold;
	display: block;
	margin-top: 5px;
}
</style>
</head>
<body>
    <div class="main">
        <form  action= "<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
        <form action="insert.php" method="POST">
            <center>
            <div class="single-form">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name" value="<?php if(isset($name)) echo $name; ?>">
                <span>
                    <?php
                        if(isset($error['name'])){
                            echo $error['name'];
                        }
                    ?>
                </span>
            </div>
            <br>
            <div class="single-form">
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Your Subject" value="<?php if(isset($subject)) echo $subject; ?>">
                <span>
                    <?php
                        if(isset($error['subject'])){
                            echo $error['subject'];
                        }
                    ?>
                </span>
            </div>
            <br>
            <div class="single-form">
                <label>Email</label>
                <input type="email" name="email" placeholder="Your Email" value="<?php if(isset($email)) echo $email; ?>">
                <span>
                    <?php
                        if(isset($error['email'])){
                            echo $error['email'];
                        }
                    ?>
                </span>
            </div>
            <br>
            <div class="single-form">
                <label>Message</label>
                <textarea name="message" placeholder="Your Message" value="<?php if(isset($message)) echo $message; ?>"></textarea>
                <span>
                    <?php
                        if(isset($error['message'])){
                            echo $error['message'];
                        }
                    ?>
                </span>
            </div>
            <br>
            <div class="single-form">
                <label>Mobile Number</label>
                <textarea name="number" placeholder="Your Number" value="<?php if(isset($number)) echo $number; ?>"></textarea>
                <span>
                    <?php
                        if(isset($error['number'])){
                            echo $error['number'];
                        }
                    ?>
                </span>
            </div>
            <br>
            <div class="single-form">
                <input type="submit" value="Send Message" name="btn">
            </div>
                    </form>
        </form>

        </div>
                    </center>
</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $number=$_POST['number'];

        require 'PHPMailer\Exception.php';
        require 'PHPMailer\PHPMailer.php';
        require 'PHPMailer\SMTP.php';
        
        
        //Create an instance; passing `true` enables exceptions
        //$mail = new PHPMailer(true);
        $mail = new PHPMailer(true);
        try {
            //Server settings
            
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '@techsolveitservice.com';                     //SMTP username
            $mail->Password   = 'enterpasswordgeneratedbygoogle2stepverfication';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('@techsolveitservice.com', 'Mailer');
            $mail->addAddress('@techsolveitservice.com', 'TechsolveIT');     //Add a recipient
            
        
            
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "New form have been received from  $name";
            $mail->Body    = "Check the details $name <br> $subject <br> $message <br> $email <br> $number";
            
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        // Error Checking
        $error = [];

        if(empty($_POST['name'])){
            $error['name'] = 'Insert Your Name';
        }
        if(empty($_POST['subject'])){
            $error['subject'] = 'Insert Your Subject';
        }
        if(empty($_POST['email'])){
            $error['email'] = 'Insert Your Email';
        }
        if(empty($_POST['message'])){
            $error['message'] = 'Insert Your Message';
        }
        if(empty($_POST['number'])){
            $error['number'] = 'Insert Your number';
        }

        // Mail
        ini_set('SMTP','localhost');
        ini_set('smtp_port',25);

    }
?>
        
        
    

