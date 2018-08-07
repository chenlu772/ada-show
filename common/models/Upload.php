<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/14
 * Time: 15:21
 */

namespace common\models;
use yii\web\UploadedFile;
use Yii;

class Upload {

    public static $imageType = ["image/gif","image/jpeg","image/jpg","image/png"];


    public function saveImg($img){

        if ($img["error"] > 0){
            return ["flag"=>false, "msg"=>"文件错误"];
        }

        if (!in_array($img["type"], self::$imageType)){
            return ["flag"=>false, "msg"=>"文件格式错误"];
        }

        if ($img["size"] > 204800){//200kb
            return ["flag"=>false, "msg"=>"图片过大"];
        }

        $extension = end(explode(".", $img["name"]));//文件扩展名
        $imgName = date("dHis").rand(1000,9999).".".$extension;
        $dir     = Yii::getAlias('@upload'). "/" .date("Ym");
        if (!file_exists($dir)){
            mkdir($dir, 0777, true);
        }
        $path = $dir."/".$imgName;
        move_uploaded_file($img["tempName"], $path);


        return ["flag"=>true, "msg"=>$path];
    }












}