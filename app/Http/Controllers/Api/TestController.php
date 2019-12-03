<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Tbp\V20190627\TbpClient;
use TencentCloud\Tbp\V20190627\Models\TextProcessRequest;

class TestController extends Controller
{
    //
    public function test ()
    {
        try {

            $cred = new Credential("AKIDRjz98w2nx44udOuFHtPoOkxzs467qyd3 ", "LRIyMUM1tKVWwGPPRVUZQ97sNf0EDyU3");
            $httpProfile = new HttpProfile();
            $httpProfile->setEndpoint("tbp.tencentcloudapi.com");

            $clientProfile = new ClientProfile();
            $clientProfile->setHttpProfile($httpProfile);
            $client = new TbpClient($cred, "", $clientProfile);

            $req = new TextProcessRequest();

//            $params = '{"BotId":"2702f11c-1146-4698-9974-e432a5478950","BotEnv":"release","TerminalId":"10239","InputText":"请取快递"}';
            $data = [
                "BotId"=> "2702f11c-1146-4698-9974-e432a5478950",
                "BotEnv" =>"dev",
                "TerminalId" =>"1110",
                "InputText" => "有快递"
            ];

            $params = json_encode($data);
            $req->fromJsonString($params);


            $resp = $client->TextProcess($req);

            print_r($resp->toJsonString());
        }
        catch(TencentCloudSDKException $e) {
            echo $e;
        }

    }
}
