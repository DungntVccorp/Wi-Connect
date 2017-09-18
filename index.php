<?php
   $mac=$_POST['mac'];
   $ip=$_POST['ip'];
   $username=$_POST['username'];
   $linklogin=$_POST['link-login'];
   $linkorig=$_POST['link-orig'];
   $error=$_POST['error'];
   $chapid=$_POST['chap-id'];
   $chapchallenge=$_POST['chap-challenge'];
   $linkloginonly=$_POST['link-login-only'];
   $linkorigesc=$_POST['link-orig-esc'];
   $macesc=$_POST['mac-esc'];
   $uptime = $_POST['uptime'];
   $is_status = $_POST['is_status'];
   $is_login = $_POST['is_login'];
   $is_logout = $_POST['is_logout'];
   $byteup = $_POST['bytes-in-nice'];
   $bytedown = $_POST['bytes-out-nice'];
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>Wifi Connect</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Icons CSS -->
        <link href="css/pe-icon-7-stroke.css" rel="stylesheet">
        <!-- Magnific-popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Color style -->
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        //ga('create', 'UA-78002311-1', 'auto');
        //ga('send', 'pageview');
        </script>
        <? if($chapid) { ?>
            <form name="sendin" action="<?php echo $linkloginonly; ?>" method="post">
                <input type="hidden" name="username" />
                <input type="hidden" name="password" />
                <input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
                <input type="hidden" name="popup" value="true" />
            </form>
            <script type="text/javascript" src="js/md5.js"></script>
            <script type="text/javascript">
            function doLogin() {


                <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>

                document.sendin.username.value = document.getElementById("usermane_1").value;
                document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.getElementById("password_2").value + '<?php echo $chapchallenge; ?>');
                document.sendin.submit();
                return false;
            }
            </script>
            <? } ?>
    </head>

    <body data-spy="scroll" data-target="#navbar-menu">
        <!-- Navbar -->
        <div id="sticky-nav-sticky-wrapper" class="sticky-wrapper" style="height: 92px;">
            <div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
                <div class="container">
                    <!-- Navbar-header -->
                    <div class="navbar-header">
                        <!-- Responsive menu button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->
                        <a class="navbar-brand logo" href="../index.html">
                        Wifi Connect
                    </a>
                    </div>
                    <!-- end navbar-header -->
                    <!-- menu -->
                    <div class="navbar-collapse collapse" id="navbar-menu">
                        <!-- Navbar left -->
                        <ul class="nav navbar-nav nav-custom-left">
                            <li class="active">
                                <a href="#home" class="nav-link">Home</a>
                            </li>
                            <li>
                                <a href="#features" class="nav-link">Features</a>
                            </li>
                            <li>
                                <a href="#pricing" class="nav-link">Gói Cước</a>
                            </li>
                            <li>
                                <a href="#clients" class="nav-link">Clients</a>
                            </li>
                            <!-- <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                Pages
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu arrow">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="jobs.html">Jobs</a></li>
                            </ul>
                        </li> -->
                        </ul>
                        <!-- Navbar right -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li>
                                <a href="">Đăng nhập</a>
                            </li> -->
                            <li>
                                <? if($is_status) { ?>
                                    <a href="" class="btn btn-white-fill navbar-btn">Đăng xuất</a>
                                    <?}else{?>
                                        <Button id="free_login" class="btn btn-white-fill navbar-btn btn_xxx_yyy">Sử dụng miễn phí</Button>
                                        <?}?>
                            </li>
                        </ul>
                    </div>
                    <!--/Menu -->
                </div>
                <!-- end container -->
            </div>
        </div>
        <!-- End navbar-custom -->
        <!-- HOME -->
        <section class="bg-custom home" id="home">
            <div class="home-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-7" style="text-align: center;">
                            <div class="home-wrapper home-wrapper-alt p-0">
                                <h1 class="h1 font-light text-white w-full">Wifi Connect is a fully responsive landing page template</h1>
                                <h4 class="text-light w-full">Zodkoo is a fully responsive landing page built using the latest Bootstrap framework. It's designed for describing your app, agency or business. The clean and well commented code allows easy customization of the theme.</h4>
                                <a href="" class="btn btn-white-bordered">Đăng nhập</a>
                                <span class="or-space text-light">Hoặc</span>
                                <a href="" class="btn btn-white-bordered">Dùng miễn phí</a>
                                <!-- <span class="or-space text-light">Hoặc</span>
                                <a href="http://vimeo.com/99025203" class="video-btn btn popup-video"><i class="pe-7s-play"></i>Dùng miễn phí</a> -->
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-5 col-md-offset-1 col-sm-6">
                            <? if($is_status) { ?>
                                <div class="alert alert-info" style="margin-top: 20px;">
                                    <strong>Xin chào <?php echo $username; ?></strong>
                                </div>
                                <div class="alert alert-info" style="padding:0px;">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>IP address</td>
                                                <td>
                                                    <?php echo $ip; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>MAC Address</td>
                                                <td>
                                                    <?php echo $mac; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quota</td>
                                                <td>
                                                    <? if($limitbytesout) { ?>
                                                        <php? echo limitbytesout/1000; ?> Kib
                                                            <? }else{ ?>
                                                                Unlimited
                                                                <? } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>up/down</td>
                                                <td>
                                                    <?php echo $byteup; ?> /
                                                    <?php echo $bytedown; ?> </td>
                                            </tr>
                                            <? if($sessiontimeleft) { ?>
                                                <td>connected / left:</td>
                                                <td>
                                                    <?php echo $uptime; ?> /
                                                    <?php echo $sessiontimeleft; ?> </td>
                                                <? }else{ ?>
                                                    <tr>
                                                        <td>connected:</td>
                                                        <td>
                                                            <?php echo $uptime; ?> </td>
                                                    </tr>
                                                    <? } ?>
                                                        <? if($refreshtimeout) { ?>
                                                            <tr>
                                                                <td>status refresh</td>
                                                                <td>
                                                                    <?php echo $refreshtimeout; ?>
                                                                </td>
                                                            </tr>
                                                            <? } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <? }else if($is_logout) { ?>
                                    <div class="alert alert-danger" style="margin-top: 20px;">
                                        <strong>Xin chào <?php echo $username; ?></strong>
                                    </div>
                                    <div class="alert alert-danger" style="padding:0px;">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>IP address</td>
                                                    <td>
                                                        <?php echo $ip; ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>MAC Address</td>
                                                    <td>
                                                        <?php echo $mac; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Quota</td>
                                                    <td>
                                                        <? if($limitbytesout) { ?>
                                                            <php? echo limitbytesout/1000; ?> Kib
                                                                <? }else{ ?>
                                                                    Unlimited
                                                                    <? } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>up/down</td>
                                                    <td>
                                                        <?php echo $byteup; ?> /
                                                        <?php echo $bytedown; ?> </td>
                                                </tr>
                                                <? if($sessiontimeleft) { ?>
                                                    <td>connected / left:</td>
                                                    <td>
                                                        <?php echo $uptime; ?> /
                                                        <?php echo $sessiontimeleft; ?> </td>
                                                    <? }else{ ?>
                                                        <tr>
                                                            <td>connected:</td>
                                                            <td>
                                                                <?php echo $uptime; ?> </td>
                                                        </tr>
                                                        <? } ?>
                                                            <? if($refreshtimeout) { ?>
                                                                <tr>
                                                                    <td>status refresh</td>
                                                                    <td>
                                                                        <?php echo $refreshtimeout; ?>
                                                                    </td>
                                                                </tr>
                                                                <? } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <? }else if($is_login){ ?>
                                        <form role="form" class="intro-form" id="login" action="" method="post" <? if($chapid) { ?> onSubmit="return doLogin()"
                                            <? } ?> >
                                                <h3 class="text-center"> Đăng nhập </h3>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tài khoản" required="required" id="usermane_1">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mật khẩu" required="required" id="password_2">
                                                </div>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-custom btn-sm btn-block">ĐĂNG NHẬP</button>
                                                </div>
                                                <? if($error) { ?>
                                                    <div class="alert alert-warning">
                                                        <strong>Có lỗi xảy ra!</strong>
                                                        <?php echo $error; ?>
                                                    </div>
                                                    <? } ?>
                                        </form>
                                        <? }else { ?>
                                            <div class="alert alert-dismissable">
                                                <p>DEFAULT</p>
                                            </div>
                                            <? } ?>
                        </div>
                        <!-- end col -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->
        <!-- Features Alt -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="title-box-icon">
                                <i class="pe-7s-medal"></i>
                                <h3 class="title">Clean and Ultra Modern Design</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-sm-5">
                        <div class="feat-description">
                            <h4 class="text-muted">Praesent et viverra massa non varius magna eget nibh vitae velit posuere efficitur.</h4>
                            <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.We put a lot of effort in design, as it’s the most important ingredient of successful website.</p>
                            <a href="" class="btn btn-custom">Learn More</a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <img src="images/macbook.png" alt="img" class="img-responsive">
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features alt -->
        <!-- Features -->
        <section class="section bg-light" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">It's designed for describing your app, agency or business</h3>
                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's
                            <br> designed for describing your app, agency or business.</p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="pe-7s-rocket"></i>
                            <h4>Strategy Solutions</h4>
                            <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="pe-7s-science"></i>
                            <h4>Digital Design</h4>
                            <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin litera..</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="pe-7s-display1"></i>
                            <h4>Analytics Solutions</h4>
                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="pe-7s-date"></i>
                            <h4>Strategy Solutions</h4>
                            <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="pe-7s-credit"></i>
                            <h4>Digital Design</h4>
                            <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin litera..</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="features-box">
                            <i class="pe-7s-headphones"></i>
                            <h4>Analytics Solutions</h4>
                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end Features -->
        <!-- PRICING -->
        <section class="section" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">Choose your perfect plan</h3>
                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's
                            <br> designed for describing your app, agency or business.</p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <!--Pricing Column-->
                            <article class="pricing-column col-lg-4 col-md-4">
                                <div class="inner-box">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Basic</h3>
                                        <h2 class="plan-price">$19</h2>
                                        <div class="plan-duration">Per Month</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled">
                                        <li> <i class="pe-7s-server"></i>10 GB Storege</li>
                                        <li> <i class="pe-7s-graph"></i>500 GB Bandwidth</li>
                                        <li> <i class="pe-7s-mail-open"></i>Email Support</li>
                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-custom">Signup Now</a>
                                    </div>
                                </div>
                            </article>
                            <!--Pricing Column-->
                            <article class="pricing-column col-lg-4 col-md-4">
                                <div class="inner-box active">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Premium</h3>
                                        <h2 class="plan-price">$29</h2>
                                        <div class="plan-duration">Per Month</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled">
                                        <li> <i class="pe-7s-server"></i>10 GB Storege</li>
                                        <li> <i class="pe-7s-graph"></i>500 GB Bandwidth</li>
                                        <li> <i class="pe-7s-mail-open"></i>Email Support</li>
                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-custom">Signup Now</a>
                                    </div>
                                </div>
                            </article>
                            <!--Pricing Column-->
                            <article class="pricing-column col-lg-4 col-md-4">
                                <div class="inner-box">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Developer</h3>
                                        <h2 class="plan-price">$39</h2>
                                        <div class="plan-duration">Per Month</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled">
                                        <li> <i class="pe-7s-server"></i>10 GB Storege</li>
                                        <li> <i class="pe-7s-graph"></i>500 GB Bandwidth</li>
                                        <li> <i class="pe-7s-mail-open"></i>Email Support</li>
                                        <li> <i class="pe-7s-tools"></i>24x7 Support</li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-custom">Signup Now</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- End Pricing -->
        <!-- Clients -->
        <section class="section bg-light" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title">Trusted by Thousands</h3>
                        <p class="text-muted sub-title">The clean and well commented code allows easy customization of the theme.It's
                            <br> designed for describing your app, agency or business.</p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row text-center">
                    <div class="col-sm-12">
                        <ul class="list-inline client-list">
                            <li><a href="" title="Microsoft"><img src="images/clients/microsoft.png" alt="clients"></a></li>
                            <li><a href="" title="Google"><img src="images/clients/google.png" alt="clients"></a></li>
                            <li><a href="" title="Instagram"><img src="images/clients/instagram.png" alt="clients"></a></li>
                            <li><a href="" title="Converse"><img src="images/clients/converse.png" alt="clients"></a></li>
                        </ul>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-description text-left">
                                    <p class="text-muted">
                                        “ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”
                                    </p>
                                </div>
                                <div class="testimonial-user-info user-info text-left">
                                    <div class="testimonial-user-thumb user-thumb">
                                        <img src="images/user.jpg" alt="user-thumb">
                                    </div>
                                    <div class="testimonial-user-txt user-text">
                                        <label class="testimonial-user-name user-name">Calebogden</label>
                                        <p class="testimonial-user-position user-position text-muted">Another company , City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-description text-left">
                                    <p class="text-muted">
                                        “ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”
                                    </p>
                                </div>
                                <div class="testimonial-user-info user-info text-left">
                                    <div class="testimonial-user-thumb user-thumb">
                                        <img src="images/user2.jpg" alt="user-thumb">
                                    </div>
                                    <div class="testimonial-user-txt user-text">
                                        <label class="testimonial-user-name user-name">Dancounsell</label>
                                        <p class="testimonial-user-position user-position text-muted">Another company , City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-description text-left">
                                    <p class="text-muted">
                                        “ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.”
                                    </p>
                                </div>
                                <div class="testimonial-user-info user-info text-left">
                                    <div class="testimonial-user-thumb user-thumb">
                                        <img src="images/user3.jpg" alt="user-thumb">
                                    </div>
                                    <div class="testimonial-user-txt user-text">
                                        <label class="testimonial-user-name user-name">Indianguru</label>
                                        <p class="testimonial-user-position user-position text-muted">Another company , City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Col -->
                </div>
                <!-- end row -->
            </div>
        </section>
        <!--End  Clients -->
        <!-- Subscribe -->
        <section class="section bg-custom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="title text-white">Be engaged Newsletter</h3>
                        <p class="text-light sub-title">The clean and well commented code allows easy customization of the theme.It's
                            <br> designed for describing your app, agency or business.</p>
                    </div>
                </div>
                <!-- End row -->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form class="text-center" action="http://coderthemes.us13.list-manage.com/subscribe/post?u=0cc5de5f50afa8474a1006b6b&amp;id=e0e46dd0d1" id="subscribe-form" method="get" novalidate="true">
                            <div class="form-group m-b-0">
                                <input type="email" class="form-control input-subscribe" id="mce-EMAIL" name="EMAIL" placeholder="Enter e-mail address" required="">
                                <label for="mce-EMAIL"></label>
                            </div>
                            <button type="submit" class="btn btn-white-fill">Subscribe</button>
                            <p class="text-light">
                                <small>You can un-subscribe at any time.</small>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- End row -->
            </div>
            <!-- end container -->
        </section>
        <!-- End Subscribe -->
        <!-- FOOTER -->
        <footer class="section bg-gray footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h5>Zodkoo</h5>
                        <ul class="list-unstyled">
                            <li><a href="">Home</a></li>
                            <li><a href="">Features</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Social</h5>
                        <ul class="list-unstyled">
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">Behance</a></li>
                            <li><a href="">Dribbble</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Support</h5>
                        <ul class="list-unstyled">
                            <li><a href="">Help &amp; Support</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Contact</h5>
                        <address>
                            795 Folsom Ave, Suite 600
                            <br> San Francisco, CA 94107
                            <br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                            <br> E: <a href="mailto:#">email@email.com</a>
                        </address>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-alt text-center">
                            <p class="text-muted m-b-0">2016 © Zodkoo</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- END FOOTER -->
        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="pe-7s-angle-up"> </i> </a>
        <!-- Style switcher -->
        <div id="style-switcher" style="left: -189px;">
            <div>
                <h3>Choose your color</h3>
                <ul class="pattern">
                    <li>
                        <a class="color1" href="#"></a>
                    </li>
                    <li>
                        <a class="color2" href="#"></a>
                    </li>
                    <li>
                        <a class="color3" href="#"></a>
                    </li>
                    <li>
                        <a class="color4" href="#"></a>
                    </li>
                    <li>
                        <a class="color5" href="#"></a>
                    </li>
                    <li>
                        <a class="color6" href="#"></a>
                    </li>
                    <li>
                        <a class="color7" href="#"></a>
                    </li>
                    <li>
                        <a class="color8" href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="#" class="settings"><i class="pe-7s-config"></i></a>
            </div>
        </div>
        <!-- end Style switcher -->
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Jquery easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--Magnific popup-->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- mailchimp - ajax form -->
        <script type="text/javascript" src="js/jquery.ajaxchimp.js"></script>
        <!--common script for all pages-->
        <script src="js/jquery.app.js"></script>
        <!-- switcher -->
        <script src="js/switcher.js"></script>
        <script type="text/javascript">
        /* ==============================================
                                                                        Magnific Popup
                                                                        =============================================== */
        $(document).ready(function() {
            $('.popup-video').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        });
        </script>
        <script type="text/javascript">
        $(".btn_xxx_yyy").click(function() {
            $.ajax({
                url: "http://localhost:8080/user",
                type: 'post',
                data: { "profile_id": "0", "router_id": "20", "mac_address": "00:0C:29:2C:3D:BA" },
                success: function(result) {


                    let data = jQuery.parseJSON(JSON.stringify(result));
                    if (data["status"] == 200) {
                        let userName = data["data"]["username"];
                        let passWord = data["data"]["password"];
                        console.log(userName);
                        console.log(passWord);

                        document.sendin.username.value = userName;
                        document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + passWord + '<?php echo $chapchallenge; ?>');
                        document.sendin.submit();

                    } else {
                        alert(data["message"]);
                    }
                    //console.log(result);

                },
                error: function(error) {
                    console.log("Error:");
                    console.log(error);
                }

            });
        });
        </script>
    </body>

    </html>