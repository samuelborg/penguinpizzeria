<?php
    $page = "booking";

    include('templates/header.php');


?>
<script src="js/verification.js"></script>
<div class="panel panel-default wow fadeInUp">
     <div class="panel-body">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Booking
                        <strong>an Igloo</strong>
                    </h2>
                    <hr>

                    <?php

                       function has_header_injection($str)
                       {
                        return preg_match("/[\r\n]/",$str);
                       }
                        if(isset($_POST['booking_submit']))
                        {
                            $name = trim($_POST['name']);
                            $email = trim($_POST['email']);
                            $tel = $_POST['tel'];
                            $no_ppl = $_POST['no_ppl'];
                            $date = $_POST['date'];
                            $time = $_POST['time'];

                            if(has_header_injection($name) ||has_header_injection($email))
                            {
                                die();
                            }

                            if(!$name ||!$email ||!$tel ||!$no_ppl ||!$date ||!$time)
                            {
                                echo '<h4>ALL FIELDS REQUIRED </h4>';
                            ?>
                            <div class="form-group col-lg-12">
                                <a href = "booking.php" class="btn btn-default">Go Back</a>
                            </div>

                            <?php

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
                    $mail->addCC('xuerebmatt@gmail.com');

                    $mail->Subject = "Table reservation for $no_ppl on $date";


                    $mail->IsHTML(true);
                    $mail->Body = "<b>Name:</b> $name<br>";
                    $mail->Body .= "<b>Email:</b> $email<br>";
                    $mail->Body .= "<b>Contact Number:</b> $tel<br>";
                    $mail->Body .= "<b>Number of people:</b> $no_ppl<br>";
                    $mail->Body .= "<b>Date:</b> $date<br>";
                    $mail->Body .= "<b>Time:</b> $time<br>";
                    $mail->Body .= '<br><br><img src="http://i.imgur.com/OCp8y22.png">';

                    //Set the mail headers into a variable
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/plain; charset-iso-8859-1\r\n";
                    $headers .= "From: $name <$email>\r\n";
                    $headers .= "X-Priority :1\r\n";
                    $headers .= "X-MSMail-Priority :High\r\n\r\n";
                    //$mail->Body .= $_POST['name']. "\r\n" .$_POST['email']. "\r\n". $_POST['tel']. "\r\n". $_POST['no_ppl']."\r\n". $_POST['date']."\r\n". $_POST['time'];
                    if (!$mail->Send()) {
                        echo '<div class="panel panel-danger wow shake"><div class="panel-heading"><h2><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;Whoops!</h2></div><div class="panel-body">Mailer Error: ' . $mail->ErrorInfo . '<br> <br> <a href="contact.php"><button  class="btn btn-default" name="back">Back to form</button></a>
                            </div>
                        </div></div>';

                    } else {
                        echo '<div class="panel panel-success"> <div class="panel-heading"><h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Thank you for booking an igloo!</h3></div><div class="panel-body">
                    <p>We\'re warming up the igloo and setting a table in it as you are reading this!<br>As a token of our apprectiation for booking an igloo, you can claim a FREE pizza. It\'s completely on us. Trust us!</p><br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><button  class="btn btn-default" name="back">Get your FREE PIZZA</button></div></div>';
                    }   }
                        }
                    else
                    {
                    ?>
                        <p>Decided you wanted to try our delicious food? Our penguins will be very grateful!! Fill out this form to secure your igloo for a fine dining experience.</p>
                    <form role="form" method="POST" action="" id="booking-form" onsubmit="return validate()">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="name">Name</label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="First and Last Name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="email">Email Address</label>
                                <input name="email" id="email" type="text" class="form-control" placeholder="e.g. name@example.com">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="tel">Phone Number</label>
                                <input name="tel" id="tel" type="text" class="form-control" placeholder="e.g. 21/79/77/99 XXXXXX">
                            </div>

                            <div class="clearfix"></div>
                            <div class="form-group col-lg-3"></div>

                            <div class="form-group col-lg-2">
                                <label for="no_ppl">No. of people</label>
                                <input name="no_ppl" type="number" id="no_ppl" min="1" max="10" placeholder="1-10">
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="date">Date</label>
                                <input name="date" id="date" type="date" class="form-control">
                            </div>

                            <div class="form-group col-lg-2">
                                <label for="time">Time</label>
                                <input name="time" id="time" type="time" class="form-control">
                            </div>


                            <div class="clearfix"></div>

                            <div class="form-group col-lg-12">
                                <input type="submit" class="btn btn-default wow tada" name="booking_submit" value="BOOK YOUR IGLOO">
                            </div>
                        </div>
                    </form>

        <script>

         function validate()
        {
            return (verifyNull() && verifyTime() && verifyEmail() && date_valid());
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
