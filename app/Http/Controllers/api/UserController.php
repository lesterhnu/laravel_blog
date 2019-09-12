<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Response;
class UserController extends Controller
{
    public function getUserInfo()
    {
        $res = [
            'code'=>1000,
            'username' => 'ming',
            'msg' => 'hello world'
        ];
        return Response::json($res);
    }
}
