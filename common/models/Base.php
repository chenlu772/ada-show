<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16
 * Time: 16:59
 */
namespace common\models;

class Base {


    /**
     * 移动端检测
     * @method isMobile
     * @since 0.0.1
     * @return {boolean}
     */
    public static function isMobile(){
        return isset($_SERVER['HTTP_X_WAP_PROFILE']) || (isset($_SERVER['HTTP_VIA']) && stristr($_SERVER['HTTP_VIA'], 'wap')) || (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/(nokia|sony|ericsson|mot|samsung|htc|sgh|lg|sharp|sie-|philips|panasonic|alcatel|lenovo|iphone|ipod|blackberry|meizu|android|netfront|symbian|ucweb|windowsce|palm|operamini|operamobi|openwave|nexusone|cldc|midp|wap|mobile)/i', strtolower($_SERVER['HTTP_USER_AGENT'])));
    }

    /**
     * 检测是否是微信浏览器
     */
    public static function isWeChatBrowser(){
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
            return true;
        }
        return false;
    }


}