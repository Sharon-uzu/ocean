

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "cargo");
// $_SESSION['invoice'] = $array['invoice'];
    // $track = $_GET['track'];
    // $sql = "SELECT * FROM `form` WHERE `track` = '$track'";
    // $result = mysqli_query($conn, $sql);
    
    // session_start();
    // $conn = mysqli_connect("localhost", "root", "", "cargo");
    // $track = $_GET['track'];


    // $sql = "SELECT * FROM `form` WHERE `track` = '$track'";
    // $result = mysqli_query($conn, $sql);
    // $numrows = mysqli_num_rows($result);
    // $array = mysqli_fetch_array($result);

    // if($numrows !=0){
    //     $array = mysqli_fetch_array($result);
    
    //     if($track == $array['track']){
    //         $_SESSION['track'] = $array['track'];
    //     }else{
           
    //         echo 'Incorrect number';
    //     }
    // }else{
    //     echo 'empty';
    
    // }
       
    // 
    ?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<!-- Mirrored from oceanexpress-delivery.com/track/tracking by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jun 2023 13:32:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<link rel="stylesheet" href="../css/track.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title> CARGO MERIT </title>

    <!--  FAVICON  -->
    <!-- <link rel="shortcut icon" href="images/icons/favicon.png"> -->

    <!-- FONT AWESOME ICONS LIBRARY -->
    <link rel="stylesheet" href="fonts/css/all.min.css">

    <!-- CSS LIBRARY STYLES -->
    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <link rel='stylesheet' href="css/lib/flickity.min.css">
    <link rel='stylesheet' href="css/lib/magnific-popup.min.css">
    <link rel="stylesheet" href="css/lib/owl.carousel.min.css">
    <link rel="stylesheet" href="css/lib/slick.min.css">
    <link rel="stylesheet" href="css/lib/aos.min.css">
    <link rel="stylesheet" href="css/navbar.css">

    <!-- CSS TEMPLATE STYLES -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- MODERNIZR LIBRARY -->
    <script src="js/modernizr-custom.js"></script>

</head>

<body>

    <!-- PRELOADER START -->
    <div id="loader-wrapper">
        <div class="loader" id="cube"></div>
    </div>
    <!-- PRELOADER END -->

    <header>
        <!-- TOP HEADER START -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <!--<div class="col-lg-6">
                        <ul class="top-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>-->
                    <div class="col-lg-6">
                        <ul class="top-contact">
                            <li class="phone"><a href="tel:+1 321-378-0451"> +1 321-378-0451</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP HEADER END -->

        <!-- NAV START -->
                <!-- NAV START -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="../error/index.html" class="navbar-brand"><img src="../images/logos/logoo.jpeg" alt="" style="width: 90%;height: 70px;"></a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown">
                            <a href="../home.html" class="nav-item nav-link">HOME</a>
                        </li>
                        <li class="dropdown">
                            <a href="../about.html" class="nav-item nav-link">ABOUT</a>
                        </li>
                        <li class="dropdown">
                            <a href="../services.html" class="nav-item nav-link">SERVICES</a>
                        </li>
                        <li class="dropdown">
                            <a href="../faq.html" class="nav-item nav-link">FAQ</a>
                        </li>
                        <li class="dropdown">
                            <a href="../contact.html" class="nav-item nav-link">CONTACT</a>
                        </li>
                        <li class="dropdown" style="margin-top:12px;margin-left:5px"><a class="btn btn-default" href="tracking.html" role="button">Tracking</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAV END -->
        <!-- NAV END -->

    </header>        <!-- PAGE NAV START -->
        <div class="pages-hero">
            <div class="container">
                <div class="pages-title">
                    <h1>Tracking</h1>
                    <div class="page-nav">
                        <p>Home &nbsp; | &nbsp; Tracking</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE NAV END -->
    </header>

<body>

    <!-- TRACKING DETAILS -->
    <div class="details">
        <h1>TRACKING DETAILS</h2>
        <div class="welcome">
           <h2>Tracking Number</h2>
           <p><?php echo  $_SESSION['track'] ;  ?></p> 
        </div>
        <div class="welcome">
            <h2>Invoice</h2>
            <p><?php echo  $_SESSION['invoice'] ;  ?></p> 
         </div>
        <div class="track">
            <div class="th">
                <h2>RECEIVER'S DETAILS</h2>
            </div>
            <div class="td">
                <div class="welcome">
                    <h3>Name:</h3>
                    <p><?php echo  $_SESSION['receivers name'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>Tel:</h3>
                    <p><?php echo  $_SESSION['receivers phone'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>E-mail:</h3>
                    <p><?php echo  $_SESSION['receivers email'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>Address:</h3>
                    <p><?php echo  $_SESSION['receivers address'] ;  ?></p>
                </div>
                
            </div>
        </div>
        
        <div class="track">
            <div class="th">
                <h2>SENDER'S DETAILS</h2>
            </div>
            <div class="td">
                <div class="welcome">
                    <h3>Name:</h3>
                    <p><?php echo  $_SESSION['senders name'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>Tel:</h3>
                    <p><?php echo  $_SESSION['senders phone'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>E-mail:</h3>
                    <p><?php echo  $_SESSION['senders email'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>Address:</h3>
                    <p><?php echo  $_SESSION['senders address'] ;  ?></p>
                </div>
                
            </div>
        </div>


        <div class="track">
            <div class="th">
                <h2>ITEM(S) DESCRIPTION</h2>
            </div>
            <div class="td">
                <div class="welcome">
                    <h3>Item:</h3>
                    <p><?php echo  $_SESSION['item'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3><?php echo  $_SESSION['number of item'] ;  ?></h3>
                    <p>1</p>
                </div>
                
                
            </div>
        </div>


        <div class="track">
            <div class="th">
                <h2>PARCEL TRANSIT</h2>
            </div>
            <div class="td">
                <div class="welcome">
                    <h3>Destination:</h3>
                    <p><?php echo  $_SESSION['destination'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>Date sent:</h3>
                    <p><?php echo  $_SESSION['date sent'] ;  ?></p>
                </div>
                <div class="welcome">
                    <h3>Estimated delivery Date:</h3>
                    <p><?php echo  $_SESSION['delivery date'] ;  ?></p>
                </div>
                
                
            </div>
        </div>


        <div class="track">
            <div class="th">
                <h2>PARCEL MOVEMENT</h2>
            </div>
            <div class="td1">
                <div class="welcome">
                    <h3><?php echo  $_SESSION['first destination'] ;  ?></h3>
                    <h3><?php echo  $_SESSION['second destination'] ;  ?></h3>
                    <h3><?php echo  $_SESSION['third destination'] ;  ?></h3>
                </div>
                
                
            </div>
        </div>

        <div class="track">
            <div class="th">
                <h2>STATUS</h2>
            </div>
            <div class="td1">
                <div class="welcome">
                    <H3><?php echo  $_SESSION['status'] ;  ?></H3>
                </div>
                
                
            </div>
        </div>




    </div>
        
        
       
<script>

function checkEmpty() {
    x = document.getElementById("email");
    if (x.value == 0) {
        return false;
    }  
}
</script>

    <!-- FOOTER START -->
    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="fc-caption">
                                <h5><a href="tel:+1 321-378-0451"> +1 321-378-0451</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 spacing-sm-center">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="fc-caption">
                                <h5><a href="mailto:support@oceanexpress-delivery.com">support@oceanexpress-delivery.com</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="fc-caption">
                                <h5>33195 NW 56th ST Miami, Florida</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-col fooler-left-col">
                        <figure class="footer-logo">
                            <img src="images/logos/logo.png" alt="">
                        </figure>
                        <div class="footer-caption">
                            <p>We have a solution for every need to send or supply products in any mode of freight
                                transport land, sea and air We are an integrated logistics service company with a direct
                                presence in more than 130 countries.</p>
                            <!--<div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 spacing-md">
                    <div class="footer-col">
                        <h5>About</h5>
                        <ul class="footer-bulletlist">
                            <li><a href="../about.html">Our Company</a></li>
                            <li><a href="../services.html">Services</a></li>
                            <li><a href="../contact.html">Contact Us</a></li>
                            <li><a href="../faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 spacing-md ">
                    <div class="footer-col">
                        <h5>Company</h5>
                        <ul class="footer-bulletlist">
                            <li><a href="../services.html">Our Services</a></li>
                            <li><a href="../index.html">Gallery</a></li>
                            <li><a href="../services.html">Packaging</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
            <p class="footer-bootom">Copyright © 2022 oceanexpress-delivery.com</p>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->

    <!-- JAVASCRIPTS -->
    <script src="js/lib/jquery-3.6.0.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/plugins.js"></script>
    <script src="js/lib/nav.fixed.top.js"></script>
    <script src="js/lib/contact.js"></script>
    <script src="js/main.js"></script>
    <!-- JAVASCRIPTS END -->

    <!-- REVOLUTION JS FILES -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/rev-sliders/slider-home-2.js"></script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    // (function () {
    //     var options = {
    //         whatsapp: "+1 305-748-6344", // WhatsApp number
    //         call_to_action: "Message us", // Call to action
    //         button_color: "#FF6550", // Color of button
    //         position: "left", // Position may be 'right' or 'left'
    //     };
    //     var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
    //     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    //     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    // })();
</script>
<!-- /GetButton.io widget -->
</body>

<!-- Mirrored from oceanexpress-delivery.com/track/tracking by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jun 2023 13:32:56 GMT -->
</html>