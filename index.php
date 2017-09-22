<?php
     //var_dump($_POST);
    // var_dump($_SERVER);

   $mac=$_REQUEST['mac'] ?? '';
   $ip=$_REQUEST['ip'] ?? '';
   $username=$_REQUEST['username'] ?? '';
   $linklogin=$_REQUEST['link-login'] ?? '';
    $linkorig=$_REQUEST['link-orig'] ?? '';
    $error=$_REQUEST['error'] ?? '';
    $chapid=$_REQUEST['chap-id'] ?? '';
    $chapchallenge=$_REQUEST['chap-challenge'] ?? '';
    $linkloginonly=$_REQUEST['link-login-only'] ?? '';
    $linkorigesc=$_REQUEST['link-orig-esc'] ?? '';
    $macesc=$_REQUEST['mac-esc'] ?? '';
    $uptime = $_REQUEST['uptime'] ?? 0;

    $is_status = isset($_REQUEST['is_status']) ? $_REQUEST['is_status'] : false;
    $is_login = isset($_REQUEST['is_login']) ?  $_REQUEST['is_login'] :  false;
    $is_logout = isset($_REQUEST['is_logout']) ? $_REQUEST['is_logout'] : false;
   $byteup = $_REQUEST['bytes-in-nice'] ?? 0;
   $bytedown = $_REQUEST['bytes-out-nice'] ?? 0;
   $linklogout=$_REQUEST['link-logout'] ?? '';
   $identity = $_REQUEST['identity'] ?? '';
   $profile_id = $_REQUEST['profile_id'] ?? '';
   $sessiontimeleft = $_REQUEST['session-time-left'] ?? 0;
   $limitbytesout = $_REQUEST['limit-bytes-out'] ?? 0;
   $limitbytesin = $_REQUEST['limit-bytes-in'] ?? 0;
   $refreshtimeout = $_REQUEST['refresh-timeout'] ?? 0;
   $sessiontimeleft = $_REQUEST['session-time-left'] ?? 0;
   $refresh_timeout_secs = $_REQUEST['refresh-timeout-secs'] ?? -1;
   $server_address = $_REQUEST['server-address'] ?? ''

?>
    <html lang="en">

    <head>
        <?php if ($refresh_timeout_secs != -1) { ?>
            <meta http-equiv="refresh" content="<?php echo $refresh_timeout_secs; ?>; url=http://<?php echo $server_address; ?>">
        <?php } ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>Wifi Connect</title>
        
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


        <script type="text/javascript">
            console.log('<?php echo $identity; ?>');
        </script>
        <script type="text/javascript">
            function isGuest(uuid){
                var pattern = new RegExp('/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i');
                if (pattern.test(uuid) === true) {
                  return "Xin chào" + uuid;
                } else {
                  return "Xin chào";
                }
            }
        </script>




        <?php if ($is_login) { ?>
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
        <?php }else if($is_status){ ?>
                
            <?php }else if($is_logout){ ?>

            <?php }else{ ?>
                
            <script type="text/javascript">
                
                $.ajax({
                url: "http://10.3.2.75:8080/ping",
                type: 'post',
                success: function(result) {


                    let data = jQuery.parseJSON(JSON.stringify(result));
                    if (data["status"] == 200) {
                        let ip = data["data"]["ip"];
                        console.log(ip);
                        window.location.replace(ip);  

                    } else{

                    }
                },
                error: function(error) {
                    console.log("Error:");
                    console.log(error);
                }

                });
                
            </script>


            <?php } ?>

            
                    
    </head>

    <body data-spy="scroll" data-target="#navbar-menu">
        <!-- Navbar -->
        <div id="sticky-nav-sticky-wrapper" class="sticky-wrapper" style="height: 92px;">
            <div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
                <div class="container">
                    <!-- Navbar-header -->
                    <div class="navbar-header">
                        <!-- Responsive menu button -->
                        <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> -->
                        <!-- LOGO -->
                        <a class="navbar-brand logo" href="../index.html">
                        Wifi Connect
                    </a>
                    </div>
                    <!-- end navbar-header -->
                    <!-- menu -->
                    <div class="navbar-collapse collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php if($is_status) { ?>
                                    <!-- <a href="" class="btn btn-white-fill navbar-btn">Đăng xuất</a> -->
                                    <?php }else{?>
                                        <!-- <Button id="free_login" class="btn btn-white-fill navbar-btn btn_xxx_yyy">Sử dụng miễn phí</Button> -->
                                    <?php }?>
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
                                <!-- <h1 class="h1 font-light text-white w-full">Wifi Connect is a </h1>
                                <h4 class="text-light w-full">Wifi Connect is a.</h4>
 -->
                                <?php if($is_login) { ?>
                                    <!-- <a href="" class="btn btn-white-bordered">Dùng miễn phí 30 phút</a> -->
                                    <?php }else if($is_logout) { ?>
                                        <!-- <a href="http://vimeo.com/99025203" class="video-btn btn popup-video"><i class="pe-7s-play"></i>Xem video</a> -->
                                        <?php }else{ ?>
                                            <?php } ?>
                                                <!-- <span class="or-space text-light">Hoặc</span>
                                <a href="http://vimeo.com/99025203" class="video-btn btn popup-video"><i class="pe-7s-play"></i>Dùng miễn phí</a> -->
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6 col-md-offset-3 col-sm-6">
                            <?php if($is_status == true) { ?>
                                <div class="alert alert-info" style="margin-top: 20px;">
                                    <strong><script>document.write(isGuest('<?php echo $username; ?>'))</script></strong>
                                </div>
                                <div class="alert alert-info" style="padding: 0px;">
                                    <table class="table table-striped" style="margin-bottom: 0px;">
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
                                                    <?php if($limitbytesout) { ?>
                                                        <?php echo $limitbytesout; ?>  Kib
                                                            <?php }else{ ?>
                                                                Unlimited
                                                                <?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>up/down</td>
                                                <td>
                                                    <?php echo $byteup; ?> /
                                                    <?php echo $bytedown; ?> </td>
                                            </tr>
                                            <?php if($sessiontimeleft) { ?>
                                                <td>connected / left:</td>
                                                <td>
                                                    <?php echo $uptime; ?> /
                                                    <?php echo $sessiontimeleft; ?> </td>
                                            <?php }else{ ?>
                                                    <tr>
                                                        <td>connected:</td>
                                                        <td>
                                                            <?php echo $uptime; ?> </td>
                                                    </tr>
                                            <?php } ?>
                                                        <?php if($refreshtimeout) { ?>
                                                            <tr>
                                                                <td>status refresh</td>
                                                                <td>
                                                                    <?php echo $refreshtimeout; ?>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                                <a href="<?php echo $linklogout; ?>" class="btn btn-white-bordered " style="width: 100%" >ĐĂNG XUẤT</a>
                                

                                <?php }else if($is_logout) { ?>
                                    <div class="alert alert-danger" style="margin-top: 20px;">
                                        <strong>Xin chào <?php echo $username; ?></strong>
                                    </div>
                                    <div class="alert alert-danger" style="padding:0px;">
                                        <table class="table table-striped" style="margin-bottom: 0px;">
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
                                                        <?php if($limitbytesout) { ?>
                                                            <php? echo limitbytesout/1000; ?> Kib
                                                                <?php }else{ ?>
                                                                    Unlimited
                                                                    <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>up/down</td>
                                                    <td>
                                                        <?php echo $byteup; ?> /
                                                        <?php echo $bytedown; ?> </td>
                                                </tr>
                                                <?php if($sessiontimeleft) { ?>
                                                    <td>connected / left:</td>
                                                    <td>
                                                        <?php echo $uptime; ?> /
                                                        <?php echo $sessiontimeleft; ?> </td>
                                                    <?php }else{ ?>
                                                        <tr>
                                                            <td>connected:</td>
                                                            <td>
                                                                <?php echo $uptime; ?> </td>
                                                        </tr>
                                                        <?php } ?>
                                                            <?php if($refreshtimeout) { ?>
                                                                <tr>
                                                                    <td>status refresh</td>
                                                                    <td>
                                                                        <?php echo $refreshtimeout; ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                            </tbody>
                                        </table>

                                        
                                        

                                    </div>
                                    <a href='<?php echo $linklogin; ?>'class="btn btn-white-bordered " style="width: 100%" >ĐĂNG NHẬP</a>
                                    <?php }else if($is_login){ ?>
                                        <form role="form" class="intro-form" id="login" action="" method="post" <?php if($chapid) { ?> onSubmit="return doLogin()"
                                            <?php } ?> >
                                                <h3 class="text-center"> Đăng nhập </h3>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tài khoản" required="required" id="usermane_1">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mật khẩu" required="required" id="password_2">
                                                </div>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-custom btn-sm btn-block">ĐĂNG NHẬP</button>
                                                    <button class="btn btn-custom btn-sm btn-block btn_xxx_yyy">FREE LOGIN</button>
                                                </div>
                                                <?php if($error) { ?>
                                                    <div class="alert alert-warning">
                                                        <strong>Có lỗi xảy ra!</strong>
                                                        <?php echo $error; ?>
                                                    </div>
                                                    <?php } ?>
                                        </form>
                                        <?php }else { ?>
                                            <div class="alert alert-warning">
                                                <strong>Không thể xác định bạn!</strong>
                                            </div>
                                            <?php  } ?>
                        </div>
                        <!-- end col -->
                    </div>
                </div>
            </div>
        </section>
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
                url: "http://10.3.2.75:8080/user",
                type: 'post',
                data: { "profile_id": "<?php echo $profile_id; ?>", "router_id": "<?php echo $identity; ?>", "mac_address": "<?php echo $mac; ?>" },
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