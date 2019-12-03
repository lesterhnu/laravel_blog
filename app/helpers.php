<?php

//助手函数库
/**
 * @param $code int
 * @param $msg string
 * @param $data mixed
 */
function return_json($code,$msg,$data)
{
//    $data = json_decode(json_encode($data),true)[0];
    echo  json_encode([
        "code" => $code,
        "msg" => $msg,
        "data" =>$data
    ]);
}