<html>
    <head>
        <!--Bootstrap-->
        <title>CeylonDew | Contact</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


                    <!--Google font-->
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                            <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">


                                    <!--Style link-->
                                    <link href="css/style.css" rel="stylesheet" type="text/css"/>
                                    </head>
                                    <body class="BG">
                                        <!--Navigation-->
                                        <?php include './navigation.php'; ?>

                                        <!--Active class adding to the navigation-->
                                        <script>
                                            document.getElementById("nav-menu4").classList.add("active", "navbtn");
                                        </script>

                                        <!--Contact image content-->
                                        <div class="carousel slide imageset" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="Images/Contact.jpg" class="response">
                                                            <h1 class="CarouselLable">Contact Us</h1>
                                                </div>
                                            </div>
                                            <div class="custom-shape-divider-bottom-1675852237 none">
                                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                                                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                                                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                                                </svg>
                                            </div>
                                        </div>

                                        <center>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                                                        <img src="Images/Icon.jpg" class="mt-3 img-fluid contactlogo">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <h3 class="contentheader mt-5">Our details</h3>
                                                        <p class="text">
                                                            Beach road , Unawatuna ,<br>
                                                                Galle.<br>
                                                                    Phone: (+94) 71 999 8157
                                                                    </p>
                                                                    </div>
                                                                    </div>

                                                                    <hr>

                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                                <h3 class="contentheader mt-5">How to find us</h3>
                                                                                <p class="text">If you have any questions , just fill in the contact form<br> and we will answer you shortly. If you are living nearby ,<br> then come and visit our place.</p>
                                                                                            </div>



                                                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                                                <h3 class="contentheader mt-5">Get in touch</h3>
                                                                                                <form action="contact.php" method="post">
                                                                                                    <div class="row">
                                                                                                        <div class="col-25">
                                                                                                            <label for="name" class="headerfont">Name</label>
                                                                                                        </div>
                                                                                                        <div class="col-75">
                                                                                                            <input type="text" id="name" name="fullname" id="fullname" placeholder="Type your name" class="text" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-25">
                                                                                                            <label for="email" class="headerfont">Email</label>
                                                                                                        </div>
                                                                                                        <div class="col-75">
                                                                                                            <input type="text" id="email" name="email" placeholder="Email" class="text" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-25">
                                                                                                            <label for="contact" class="headerfont">Subject</label>
                                                                                                        </div>
                                                                                                        <div class="col-75">
                                                                                                            <input type="text" id="subject" name="subject" placeholder="Subject" class="text" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-25">
                                                                                                            <label for="subject" class="headerfont">Message</label>
                                                                                                        </div>
                                                                                                        <div class="col-75">
                                                                                                            <textarea id="message" name="message" placeholder="Write your inquiry" class="text" required></textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                                                                            <button type="submit" name="submit" class="btn btn-primary headerfont" onclick="myFunction()">Send Message</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <br>
                                                                                                </form>
                                                                                            </div>


                                                                                            <?php
                                                                                            // checking if the form is submit
                                                                                            if (isset($_POST['submit'])) {
                                                                                                $fullname = $_POST['fullname'];
                                                                                                $email = $_POST['email'];
                                                                                                $subject = $_POST['subject'];
                                                                                                $message = $_POST['message'];

                                                                                                $to = 'srilankatoursdev@gmail.com';
                                                                                                $mail_subject = 'Message from Website';
                                                                                                $email_body = "Message from Contact Us Page of the Website: <br>";
                                                                                                $email_body .= "<b>From:</b> {$fullname} <br>";
                                                                                                $email_body .= "<b>Subject:</b> {$subject} <br>";
                                                                                                $email_body .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

                                                                                                $header = "From: {$email}\r\nContent-Type: text/html;";

                                                                                                $send_mail_result = mail($to, $mail_subject, $email_body, $header);

                                                                                                if ($send_mail_result) {
                                                                                                    echo "<script>alert(Message Sent.)</script>";
                                                                                                } else {
                                                                                                    echo "<script>alert(Message Not Sent.)</script>";
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                            <!--Gemstone or Moonstone requesting part end-->

                                                                                            </div>
                                                                                            </div>
                                                                                            </center>


                                                                                            <!--Footer-->
                                                                                            <?php include './footer.php'; ?>
                                                                                            </body>
                                                                                            </html>
