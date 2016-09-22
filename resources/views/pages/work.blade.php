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

<body class="caset-study-page">   
    <div class="header-wrapper header-wrapper-work">
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
                <h2 class="title">Our Work</h2>
                <p class="intro">Our approach to lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in leo turpis. Ut ex neque, cursus vulputate facilisis sed, tempor quis ligula.</p>
            </div><!--//container-->
        </section><!--//promo-->
    </div><!--//header-wrapper-->
       
    <!-- ******Work list Section****** -->
    <section id="work-list" class="section work-list">
        <div class="container text-center">
            <h2 class="title">Case Studies</h2>
            <div id="filters" class="button-group clearfix">
                    <button class="btn button is-checked" data-filter="*">All</button>
                    <button class="btn button" data-filter=".saas">SaaS</button>
                    <button class="btn button" data-filter=".mobile-app">Mobile app</button>
                    <button class="btn button" data-filter=".website">Website</button>
                    <button class="btn button" data-filter=".startup">Startup</button>
                    <button class="btn button last" data-filter=".agency">Agency</button>
                </div><!--//filters-->
            <div class="items-wrapper isotope row">
                <div class="item startup saas col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-1.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Velocity web application</a></h3>
                            <div class="meta">Startup / SaaS</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup mobile-app col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-2.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Delta app development</a></h3>
                            <div class="meta">Startup / Mobile app</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup website col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-3.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Tempo</a></h3>
                            <div class="meta">Startup / Website </div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item agency website col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-4.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Duis egestas</a></h3>
                            <div class="meta">Agency / Website</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item agency website col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-5.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Quisque vel nulla</a></h3>
                            <div class="meta">Agency / Website</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup mobile-app col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-6.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Fusce felis elit</a></h3>
                            <div class="meta">Startup / Mobile app</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup saas col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-7.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Quisque rutrum</a></h3>
                            <div class="meta">Startup / SaaS</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup mobile-app website col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-8.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Quisque rutrum</a></h3>
                            <div class="meta">Startup / Mobile app / Website</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup mobile-app saas col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-9.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Nullam Quis</a></h3>
                            <div class="meta">Startup / Mobile app / SaaS</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup saas col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-10.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Nullam Quis</a></h3>
                            <div class="meta">Startup / SaaS</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup website mobile-app col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-11.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Nullam Quis</a></h3>
                            <div class="meta">Startup / Website / Mobile app</div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item startup saas website col-lg-4 col-md-4 col-sm-6 col-sm-12 ">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="case-study-1.html"><img class="img-responsive" src="assets/images/work/work-example-thumb-12.jpg" alt="" /></a>
                            <a class="info-mask" href="case-study-1.html">
                                <span class="desc">Project intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor...</span>
                                <span class="btn btn-cta btn-cta-primary" >View case study</span>
                            </a><!--//info-mask-->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="case-study-1.html">Nullam Quis</a></h3>
                            <div class="meta">Startup / Website / SaaS </div>
                        </div><!--//content-->                    
                    </div><!--//item-inner-->
                </div><!--//item-->             
            </div><!--//items-wrapper-->
        </div><!--//container-fluid-->
    </section><!--//work-list"-->
    
    <!-- ******Services Section****** -->
    <section id="services" class="services section">
        <div class="container text-center">
            <h2 class="title">Services</h2>
            <p class="intro">We offer lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            <div class="service-items row">
                <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="header-box">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe104;"></span>
                        </div><!--//header-->
                        <div class="desc">
                            <h3 class="sub-title">UX &amp; Front-end</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae diam magna. Curabitur nibh metus, ultricies sed aliquam euismod, scelerisque eu purus. In hac habitasse platea dictumst. Suspendisse tempus elit eget libero suscipit pulvinar.</p>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="header-box">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe0ea;"></span>
                        </div><!--//header-->
                        <div class="desc">
                            <h3 class="sub-title">Back-end &amp; Database</h3>
                            <p>Phasellus fermentum accumsan fermentum. Vestibulum elit sapien, consequat vitae auctor sit amet, elementum sed elit. Quisque ullamcorper quis augue sit amet porttitor. Maecenas ac dolor iaculis, dapibus.</p>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="header-box">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe003;"></span>
                        </div><!--//header-->
                        <div class="desc">
                            <h3 class="sub-title">Hosting</h3>
                            <p>Cras mollis ex sed tortor finibus, a mattis risus rhoncus. Sed sodales et metus at sodales. Ut non dolor sollicitudin, venenatis mauris eget, fringilla enim. Pellentesque sed magna ante. Cras mollis tincidunt lectus vitae suscipit.</p>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="header-box">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe028;"></span>
                        </div><!--//header-->
                        <div class="desc">
                            <h3 class="sub-title">Support</h3>
                            <p>Aliquam efficitur, lorem blandit dapibus viverra, erat turpis placerat lacus, quis hendrerit libero sem eget dui. Integer eu diam orci. Nullam sed dictum lorem. Quisque ut lacus non enim aliquam pretium sit amet id augue.</p>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//row-->   
            <a class="btn btn-cta btn-cta-primary" href="contact.html">Get a quote</a>         
        </div><!--//container-->
    </section>
        
    <!-- ******CTA Section****** -->
    <section id="cta-section" class="cta-section section text-center home-cta-section">
        <div class="container">
           <h2 class="title">Want to have a quick chat?</h2>
           <p class="phone contact-info">
               <span class="intro">We are only a phone call away</span>
               <span class="info"><a href="tel:+08001234567">0800 123 4567</a></span>
           </p><!--//phone-->
           <p class="email contact-info">
               <span class="intro">You can also email us</span>
               <span class="info"><a href="mailto:hello@yourdevstudio.com">hello@yourdevstudio.com</a></span>
           </p><!--//phone-->              
        </div><!--//container-->
    </section><!--//cta-section-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3 col-sm-4 links-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{URL::to('/about')}}">About us</a></li>
                                <li><a href="{{URL::to('/work')}}">Our work</a></li>
                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>                                
                                
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
                <small class="copyright text-center">Copyright @ 2015 <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>                 
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
    
    <!-- isotope -->
    <script type="text/javascript" src="assets/plugins/imagesloaded.pkgd.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/isotope.pkgd.min.js"></script>    
    <script type="text/javascript" src="assets/js/isotope-custom.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>
             
</body>
</html> 

