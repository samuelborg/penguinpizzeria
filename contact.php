<?php
    $page = "contact";

    include('templates/header.php');
?>
<script src="js/verification.js"></script>

        <div class="panel panel-default wow fadeInUp">
         <div class="panel-body">
     <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>


                    <?php

                    function has_header_injection($str)
                    {
                        return preg_match( "/[\r\n]/", $str );
                    }


                 if (isset ($_POST['submit_button'])) {
                    $type = $_POST['type'];
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $tel = $_POST['tel'];
                    $msg = $_POST['msg'];

                    if (has_header_injection($name) || has_header_injection($email) || has_header_injection($tel) || has_header_injection($msg))
                    {
                        die();
                    }

                    if ( !$name || !$email || !$tel || !$msg )
                    {
                        echo '<div class="panel panel-danger wow shake"><div class="panel-heading"><h2><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;Whoops!</h2></div><div class="panel-body">All fields are required to be filled.<br><br>
                        <a href="contact.php"><button  class="btn btn-default" name="back">Back to form</button></a>
                            </div>
                        </div></div>';

                    }
                     else
                     {

                    require 'php/PHPMailerAutoload.php';

                    $mail = new PHPMailer;
                    $mail->IsSMTP();
                    $mail->SMTPAuth = true;
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Mailer = "smtp";
                    $mail->Port = 587;
                    $mail->SMTPSecure = 'tls';
                    $mail->Username = "penguinpizzeria@gmail.com";
                    $mail->Password = "poopnugget69";
                    $mail->setFrom($email, $name);

                    $mail->addAddress('penguinpizzeria@gmail.com');
                    $mail->addCC('samuelborg712@gmail.com');
                    $mail->addBCC('xuerebmatt@gmail.com');

                    $subject = "$name sent a message via contact form.";
                         $mail->Body .= "<b>Type:</b> ";
                        if ($type == 'query' ) {

                            $mail->Body .= "Query";

                        }

                        if ($type == 'complaint' ) {

                            $mail->Body .= "Complaint";

                        }

                       // if (isset($_POST['feedback']) && $_POST['feedback'] == 'Subscribe' )
                        if ($type == 'feedback' )
                         {
                             $mail->Body .= "Feedback";
                        }

                    $mail->Body .= "<br><b>Name:</b> $name<br>";
                    $mail->Body .= "<b>Phone Number:</b> $tel<br>";
                    $mail->Body .= "<b>Email:</b> $email<br>";
                    $mail->Body .= "<b>Message:</b><br><br>$msg";
                    $mail->Body .= '<br><br><img src="http://i.imgur.com/OCp8y22.png">';
                    $mail->WordWrap = 72;

                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                    $headers .= "From: " . $name . " <" . $email . "> Tel: ". $tel . "\r\n";
                    $headers .= "X-Priority: 1\r\n";
                    $headers .= "X-MSMail-Priority: High\r\n\r\n";
                    $mail->IsHTML(true);
                    $mail->Subject = "$name sent a $type via contact form.";

                    if (!$mail->Send()) {
                        echo '<div class="panel panel-danger wow shake"><div class="panel-heading"><h2><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;Whoops!</h2></div><div class="panel-body">Mailer Error: ' . $mail->ErrorInfo . '<br> <br> <a href="contact.php"><button  class="btn btn-default" name="back">Back to form</button></a>
                            </div>
                        </div></div>';

                    } else {
                        echo '<div class="panel panel-success"> <div class="panel-heading"><h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Thank you for contacting us!</h3></div><div class="panel-body">
                    <p>Our clumsy penguins will try to get back to you within less than 24 hours.</p></div></div>';
                    }

                    ?>


                    <?php }


                     } else { ?>
                    <p>Have a message you want to send us? Fill out this form and we promise to get back to you as soon as possible.</p>
                    <form method="post" action="contact.php" id="contact-form" onsubmit="return validate()">
                        <div class="row">
                            <div class="form-group col-lg-2 horizontal-list">
                                <label>Type of Form</label><br>
                                <label><input type="radio" name="type" value="query" checked = "checked">&nbsp;&nbsp;<em>Query</em></label><br>
                                <label><input type="radio" name="type" value="complaint">&nbsp;&nbsp;<em>Complaint</em></label><br>
                                <label><input type="radio" name="type" value="feedback">&nbsp;&nbsp;<em>Other feedback</em></label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-4">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" name = "name" placeholder="First and Last Name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="email">Email Address</label>
                                <input id="email" type="text" class="form-control" name = "email" placeholder="e.g. name@example.com">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="tel">Phone Number</label>
                                <input id="tel" type="text" class="form-control" name = "tel" placeholder="e.g. 21/79/77/99 XXXXXX">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label for="message">Message</label>
                                <textarea id="message" name="msg" class="form-control" rows="6" placeholder="Your message here."></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default wow tada"  name="submit_button">Send</button>
                            </div>
                        </div>
                    </form>

    <script>
        function validate()
        {
            return (verifyNull() && verifyEmail() && verifyMessage());
        }
    </script>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('templates/footer.php');
?>
