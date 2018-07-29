<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/6/27
 * Time: 17:36
 */

namespace common\component;
require_once('mns-autoloader.php');

use AliyunMNS\Client;
use AliyunMNS\Exception\MnsException;
use ServerException;
use ClientException;

class ConsumerDemo{

    private $accessId;
    private $accessKey;
    private $endPoint;
    private $client;

    public function __construct($accessId, $accessKey, $endPoint)
    {
        $this->accessId = $accessId;
        $this->accessKey = $accessKey;
        $this->endPoint = $endPoint;
    }

    public function run(){

        $this->client = new Client($this->endPoint,$this->accessId,$this->accessKey);

        try{
            $queue = $this->client->getQueueRef("adaQueue");
            for ($i=0;$i<10;$i++){
                $popMsg = $queue->peekMessage();
                if (!empty($popMsg)){
                    print_r("body : ".$popMsg->getMessageBody());
                    print_r("ID : ".$popMsg->getMessageId());
                    echo "<br/>";
                }
            }

        }catch (ClientException $e){
            var_dump($e->getErrorMessage());
        }catch (ServerException $se){
            var_dump($se->getErrorMessage());
        }

    }


=======
<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/6/27
 * Time: 17:36
 */

namespace common\component;
require_once('mns-autoloader.php');

use AliyunMNS\Client;
use AliyunMNS\Exception\MnsException;
use ServerException;
use ClientException;

class ConsumerDemo{

    private $accessId;
    private $accessKey;
    private $endPoint;
    private $client;

    public function __construct($accessId, $accessKey, $endPoint)
    {
        $this->accessId = $accessId;
        $this->accessKey = $accessKey;
        $this->endPoint = $endPoint;
    }

    public function run(){

        $this->client = new Client($this->endPoint,$this->accessId,$this->accessKey);

        try{
            $queue = $this->client->getQueueRef("adaQueue");
            for ($i=0;$i<10;$i++){
                $popMsg = $queue->peekMessage();
                if (!empty($popMsg)){
                    print_r("body : ".$popMsg->getMessageBody());
                    print_r("ID : ".$popMsg->getMessageId());
                    echo "<br/>";
                }
            }

        }catch (ClientException $e){
            var_dump($e->getErrorMessage());
        }catch (ServerException $se){
            var_dump($se->getErrorMessage());
        }

    }


>>>>>>> 1abf167ec354a6d129c3388f50f2bc17bcb24cfa
}