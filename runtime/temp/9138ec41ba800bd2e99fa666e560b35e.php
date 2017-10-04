<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/www/wwwroot/blog.gcan.top/public/../application/index/view/index/signup.html";i:1506175897;}*/ ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />

    <title>GCAN--注册</title>

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
    <link href="__STATIC__/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="/">
        <img src="__STATIC__/img/logo.png" alt="logo" />
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <h3 class="font-green">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form style="display: block;" class="register-form" action="<?php echo $access_index_url; ?>/signup_msg" method="post">
        <h3 class="font-green">Sign Up</h3>



        <p class="hint"> Enter your account details below: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" />
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" /> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" /> </div>
        <div class="form-group margin-top-20 margin-bottom-20">
            <label class="mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="tnc" /> I agree to the
                <a href="javascript:;">Terms of Service </a> &
                <a href="javascript:;">Privacy Policy </a>
                <span></span>
            </label>
            <div id="register_tnc_error"> </div>
        </div>
        <div class="form-actions">
            <a href="<?php echo $access_index_url; ?>/signin.html"  class="btn green btn-outline">Back</a>
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<div class="copyright"> 2017 © Gcan </div>




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
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="__STATIC__/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="__STATIC__/assets/pages/scripts/login.min.js" type="text/javascript"></script>
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



</body>

</html>