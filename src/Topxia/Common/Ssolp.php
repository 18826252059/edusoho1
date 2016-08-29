<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 10:23
 */

namespace Topxia\Common;


class Ssolp
{
    public static function getUserInfo($RSA_str = '', $AES_str = '')
    {
        if(empty($_COOKIE['suts'])||empty($_COOKIE['sut'])){
            return false;
        }
        $RSA_str = str_replace(' ','+',$_COOKIE['suts']);
        $AES_str = str_replace(' ','+',$_COOKIE['sut']);
        $AES_key='h2wmABdfM7i3K80m';
        $RSA_key=file_get_contents(dirname(__FILE__) . '/sso_rsa_public.pem' );
        $user_info= SsoClient::getUserInfo($RSA_str, $AES_str,$RSA_key,$AES_key);
        if($user_info) {
            $user_info['user_id'] = empty($user_info['userId'])?"":$user_info['userId'];
        }
        return $user_info;
    }

}