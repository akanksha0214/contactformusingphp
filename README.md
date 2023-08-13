# contactformusingphp
A contact form using html and php which send email to owner and stores in database





Step 1- Download the zip file and extract it.
Step 2- Download xampp and copy,paste the project into xampp/htdocs folder
Step 3- Start the Apache and MySQL server over there
Step 4- Download phpmyadmin to connect to the database
Step 5- Create database of name "database_form" and import the sql file "conact_form"  from the project folder
Step 6- To connect mailserver to your mail address go to index.php file, scrool down to locate PHPmailserver function and
enter your email address.
Step 7- To create password go to your mail account setting and security and 2 step verfication
now go to app setting from their and create a project choosing others and generate password 
now paste that password in the index.php password section 

$mail->Username   = 'enteryouremailaddress.com';                     //SMTP username
$mail->Password   = 'enterpasswordgeneratedbygoogle2stepverfication';

And also
//Recipients
            $mail->setFrom('entertheemailfromwhichtosend', 'Mailer');
            $mail->addAddress('enterhostemailaddress', 'Host');     //Add a recipient

Save all file and now you can proceed to browser to test your project.            
