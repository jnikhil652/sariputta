<?php

class AUTHORIZATION
{
    public static function isValidToken($token)
    {
        // $CI =& get_instance();
        $token = self::decodeToken($token);
        $current_time = time();
        if ($token->expires > $current_time){
            return true;
        } else {
            return false; 
       }
    }

    public static function decodeToken($token)
    {
        $CI =& get_instance();
        return JWT::decode($token, $CI->config->item('jwt_key'));
    }

    public static function encodeToken($data)
    {
        $CI =& get_instance();
        return JWT::encode($data, $CI->config->item('jwt_key'));
    }

}