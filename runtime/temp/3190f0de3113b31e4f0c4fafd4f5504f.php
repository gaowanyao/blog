<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/www/wwwroot/blog.gcan.top/public/../application/index/view/index/signin.html";i:1506261439;}*/ ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />

    <title>GCAN--登录</title>
    <meta name="keywords" content="高万耀,阿耀王子,区块链,gcan,网站开发,PHP开发,laravel开发,thinkphp开发,nodejs"/>
    <meta name="description" content="写写博客，记录生活的点点滴滴" />
    <meta name="author" content="高万耀" />



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
    <link href="__STATIC__/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="__STATIC__/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="__STATIC__/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="__STATIC__/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="__STATIC__/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-1 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 bs-reset mt-login-5-bsfix">
            <div class="login-bg" style="background-image:url('__STATIC__/assets/pages/img/login/bg1.jpg')">
                <img class="login-logo" onclick="window.location.href='/';" src="__STATIC__/img/logo.png" alt="logo"/>
            </div>
        </div>
        <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
            <div class="login-content">
                <h1>GCAN Blog Login </h1>
                <p>

                    This is a login interface, the blog system is under construction.

                </p>
                <form action="<?php echo $access_index_url; ?>/signin_msg" class="login-form" method="post">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>Enter any username and password. </span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" required/> </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/> </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="rem-password">
                                <label class="rememberme mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="remember" value="1" /> Remember me
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-8 text-right">
                            <div class="forgot-password">
                                <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                            </div>
                            <button class="btn green" type="submit">Sign In</button>
                            <a href="<?php echo $access_index_url; ?>/signup.html" class="btn green" >Sign Up</a>
                        </div>
                    </div>
                </form>
                <!-- BEGIN FORGOT PASSWORD FORM -->
                <form class="forget-form" action="javascript:;" method="post">
                    <h3 class="font-green">Forgot Password ?</h3>
                    <p> Enter your e-mail address below to reset your password. </p>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                    <div class="form-actions">
                        <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                        <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                    </div>
                </form>
                <!-- END FORGOT PASSWORD FORM -->
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-md-12" style="text-align: center;">
                        <h4>第三方登录<small>目前只有Github登录</small></h4>
                    </div>
                    <div class="col-xs-5 bs-reset">

                        <ul class="login-social">
                            <li>
                                <a href="https://github.com/login/oauth/authorize?client_id=0e6c48aa74fcabe9c624&state=12345&redirect_uri=http://www.gcan.top/index/auth/githubauth
" title="Github登录">
                                    <i style="color:tomato;" class="fa fa-github"></i>
                                </a>

                            </li>
                            <li>
                                <a href="javascript:;" title="微信登录">
                                    <i style="color:tomato;" class="fa fa-wechat"></i>
                                </a>

                            </li>
                            <li>
                                <a href="javascript:;" title="QQ登录">
                                    <i style="color:tomato;" class="fa fa-qq"></i>
                                </a>

                            </li>
                            <li>
                                <a href="javascript:;" title="微博登录">
                                    <i style="color:tomato;" class="fa fa-weibo"></i>
                                </a>

                            </li>
                            <!--<li>-->
                                <!--<a href="javascript:;">-->
                                    <!--<i class="icon-social-facebook"></i>-->
                                <!--</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="javascript:;">-->
                                    <!--<i class="icon-social-twitter"></i>-->
                                <!--</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="javascript:;">-->
                                    <!--<i class="icon-social-dribbble"></i>-->
                                <!--</a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; Gcan 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-1 -->



<!-- JiaThis Button BEGIN -->
<!--<div style="margin-left: -90px;" class="jiathis_share_slide jiathis_share_32x32" id="jiathis_share_slide">-->
    <!--<div class="jiathis_share_slide_top" id="jiathis_share_title"></div>-->
    <!--<div class="jiathis_share_slide_inner">-->
        <!--<div class="jiathis_style_32x32">-->
            <!--<a class="jiathis_button_qzone"></a>-->
            <!--<a class="jiathis_button_tsina"></a>-->
            <!--<a class="jiathis_button_tqq"></a>-->
            <!--<a class="jiathis_button_weixin"></a>-->
            <!--<a class="jiathis_button_renren"></a>-->
            <!--<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>-->
            <!--<script type="text/javascript">-->
                <!--var jiathis_config = {-->
                    <!--slide:{-->
                        <!--divid:'jiathis_main',-->
                        <!--pos:'left'-->
                    <!--}-->
                <!--};-->
            <!--</script>-->
            <!--<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>-->
            <!--<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_slide.js" charset="utf-8"></script>-->
        <!--</div></div></div>-->
<!-- JiaThis Button END -->








<!--[if lt IE 9]>
<script src="__STATIC__/assets/global/plugins/respond.min.js"></script>
<script src="__STATIC__/assets/global/plugins/excanvas.min.js"></script>
<script src="__STATIC__/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="__STATIC__/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="__STATIC__/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="__STATIC__/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--<script src="__STATIC__/assets/pages/scripts/login-5.min.js" type="text/javascript"></script>-->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->


<script>

    (function(){
    var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?813bf086da477bffef285b99a9d2d0d1":"https://jspassport.ssl.qhimg.com/11.0.1.js?813bf086da477bffef285b99a9d2d0d1";
    document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?e259303fc49d5b01efef69eb352b749d";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>



<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>


<script>

    var Login = function() {

        var handleLogin = function() {

            $('.login-form').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    remember: {
                        required: false
                    }
                },

                messages: {
                    username: {
                        required: "Username is required."
                    },
                    password: {
                        required: "Password is required."
                    }
                },

                invalidHandler: function(event, validator) { //display error alert on form submit
                    $('.alert-danger', $('.login-form')).show();
                },

                highlight: function(element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function(label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function(error, element) {
                    error.insertAfter(element.closest('.input-icon'));
                },

                submitHandler: function(form) {
                    form.submit(); // form validation success, call ajax form submit
                }
            });

            $('.login-form input').keypress(function(e) {
                if (e.which == 13) {
                    if ($('.login-form').validate().form()) {
                        $('.login-form').submit(); //form validation success, call ajax form submit
                    }
                    return false;
                }
            });

            $('.forget-form input').keypress(function(e) {
                if (e.which == 13) {
                    if ($('.forget-form').validate().form()) {
                        $('.forget-form').submit();
                    }
                    return false;
                }
            });

            $('#forget-password').click(function(){
                $('.login-form').hide();
                $('.forget-form').show();
            });

            $('#back-btn').click(function(){
                $('.login-form').show();
                $('.forget-form').hide();
            });
        }




        return {
            //main function to initiate the module
            init: function() {

                handleLogin();

                // init background slide images
                $('.login-bg').backstretch([
                        "__STATIC__/assets/pages/img/login/bg1.jpg",
                        "__STATIC__/assets/pages/img/login/bg2.jpg",
                        "__STATIC__/assets/pages/img/login/bg3.jpg"
                    ], {
                        fade: 1000,
                        duration: 8000
                    }
                );

                $('.forget-form').hide();

            }

        };

    }();

    jQuery(document).ready(function() {
        Login.init();
    });

</script>

</body>

</html>