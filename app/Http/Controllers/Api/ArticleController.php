<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function articleList()
    {
        $list = DB::table("article")->where("status",'=',1)->get();
        return_json(100,"success1",$list);

    }
    public function articleDetail($id=1)
    {
        $info = DB::table("article")->where("id",'=',$id)->first();
        return_json(100,"success",$info);
    }

    public function aboutMe()
    {
        $content = DB::table("b_articles")->where("id",'=',2)->first();
        return_json(100,"success",$content);
    }


}
