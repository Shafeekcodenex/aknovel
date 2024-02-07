<?php
@session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arima:wght@100;200;300;400;500;600;700&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Aos css link -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel='stylesheet' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'>
</head>

<body>
    <header>
        <div class="main-container">
            <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.html"><img src="images/main-logo.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 header-navbar">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="our-founder.html">About us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="our-companies.html">Our Companies</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Our Team</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                      </li>
                    </ul>
                  </div>
              </nav>
        </div>
    </header>
    <section  class="our-companies-section our-companies-section-1 contact-us-sec">
        <div class="main-container">
        <div class="contact-us">
            <div class="row contact-us-row">
                <div class="col-lg-5 col-md-6 contcts-us-col">
                    <h2>
                        Contact Information
                    </h2>
                    <p>Say something to Collaborate</p>

                    <div class="contact-us-phone">
                        <div>
                        <img src="images/icons/contact-phone.png" alt="">
                    </div>
                        <h3>+1012 3456 789</h3>
                    </div>
                    <div class="contact-us-phone">
                        <div>
                        <img src="images/icons/contact-mail.png" alt="">
                    </div>
                        <h3>contact@aknovel.com</h3>
                    </div>
                    <div class="contact-us-phone contact-us-phone-1">
                        <div>
                        <img src="images/icons/contact-location.png" alt="">
                    </div>
                        <h3>33/2141A.Majidha building, Silver Hills <span> Calicut - 673 012, Kerala State - </span> India</h3>
                    </div>
                    <div class="contact-bg-img">
                    <img class="img-fluid" src="images/contact-bg.png" alt="">
                </div>
                <div class="contact-social-media">
                    <a href="#">
                        <img class="cntct-non-hvr" src="images/icons/contact-X.png" alt="">
                        <img class="cntct-hvr" src="images/icons/contact-X-hvr.png" alt="">
                    </a>
                    <a href="#">
                        <img class="cntct-non-hvr" src="images/icons/contact-insta.png" alt="">
                        <img class="cntct-hvr" src="images/icons/contact-insta-hvr.png" alt="">
                    </a>
                    <a href="#">
                        <img class="cntct-non-hvr" src="images/icons/contact-facebook.png" alt="">
                        <img class="cntct-hvr" src="images/icons/contact-facebook-hvr.png" alt="">
                    </a>
                </div>
                </div>
                <div class="col-lg-7 col-md-6">

                    <div class="contact-form">
                        <form action="send-mail.php" method="post" id="myForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-padd">
                                        <label for="exampleInputEmail1" class="form-label">First Name 
                        <?php
                    
                        if(isset($_SESSION['flash'])) {
                            echo $_SESSION['flash'];
                            unset($_SESSION['flash']);
                         }
                         ?></label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="f_name" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-padd">
                                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="l_name" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-padd">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-padd">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-padd form-padd-1">
                                    <label for="exampleInputEmail1" class="form-label">Message</label>
                                        <textarea class="form-control" placeholder="Write your message.." name="message" required></textarea>
                                        </div>
                                </div>
                            </div>

                            <button type="submit" class="btn" >Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>
    <footer>
        <div class="main-container">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <a href="index.html">
                        <img class="footer-main-logo" src="images/main-logo.png" alt="">
                    </a>

                    <p>Aknovel Cooperative Company members are 
                      <span>  the threads that weave the fabric of our </span>
                      <span> success. Together, we create stories of </span> 
                        collaboration, growth, and shared prosperity.   </p>
                </div>
                <div class="col-lg-2 col-md-2 footer-list">
                    <h4>INFORMATION</h4>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-list">
                    <h4>MENU</h4>
                    <ul>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our Founder</a></li>
                        <li><a href="#">Our Companies</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 footer-algn-col">
                    <div class="footer-rqst-call">
                    <a href="#">Request a call</a>
                </div>
                <div class="rqst-call">
                <h5>
                    +91 999 985 9988
                </h5>
                <h5>
                    info@aknovel.com
                </h5>
            </div>
            <div class="rqst-call rqst-call-1">
                <h5>
                    1901 Kozhikode, <br>
                    Westhill 81063
                </h5>
            </div>

                </div>
            </div>

            <div class="footer-scl-mda">
                <div class="social-media">
                    <a href="#"><img src="images/icons/footer-share.png" alt=""></a>
                </div>
                <div class="social-media social-media-1">
                    <a href="#"><img src="images/icons/footer-whatsapp.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="aftr-footer">
        <div class="row">
            <div class="col-lg-6">
                <h2>Lorem Ipsum Is Simply Dummy Text Of The Printing  </h2>
            </div>
            <div class="col-lg-6 footer-mail-send">
                <div class="form-group">
                    <label for="exampleInputEmail1">Just send us your contact email and we will contact you.</label>
                    <form>
                        <input type="search" class="form-control" placeholder="YOUR EMAIL">
                        <button type="submit">Arrow</button>
                      </form>
                  </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <h5>© 2024 — Copyright</h5>
    </div>
    </div>
    </footer>


    <!-- Main js link -->
    <script src="main.js"></script>
    <!-- Aos js link -->
    <script src="js/aos.js"></script>
    <script src='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>