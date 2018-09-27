<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
   <!-- /.php Code for posting message -->
   <?php
   include 'includes/require.php';
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $errors = array();
                    
                        if(empty($_POST['name']))
                        {
                            $errors[] = 'Enter Name';
                        }else{
                            $name = mysqli_real_escape_string($con,trim($_POST['name']));
                        }
                        if(empty($_POST['email']))
                        {
                            $errors[] = 'Enter Email';
                        }else{
                            $email = mysqli_real_escape_string($con,trim($_POST['email']));
                        }
                        if (empty($_POST['phone'])) {
                            $errors[] = 'Enter Your Phone Number.';
                        }else{
                            $phone = mysqli_real_escape_string($con,trim($_POST['phone']));
                        }
                        if(empty($_POST['message']))
                        {
                            $errors[] = 'Enter message';
                        }else{
                            $message = mysqli_real_escape_string($con,trim($_POST['message']));
                        }
                        
                    if(empty($errors))
                        {	
                    
                        $time = date("Y-m-d h:i:s");
                        $sql = "INSERT INTO messages (name,email,phone,message,day) VALUES('$name','$email','$phone','$message','$time')";
                    
                            $result = mysqli_query($con,$sql);
                    
                        if($result)
                        {
                            echo "<h3>Message Sent</h3>";
                        }
                    }}
                
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <!-- Title of the document -->
    <title>Water Bills</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Universe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <!-- /meta tags -->
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- /Owl Stylesheets -->
    <!-- gallery css -->
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <!-- font awesome css -->
    <link href="css/fontawesome-all.css" type="text/css" rel="stylesheet" media="all" />
    <!-- bootstrap css -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all" />
    <!-- custom css -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all" />
    <!-- Online google fonts -->
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- /Online google fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">Water Trust</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section2">About</a>
                        </li>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section1">Services</a>
                        
                        </li>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section6">News</a>
                          
                        </li>
                        
                      
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section8">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
            <div class="container ">
               <br>
               <br>
            <div class="w3-btn-group">
            <a href="login/login.php"><button class="w3-btn w3-blue w3-border-right w3-opacity w3-hover-teal" style="width:33.3%"> Login</button></a>
  <button class="w3-btn w3-blue w3-opacity w3-hover-teal w3-border-right " style="width:33.3%">Pay Bills</button>
  <button class="w3-btn w3-blue w3-opacity w3-hover-teal " style="width:33.3%">Become a member </button>
</div>  
        </div>
            </div>
        </div>
    </div>
    <!-- /banner -->
    <!-- services grids -->
    <div class="clearfix"></div>
    <br>
    <!-- /services grids -->
    <!-- about -->
    <section class="w3-about" id="section2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 wthree-abt-info">
                    <h2>ABOUT US</h2>
                    <p class="my-xl-4 my-lg-3 my-md-4 my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                        it to make a type specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the ore recently with
                        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    <a href="#" class="btn px-4" data-toggle="modal" data-target=".bd-example-modal-lg">READ MORE</a>
                    <!-- Modal -->

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel8">Title goes here</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="card-img-top align-self-center" src="images/abt.jpg" alt="Card image cap">
                                        </div>
                                        <div class="col-md-6">
                                            <p>This is a longer card with supporting text below as a natural lead-in to additional
                                                content. This content is a little bit longer. There are many variations of
                                                passages of Lorem Ipsum available, but the majority have suffered alteration
                                                in some form, by injected humour, or randomised words which don't look even
                                                slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                                need to be sure there isn't anything embarrassing hidden in the middle of
                                                text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->
                </div>
                <div class="col-lg-6 p-0">
                    <img src="images/abt.jpg" alt="about-image-agileits" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->
    <!--gallery  -->
     <!-- //gallery -->

    <!-- designs -->
  
    <!-- /stats -->

    <!-- news starts here -->
    <section class="news pb-5" id="section6">
        <div class="container">
            <header class="w3-heading py-lg-5 pb-md-5 pb-4 text-center">
                <h3>Our News</h3>
                <p>Lorem Ipsum is simply dummy text and typesetting industry.</p>
            </header>
            <!-- //end heading -->
            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top" src="images/g9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">News title goes here</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal">Read More</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Title goes here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top" src="images/g9.jpg" alt="Card image cap">
                                        <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer. There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                            on the Internet tend to repeat predefined chunks as necessary, making this the
                                            first true generator on the Internet. It uses a dictionary of over 200 Latin
                                            words, combined with a handful of model sentence structures, to generate Lorem
                                            Ipsum which free from etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/banner1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">News title goes here</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal2">Read More</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Title goes here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top" src="images/banner1.jpg" alt="Card image cap">
                                        <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer. There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                            on the Internet tend to repeat predefined chunks as necessary, making this the
                                            first true generator on the Internet. It uses a dictionary of over 200 Latin
                                            words, combined with a handful of model sentence structures, to generate Lorem
                                            Ipsum which free from etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer mt-2">
                            <small class="text-muted">
                                Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </small>
                            <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal3">Read More</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                                content. This content is a little bit longer. There are many variations of
                                                passages of Lorem Ipsum available, but the majority have suffered alteration
                                                in some form, by injected humour, or randomised words which don't look even
                                                slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                                need to be sure there isn't anything embarrassing hidden in the middle of
                                                text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.
                                                It uses a dictionary of over 200 Latin words, combined with a handful of
                                                model sentence structures, to generate Lorem Ipsum which free from etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Modal -->
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/g3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">News title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal4">Read More</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel4">Title goes here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top" src="images/g3.jpg" alt="Card image cap">
                                        <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer. There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                            on the Internet tend to repeat predefined chunks as necessary, making this the
                                            first true generator on the Internet. It uses a dictionary of over 200 Latin
                                            words, combined with a handful of model sentence structures, to generate Lorem
                                            Ipsum which free from etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">News title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal5">Read More</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel5">Title goes here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer. There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                            on the Internet tend to repeat predefined chunks as necessary, making this the
                                            first true generator on the Internet. It uses a dictionary of over 200 Latin
                                            words, combined with a handful of model sentence structures, to generate Lorem
                                            Ipsum which free from etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="images/g11.jpg" alt="Card image">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">News title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal6">Read More</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel6">Title goes here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top" src="images/g11.jpg" alt="Card image cap">
                                        <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer. There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                            on the Internet tend to repeat predefined chunks as necessary, making this the
                                            first true generator on the Internet. It uses a dictionary of over 200 Latin
                                            words, combined with a handful of model sentence structures, to generate Lorem
                                            Ipsum which free from etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="images/g5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">News title goes here</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <a href="#" class="btn more p-0 mt-3" data-toggle="modal" data-target="#exampleModal7">Read More</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel7">Title goes here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top" src="images/g5.jpg" alt="Card image cap">
                                        <p class="my-3">This is a longer card with supporting text below as a natural lead-in to additional
                                            content. This content is a little bit longer. There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                            on the Internet tend to repeat predefined chunks as necessary, making this the
                                            first true generator on the Internet. It uses a dictionary of over 200 Latin
                                            words, combined with a handful of model sentence structures, to generate Lorem
                                            Ipsum which free from etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news ends here -->

    <!-- Testimonials Section -->
    
                    <!-- /.client-testimonials -->
                </div>
                <!-- /.col-md-8 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#testimonials -->







<!-- Contact section -->
<section class="contact content-section" id="section8">
        <div class="container">
            <header class="w3-heading py-lg-5 pt-5 text-center">
                <h3>Contact Us</h3>
                <p>Lorem Ipsum is simply dummy text and typesetting industry.</p>
            </header>
            <!-- //end heading -->
            <div class="row form-container py-3">

                <div class="col-md-8 contact-form">
                    <h4 class="mb-4">Drop us a line</h4>
                    <form id="contactForm" method="post" action="index.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name..." value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" value="<?php if(isset($_POST['message'])) echo $_POST['email']; ?>" name="email" placeholder="Your email..." required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['message']; ?>" name="phone" placeholder="Your phone..." required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>" rows="4" name="message" placeholder="Your message..." required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-default">
                                <i class="fa fa-paper-plane fa-fw"></i> Send</button>
                        </div>
                    </form>
                </div>
             
                <!-- /.contact-form -->

                <div class="col-md-4 agile-w3ls-contact-address mt-sm-4 mt-0">
                    <h4 class="mb-4">Our address</h4>
                    <address>
                        <p class="my-3 d-flex">
                            <i class="fa fa-map-marker fa-fw mr-2"></i>
                            <label>56th lorem, New York, ipsum sed, United States</label>
                        </p>
                        <ul>
                            <li class="my-3">
                                <i class="fa fa-envelope fa-fw mr-2"></i>
                                <a href="mailto:info@example.com">example.com</a>
                            </li>
                            <li class="my-3">
                                <i class="fa fa-phone fa-fw mr-2"></i>+56 (0) 985 0011 002</li>
                        </ul>
                    </address>
                </div>
                <!-- /.contact-address -->
                </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
                <div class="container-fluid w3-agile-google-map pt-5">
            <div class="row">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798893698!2d-74.25986762659859!3d40.697670067978756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1522490274976"
                    style="border:0" allowfullscreen></iframe>
            </div>

<?php
include 'footer.php';
?>
