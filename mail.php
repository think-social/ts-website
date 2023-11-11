<?php
                  use PHPMailer\PHPMailer\PHPMailer;
                  use PHPMailer\PHPMailer\SMTP;
                  use PHPMailer\PHPMailer\Exception;

                  require ('PHPMailer/Exception.php');
                  require ('PHPMailer/SMTP.php');
                  require ('PHPMailer/PHPMailer.php');

                  

                  if(isset($_POST['Send']))
                  {
                     //get data from form

                       $name = $_POST['Name'];
                       $phone = $_POST['Phone'];
                       $email = $_POST['Email'];
                       $message = $_POST['Message'];

                       $messagecontent ="Name : $name  <br>Phone : $phone <br>Email : $email <br>Message : $message";

                       $mail = new PHPMailer(true);
                       try {
                        //Server settings
                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp-relay.brevo.com';                     //Set the SMTP server to send through
                        // $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
                         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'bot@thinksocial.live';                     //SMTP username
                        $mail->Password   = 'xsmtpsib-b5a546f671d6724a670319c4083304078d0b39658ab0a911d729d1e9d8368d0b-Fkg5wv0BOGSMQyn4';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = //PHPMailer::ENCRYPTION_STARTTLS`
                    
                        //Recipients
                        $mail->setFrom('bot@thinksocial.live');
                        // $mail->addAddress('vinitpatel2019@gmail.com');     //Add a recipient
                        $mail->addAddress('contact@thinksocial.live');               //Name is optional
                        $mail->addReplyTo('contact@thinksocial.live');
                        // $mail->addCC('cc@example.com');
                        // $mail->addBCC('bcc@example.com');
                    
                        //Attachments
                    
                        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                       // $mail->addAttachment('photo.jpeg', 'photo.jpeg');    //Optional name
                    
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Inquiry From Customer ';
                        $mail->Body    = $messagecontent;
                        
                    
                        $mail->send();
                        
                        header("Location:thanks.php");
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    //redirect
                    // header("Location:thankyou.html");
                    
                  }
                  ?>