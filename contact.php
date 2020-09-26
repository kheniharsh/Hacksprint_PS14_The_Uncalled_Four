<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Music System</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About us</a></li>
                                    <li><a href="#" class="mood">Mood</a>
                                        <ul class="dropdown">
                                            <li><a href="sad.php">Sad</a></li>
                                            <li><a href="angry.php">Angry</a></li>
                                            <li><a href="happy.php">Happy</a></li>
                                            <li><a href="relax.php">Relax</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    
                                </ul>
                                <ul>
                                    <li style="padding-bottom:72px; padding-left: 80px;"><?php include 'accountinfo.php';?></li>
                                    </ul>

                                <!-- Social Button -->
                                

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area mt-30 section-padding-100-0">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <a href="#"><img src="img/core-img/logo3.png" alt=""></a>
                        <p class="mb-30">Sed dapibus varius massa vel auctor. Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor, suscipit non elit ut, imperdiet ornare erat.</p>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/placeholder.png" alt="">
                            </div>
                            <h6>Vadodara, Gujarat</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/message.png" alt="">
                            </div>
                            <h6>+919099497061</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/smartphone.png" alt="">
                            </div>
                            <h6>developers@code-busters.tech</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form id="form" target="_self" onsubmit="return postToGoogle();" action="" autocomplete="off">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="entry.1257264137">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your E-mail" name="entry.93395363">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="entry.2034718139">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" name="entry.190369245"></textarea>
                                </div>
                                <button class="btn musica-btn mt-30" type="submit" id="send">send</button>
                            </form>
                            <h3 id="success-msg" style="text-align: center !important; margin-top:190px !important; display:none; color:#000000"> Your Request has been posted </h3>
                                <script>
function postToGoogle() {
                var field1 = $("#name").val();
                var field2 = $("#email").val();
                var field3 = $("#subject").val();
                var field4 = $("#message").val();
                
                if(field1 == ""){
                    alert('Please Fill Your Name');
                    document.getElementById("name").focus();
                    return false;
                }
                if(field2 == ""){
                    alert('Please Fill Your Email');
                    document.getElementById("email").focus();
                    return false;
                }
                if(field3 == "" || field3.length > 50 || field3.length < 5){
                    alert('Please Fill Subject');
                    document.getElementById("subject").focus();
                    return false;
                }


                
    
                $.ajax({
                    url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSd0pELfHz74UY35tOMteY2WLVz6ePJUj1ATqik2MEq0OcMd_A/formResponse?",
                    data: {"entry.1257264137": field1, "entry.93395363": field2, "entry.2034718139": field3, "entry.190369245": field4},
                    type: "POST",
                    dataType: "xml",
                    success: function(d)
                    {
                    },
                    error: function(x, y, z)
                        {

                            $('#success-msg').show();
                            $('#form').hide();
                            
                        }
                });
                return false;
            }
</script>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4>Contact us now</h4>
                            <h2>Do you have a question?</h2>
                        </div>
                        <div class="cta-btn">
                            <a href="#" class="btn musica-btn">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100" style="padding-top: 40%;">
                        <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2" style="padding-left: 50%;">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2" style="padding-left: 10%;">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Stop ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>