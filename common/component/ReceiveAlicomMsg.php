<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/6/27
 * Time: 16:52
 */

namespace common\component;
require_once('mns-autoloader.php');
require_once 'aliyun-php-sdk-core/Config.php';
require_once 'TokenGetterForAlicom.php';
require_once 'TokenForAlicom.php';

use AliyunMNS\Client;
use AliyunMNS\Requests\SendMessageRequest;
use AliyunMNS\Requests\CreateQueueRequest;
use AliyunMNS\Exception\MnsException;
use TokenGetterForAlicom;
use TokenForAlicom;
use Dybaseapi\Request\V20170525 as Dybaseapi;
use Dysmsapi\Request\V20170525 as Dysmsapi;

class ReceiveAlicomMsg {

    protected $accessId;
    protected $accessKey;

    public function __construct($accessId, $accessKey)
    {
        $this->accessId=$accessId;
        $this->accessKey=$accessKey;
    }

    public function dealMessage($message) {

        echo $message;
        //TODO 这里开始写业务代码
        return true;//返回true，则工具类自动删除已拉取的消息。返回false,消息不删除可以下次获取
    }

    public function receiveMsg(){


        $messageType = "SmsReport";//短信回执：SmsReport，短息上行：SmsUp，语音呼叫：VoiceReport，流量直冲：FlowReport
        $queueName = "adaQueue"; //在云通信页面开通相应业务消息后，就能在页面上获得对应的queueName

        \DefaultProfile::addEndpoint("cn-hangzhou","cn-hangzhou","Dybaseapi","dybaseapi.aliyuncs.com");

        $tokenGetterForAlicom = new TokenGetterForAlicom($this->accessId,$this->accessKey);

        $i = 0;
        while ( $i <= 3) {//取回执消息失败5 次停止循环拉取

            $i++;
            try
            {
                $tokenForAlicom = $tokenGetterForAlicom->getToeknByMessageType($messageType,$queueName);
                $queue = $tokenForAlicom->getClient()->getQueueRef($queueName);
                var_dump($queue);die;
                // 3. receive message
                $receiptHandle = NULL;
                // when receiving messages, it's always a good practice to set the waitSeconds to be 30.
                // it means to send one http-long-polling request which lasts 30 seconds at most.
                $res = $queue->receiveMessage(2);
                echo "ReceiveMessage Succeed! \n";
                $bodyMD5 = md5(base64_encode($res->getMessageBody()));
                $receiptHandle = $res->getReceiptHandle();
                if (strtoupper($bodyMD5) == $res->getMessageBodyMD5())
                {
                    if($this->dealMessage($res->getMessageBody())){
                        $res = $queue->deleteMessage($receiptHandle);
                        echo "DeleteMessage Succeed! \n";
                    }
                }
            }
            catch (MnsException $e)
            {
                echo "ex:".($e->getMnsErrorCode()) ;
                echo "ReceiveMessage Failed: " . $e;
                echo "<br>";
                #return;
            }
        }
    }


}