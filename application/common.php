<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


/**
 * 系统邮件发送函数
 * @param string $tomail 接收邮件者邮箱
 * @param string $name 接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body 邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 * @author static7 <static7@qq.com>
 */
function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null) {
    $mail = new \PHPMailer();           //实例化PHPMailer对象
    $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();                    // 设定使用SMTP服务
    $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
    $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';          // 使用安全协议
    $mail->Host = "smtp.qq.com"; // SMTP 服务器
    $mail->Port = 465;                  // SMTP服务器的端口号
    $mail->Username = "gaowanyao@foxmail.com";    // SMTP服务器用户名
    $mail->Password = "sdohfurhgwufdjia";     // SMTP服务器密码
    $mail->SetFrom('gaowanyao@foxmail.com', 'gcan');
    $replyEmail = '';                   //留空则为发件人EMAIL
    $replyName = '';                    //回复名称（留空则为发件人名称）
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($tomail, $name);
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send() ? true : $mail->ErrorInfo;
}


//URL安全的字符串编码：
function urlsafe_b64encode($string) {
    $data = base64_encode($string);
    $data = str_replace(array('+','/','='),array('-','_',''),$data);
    return $data;
}

//URL安全的字符串解码：
function urlsafe_b64decode($string) {
    $data = str_replace(array('-','_'),array('+','/'),$string);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    return base64_decode($data);
}



function cutstr_html($string, $sublen){

    $string = strip_tags($string);

    $string = preg_replace ('/\n/is', '', $string);

    $string = preg_replace ('/ |　/is', '', $string);

    $string = preg_replace ('/&nbsp;/is', '', $string);

    preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $t_string);

    if(count($t_string[0]) - 0 > $sublen) $string = join('', array_slice($t_string[0], 0, $sublen))."…";

    else $string = join('', array_slice($t_string[0], 0, $sublen));

    return $string;

}











class Translate {
    /**
     * 支持的语种
     * @var ArrayAccess
     */
    static $Lang = Array (
        'auto' => '自动检测',
        'ara' => '阿拉伯语',
        'de' => '德语',
        'ru' => '俄语',
        'fra' => '法语',
        'kor' => '韩语',
        'nl' => '荷兰语',
        'pt' => '葡萄牙语',
        'jp' => '日语',
        'th' => '泰语',
        'wyw' => '文言文',
        'spa' => '西班牙语',
        'el' => '希腊语',
        'it' => '意大利语',
        'en' => '英语',
        'yue' => '粤语',
        'zh' => '中文',
        'cht' => '中文繁体',
    );
    /**
     * 获取支持的语种
     * @return array 返回支持的语种
     */
    static function getLang() {
        return self::$Lang;
    }
    /**
     * 执行文本翻译
     * @param string $text 要翻译的文本
     * @param string $from 原语言语种 默认:中文
     * @param string $to 目标语种 默认:英文
     * @return boolean string 翻译失败:false 翻译成功:翻译结果
     */
    static function exec($text, $from = 'zh', $to = 'en') {
        // http://fanyi.baidu.com/v2transapi?from=zh&query=%E7%94%A8%E8%BD%A6%E8%B5%84%E8%AE%AF&to=fra
        $url = "http://fanyi.baidu.com/v2transapi";
        $data = array (
            'from' => $from,
            'to' => $to,
            'query' => $text
        );




//        dump($data);
        if($data['to'] == 'zh'){
            return $data['query'];
        }

        if($data['to'] == 'en'){

            if($data['query'] == "多宝金豆"){
                return "DBCoin";
            }
        }


        $data = http_build_query ( $data );
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_REFERER, "http://fanyi.baidu.com" );
        curl_setopt ( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:37.0) Gecko/20100101 Firefox/37.0' );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_TIMEOUT, 10 );
        $result = curl_exec ( $ch );
        curl_close ( $ch );

        $result = json_decode ( $result, true );

        // 出错状态码 999
        if ($result ['error']) {
//        dump($result);

            if($result['to'] == "zh"){
                return $result['query'];
            }
            return false;
        }

//        var_dump($result);
        return $result ['trans_result'] ['data'] ['0'] ['dst'];
    }
}


/**
 * @param $url
 * @param $type
 * @param $jsonpost
 * @return mixed|json
 */
function http_curl($url, $type="get", $jsonpost="", $useragent="")
{




//        $this->log_time("http_start");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);

    if($useragent == "GCAN"){
        curl_setopt ($ch, CURLOPT_USERAGENT, "GCAN");
        curl_setopt($ch, CURLOPT_TIMEOUT,15);

    }else{
        curl_setopt($ch, CURLOPT_TIMEOUT,10);
    }

    //如果使用代理需加上属性
//        if(C('IF_PROXY')==true){
//            $str= $url;
//
//            $needle= '127.0.0.1';
//
//            $pos = strpos($str, $needle);
//
//            if($pos==false){
//
//                curl_setopt ($ch, CURLOPT_PROXY, C('PROXY'));
//
//                curl_setopt ($ch, CURLOPT_USERAGENT, C('USERAGENT'));
//
//            }
//        }
    if ($type == "post") {
        //传输数据
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonpost);
    }
    $json = curl_exec($ch);
    if (curl_errno($ch)) {
        $json = curl_error($ch);
        $json = json_encode($json, JSON_UNESCAPED_UNICODE);
//            echo $json;
    }
    curl_close($ch);
//        if (C('IF_PROXY') == true) {
//
//            $header = preg_replace('/{.*/i', "", $json);
//
//            if($header!=""){
//
//                $json = explode($header, $json);
//
//                $json = $json[1];
//
//            }
//
//        }
//        $this->log_time("http_end");

    return $json;
}


//返回JSON信息
function show($status,$message,$data=array()){
    $result=array(
        'status'=>$status,
        'message'=>$message,
        'data'=>$data
    );
    exit(json_encode($result));//输出一条消息并退出脚本
}