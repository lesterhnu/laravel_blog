<?php

namespace App\Http\Controllers\api;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function articleList(Request $request)
    {
        $type = $request->input('type');
        $list = DB::table('articles')->where('status','=','1')->get();
        return \response()->json(['list'=>$list,'code'=>1000,'msg'=>'success']);
    }
}
