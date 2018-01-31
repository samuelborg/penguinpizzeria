<?php
    define("TITLE", "Contact | Penguin Pizzeria");
    $image = "contact";
    $heading = "Contact Us";
    $sub_heading = "WE JUST GOT CABLE";


    include('templates/header.php');
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="form1" class="Form1" background="wood.png">
                        <h1 class="section-heading">&nbsp;Book a Table</h1>
                        <form name="form1" onsubmit="return Validation(); ">
                            &nbsp;Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Surname:
                            <br>&nbsp;<input type="text" name="firstname" id="firstname">
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" id="lastname"><br><br>
                            &nbsp;Telephone Number:<br>
                            &nbsp;<input type="number" name="telephone" id="telephone"><br><br>
                            &nbsp;Number of People:<br>
                            &nbsp;<input type="number" name="ppl" id="ppl"><br><br>
                            &nbsp;Table Location:<br>
                            &nbsp;<input type="radio" name="loc" id="loc" checked>Inside
                            &nbsp;<input type="radio" name="loc" id="loc">Outside<br><br>
                            &nbsp;<input type="email" name="email" id="email">E-mail<br><br> &nbsp;Date:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Time:<br>
                            &nbsp;<input type="date" name="date" id="date">&nbsp;&nbsp;&nbsp;
                            &nbsp;<input type="time" name="time" id="time"><br><br>
                                                        &nbsp;<input type="submit" name="booked" value="Book a Table" id="booking" onclick="has_header_injection(form1)">
                        </form>
                    </div>
                    <div id="form2" class="form2">
                        <h1 class="section-heading">&nbsp;Submit a Query</h1>
                        <form name="form2" onsubmit="return Validation();">
                            &nbsp;Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;E-mail:<br>
                            &nbsp;<input type="text" name="name" id="Qname">&nbsp;&nbsp;&nbsp;
                            &nbsp;<input type="email" name="email" id="Qemail"><br><br>
                            &nbsp;Your Query:<br>
                            &nbsp;<textarea style="width: 365px; height: 150px;" class="field-element" id="Qcomment"></textarea>
                            <br>&nbsp;<input type="submit" name="submit" value="Submit" id="query">
                        </form>
                    </div>
                </div>
            </div>
        </div>
               
<?php
        function has_header_injection($str)
    {
        return preg_match( "/[\r\n]/", $str );
    }
 
        if (isset ($_POST['booking'])) {
        $firstname = trim($_POST['firstname']);
                $lastname = trim($_POST['lastname']);
                $tel = $_POST['telephone'];
                $ppl = $_POST['ppl'];
        $email = trim($_POST['email']);
                $location = $_POST['loc'];
        $date = $_POST['date'];
                $time = $_POST['time'];
                   
        if (has_header_injection($firstname) || has_header_injection($lastname) || has_header_injection($tel) || has_header_injection($ppl) || has_header_injection($email) || has_header_injection($location) || has_header_injection($date) || has_header_injection($time))
        {
        die();
    }
 
    if ( !$firstname || !$lastname || !$tel || !$email || !$ppl || !$location || $date || $time )
    {
                echo '<div class="panel panel-danger wow shake"><div class="panel-heading"><h2><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;Whoops!</h2></div><div class="panel-body">All fields are required to be filled.<br><br>
                        <a href="AtlantisContact.php"><button  class="btn btn-default" name="back">Back to the cellar with youu me mateyyy!
                                                </button></a>
                            </div>
                        </div></div>';
    }
    else
    {
                require 'PHPMailerAutoload.php';
                         
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls";
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "ClassyAtlantis@gmail.com";
        $mail->Password "kurtdylanjeanpaul";
        $mail->setFrom($email, $firstname);
        $mail->addAddress('ClassyAtlantis@gmail.com');
        $subject = "$firstname $lastname sent a message via contact form.";
 
        $mail->Body .= "\r\n\r\nType: Booking\r\n";
 
       
                    if (!$mail->Send()) {
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                       
                    } else {
                        echo '<div class="panel panel-success"> <div class="panel-heading"><h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Thank you for contacting us!</h3></div><div class="panel-body">
                    <p>Our drunken sailors will try to be sober enough to give you a response using a message bottle at sunrise.</p></div></div>';
                    }

<?php
    include('templates/footer.php');
?>
