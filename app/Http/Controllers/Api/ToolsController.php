<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;
use Illuminate\Support\Facades\Redis;

class ToolsController extends Controller
{

    /**
     * @param Request $request
     */
    public function fenci (Request $request)
    {
        ini_set('memory_limit', '1024M');
        Jieba::init(['dict' => "big"]);
        Finalseg::init();

        $content = $request->input("content");
        $timestamp = time();

        $seg_list = Jieba::cut($content);
        $key = "hot_words_{$timestamp}";
        Redis::del($key);
        foreach ($seg_list as $k=>$v){
            if(iconv_strlen($v)==1 || trim($v)==''){
                continue;
            }else{
                Redis::hincrBy($key,trim($v),1);
            }
        }
        Redis::expire($key,3600);
        $res = Redis::hgetAll($key);
        arsort($res);
        $result = array_slice($res,0,50);
        $list = [];
        foreach ($result as $k=>$v){
            $list[] = [
                "word" => $k,
                "num" => $v
            ];
        }
        return_json(100,"success",$list);
    }
}
