<?php
namespace app\admin\controller;
use think\File;
use think\Db;
use think\Session;

use think\Controller;

class Auth extends Controller
{

//http://blog.csdn.net/javagaorui5944/article/details/52918772

    public function index(){

        $this->display();
    }

    public function githubauth(){
//        https://github.com/login/oauth/authorize?client_id=0e6c48aa74fcabe9c624&state=12345&redirect_uri=http://www.gcan.top/index.php/admin/github/auth.html;

        echo "1";

    }
}