<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2017/6/21
 * Time: 15:59
 */

namespace common\component;
require_once('mns-autoloader.php');

use AliyunMNS\Client;
use AliyunMNS\Topic;
use AliyunMNS\Constants;
use AliyunMNS\Model\MailAttributes;
use AliyunMNS\Model\SmsAttributes;
use AliyunMNS\Model\BatchSmsAttributes;
use AliyunMNS\Model\MessageAttributes;
use AliyunMNS\Exception\MnsException;
use AliyunMNS\Requests\PublishMessageRequest;

class PublishBatchSMSMessageDemo
{
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


    public function run()
    {
        /**
         * Step 1. 初始化Client
         */

        $this->client = new Client($this->endPoint, $this->accessId, $this->accessKey);
        /**
         * Step 2. 获取主题引用
         */
        $topicName = "sms.topic-cn-hangzhou";
        $topic = $this->client->getTopicRef($topicName);
        /**
         * Step 3. 生成SMS消息属性
         */
        // 3.1 设置发送短信的签名（SMSSignName）和模板（SMSTemplateCode）
        $batchSmsAttributes = new BatchSmsAttributes("艾达", "SMS_71840067");
        // 3.2 （如果在短信模板中定义了参数）指定短信模板中对应参数的值
        $code = rand(1000,9999);
        $batchSmsAttributes->addReceiver("15221143593", array("name" => "chen", "code"=>$code));//此处的code一定要是string类型
        //$batchSmsAttributes->addReceiver("YourReceiverPhoneNumber2", array("YourSMSTemplateParamKey1" => "value1"));
        $messageAttributes = new MessageAttributes(array($batchSmsAttributes));
        /**
         * Step 4. 设置SMS消息体（必须）
         *
         * 注：目前暂时不支持消息内容为空，需要指定消息内容，不为空即可。
         */
        $messageBody = "smsmessage";
        /**
         * Step 5. 发布SMS消息
         */
        $request = new PublishMessageRequest($messageBody, $messageAttributes);
        try
        {
            $res = $topic->publishMessage($request);
            echo $res->isSucceed();
            echo "\n";
            echo $res->getMessageId();//E8BE7B4AD2BA2EBB-1-15CE23AC29E-200000002
            echo "\n";
        }
        catch (MnsException $e)
        {
            echo $e;
            echo "\n";
        }
    }
}
