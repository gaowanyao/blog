<?php
namespace app\index\controller;
use think\Config;
use think\Db;
use think\Controller;
use think\Session;

class Auth extends Controller
{

//http://blog.csdn.net/javagaorui5944/article/details/52918772

    public function index()
    {

        dump("dd");

        $this->display();
    }

    public function githubauth()
    {
//        http://blog.csdn.net/javagaorui5944/article/details/52918772
//        https://github.com/login/oauth/authorize?client_id=0e6c48aa74fcabe9c624&state=12345&redirect_uri=http://www.gcan.top/index/auth/githubauth

//        dump($_GET);

//        建立一个config数据表

        if (isset($_GET['code'])) {
            $url = 'https://github.com/login/oauth/access_token?client_id=0e6c48aa74fcabe9c624&client_secret=4506f04f4f66dc32802cc95ddcb57cef77e75472&code=' . $_GET['code'] . '&redirect_uri=http://www.gcan.top/index/auth/githubauth';

            $result = http_curl($url);
//            dump($result);


//            $token_url = 'https://api.github.com/user?access_token='.$result;
            $token_url = 'https://api.github.com/user?' . $result;

//            dump($token_url);
//            第四个参数为useragent的APPNAME
            $infomsg = http_curl($token_url, "get", "", "GCAN");
//            dump($infomsg);
            $info = json_decode($infomsg,true);
//            dump($info);

            if (in_array("login",$info))
            {
                $login = $info['login'];

                $map['login'] = array("like",$login);
                $res = Db::name("User")->where($map)->find();
                if(!$res){ //第一次用github登录

                    $data['pid'] = time(); //特定ID
                    $data['login'] = $info['login']; //github登录名
                    $data['user_name'] = $info['login']; //github登录名
                    $data['login_type'] = "github";  //登录类型
                    $data['email'] = $info['email']; //github邮箱
                    $data['address'] = $info['location'];  //地址
                    $data['admin'] = 0;  //普通用户
                    $data['active'] = 1;  //激活用户
                    $data['headpicture'] = $info['avatar_url']; //头像
                    $data['company'] = $info['company']; //公司
                    $data['site_url'] = $info['blog']; //网址
                    $data['create_time'] = date("Y-m-d H:i:s"); //注册时间

                    $result = Db::name("User")->insert($data);

                    if($result){
                        $sel = Db::name("User")->where($map)->find();
                        Session::set("account",$sel);
                        $this->success("Sign In Success","/");
                    }else{
                        $this->error("Sign In Error，Please click github login again!");
                    }



                }else{
                    $data['uid'] = $res['uid']; //uid
                    $data['user_name'] = $info['login']; //github登录名
                    $data['email'] = $info['email']; //github邮箱
                    $data['address'] = $info['location'];  //地址
                    $data['headpicture'] = $info['avatar_url']; //头像
                    $data['company'] = $info['company']; //公司
                    $data['site_url'] = $info['blog']; //网址
                    $result = Db::name("User")->update($data);

                    $sel = Db::name("User")->where($map)->find();
                    Session::set("account",$sel);

                    $this->success("Sign In Success","/");

                }

            }
            else
            {
                $this->error("Please click github login again!");
            }



        }
    }


}