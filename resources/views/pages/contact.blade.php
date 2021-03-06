<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Mazegeek</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700,300italic,400italic,700italic,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="contact-page">   
    <div class="header-wrapper header-wrapper-contact">
           <!-- ******HEADER****** --> 
        <header id="header" class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                    <a href="{{ URL::to('/')}}">
                     <img class="img-responsive" src="{{ asset('assets/images/logos/logo.png')}}" alt="" style="width:185px; height:94px !important; margin:10px 10px;" />
                    <!--<span class="highlight">Dev</span>Studio--></a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item"><a href="{{URL::to('/')}}">Home</a></li>
                            <li class="nav-item"><a href="{{URL::to('work')}}">Work</a></li> 
                            <!--<li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="work.html">Work <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="work.html">Our Work</a></li>
                                           
                                </ul>
                            </li>//dropdown--> 
                            <li class="nav-item"><a href="{{URL::to('about')}}">About</a></li>                             
                            <li class="nav-item last"><a href="{{URL::to('contact')}}">Contact</a></li>
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->
            </div><!--//container-->
        </header><!--//header-->
        <section class="promo section">
            <div class="container text-center">                
                <h2 class="title">Contact Us</h2>
                <p class="intro">Get in touch if you have a project or want to find out more about our services. We'd love to hear from you!</p>
            </div><!--//container-->
        </section><!--//promo-->
    </div><!--//header-wrapper-->
    
    <!-- ******Contact Section****** --> 
    <section class="contact-section section">
        <div class="container">
            <h2 class="title text-center">Start your project today</h2>
            <p class="intro text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet tortor consequat nisi scelerisque commodo etiam justo sapien.</p>
            <ul class="contact-info list-inline text-center">
                <li class="tel"><span class="fs1" aria-hidden="true" data-icon="&#x77;"></span><br /> <a href="+0800123456">0800 123 4567</a></li>
                <li class="email"><span class="fs1" aria-hidden="true" data-icon="&#xe010;"></span><br /> <a href="#">hello@yourdevstudio.com</a></li>
            </ul>
            <form id="contact-form" class="contact-form form" method="post" action="#">                    
                <div class="row text-center">
                    <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                        <div class="row">                                                                                       
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label class="sr-only" for="cname">Your name</label>
                                <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                            </div>                    
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label class="sr-only" for="cemail">Email address</label>
                                <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="sr-only" for="cmessage">Your message</label>
                                <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required></textarea>
                            </div>
                             <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                            </div>                           
                        </div><!--//row-->
                    </div>
                </div><!--//row-->
                <div id="form-messages"></div>
            </form><!--//contact-form-->
        </div><!--//container-->
    </section><!--//contact-section-->
    
    <!-- ******Map Section****** --> 
    <section class="map-section section">
        <div class="gmap-wrapper">
            <!--//You need to embed your own google map below-->
            <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79444.64391671501!2d-0.21428374128957384!3d51.51972634746694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876045108e9cad3%3A0x6514817fa6d57c9!2sThe+Web+Kitchen!5e0!3m2!1sen!2suk!4v1469624353093" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div><!--//gmap-wrapper-->
    </section><!--//map-section-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3 col-sm-4 links-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Quick Links</h3>
                            <ul class="list-unstyled">
                                <ul class="list-unstyled">
                                <li><a href="{{URL::to('/about')}}">About us</a></li>
                                <li><a href="{{URL::to('/work')}}">Our work</a></li>
                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>                                
                                
                            </ul>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="footer-col col-md-6 col-sm-8 blog-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Latest From Our Blog</h3>
                            <div class="item">
                                <figure class="figure">
                                    <img class="img-responsive" src="assets/images/blog/blog-tiny-thumb-1.jpg" alt="" />
                                </figure>
                                <div class="content">
                                    <h4 class="post-title"><a href="blog-post.html">DevStudio helps XYZ launch</a></h4>
                                    <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus...</p>
                                    <ul class="meta list-inline">
                                        <li>18 Feb 2015</li>
                                        <li>James Lee</li>
                                    </ul>
                                </div><!--//content-->
                            </div>  
                            <div class="item">
                                <figure class="figure">
                                    <img class="img-responsive" src="assets/images/blog/blog-tiny-thumb-2.jpg" alt="" />
                                </figure>
                                <div class="content">
                                    <h4 class="post-title"><a href="blog-post.html">devAid - Free Bootstrap Theme</a></h4>
                                    <p class="intro">Mauris libero leo, dapibus a congue ut, mollis sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus augue nec nulla ultricies...</p>
                                    <ul class="meta list-inline">
                                        <li>21 Dec 2014</li>
                                        <li>Vincent Fowler</li>
                                    </ul>
                                </div><!--//content-->
                            </div>                                                     
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col--> 
                    <div class="footer-col col-md-3 col-sm-12 contact-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Get In Touch</h3>
                            <p class="intro"></p>
                            <div class="row">
                                <p class="adr clearfix col-md-12 col-sm-4">
                                    <span class="fs1" aria-hidden="true" data-icon="&#xe01d;"></span>        
                                    <span class="adr-group">       
                                        <span class="street-address">56 College Green Road</span><br />
                                        <span class="city">Bristol</span><br />
                                        <span class="postal-code">BS1 XR18</span><br />
                                        <span class="country-name">UK</span>
                                    </span>
                                </p>
                                <p class="tel col-md-12 col-sm-4"><span class="fs1" aria-hidden="true" data-icon="&#x77;"></span><a href="tel:+08001234567">0800 123 4567</a></p>
                                <p class="email col-md-12 col-sm-4"><span class="fs1" aria-hidden="true" data-icon="&#xe010;"></span><a href="#">hello@yourdevstudio.com</a></p> 
                            </div> 
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container center">                                   
                <ul class="social-icons list-inline">
                    <li><a href="https://twitter.com/3rdwave_themes"><i class="fa fa-twitter"></i></a></li>                        
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.facebook.com/3rdwavethemes"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="last"><a href="#"><i class="fa fa-google-plus"></i></a></li>                     
                </ul> 
                <small class="copyright text-center">Copyright @ 2016 <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>                 
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    
 
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>		
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>             
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>                                                                  
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>     
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>     
    
    <!-- Form Validation -->
    <script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="assets/js/form-validation-custom.js"></script> 
    
    <!-- Form iOS fix -->
    <script type="text/javascript" src="assets/plugins/isMobile/isMobile.min.js"></script>
    <script type="text/javascript" src="assets/js/form-mobile-fix.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>
             
</body>
</html> 

