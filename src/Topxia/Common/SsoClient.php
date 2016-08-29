<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 10:25
 */

namespace Topxia\Common;


class SsoClient
{
    public static function getUserInfo($rsa_sign,$aes_ciphertext,$rsa_key,$aes_key){
        $rsa_key=openssl_get_publickey($rsa_key);
        if(empty($rsa_key)|| empty($aes_key)){
            return false;
        }
        $userStr = SecuritySso::decrypt($aes_ciphertext,$aes_key);
        $IsChange =(bool)openssl_verify($userStr, base64_decode($rsa_sign), $rsa_key,'md5WithRSAEncryption');
//        if(!$IsChange){
//            return false;
//        }
        return json_decode($userStr,true);

    }


}