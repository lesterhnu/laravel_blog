<?php

namespace App\Admin\Controllers;

use App\Model\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);
        $grid->column('id','ID')->sortable();
        $grid->column('title','文章标题')->editable();
        $grid->column('author','文章作者')->editable();
//        $grid->column('category.title','分类名称');
        $grid->column("status",'显示')->switch();
        $grid->column('created_at','创建时间')->sortable();


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Article::findOrFail($id));
        $show->field("id",'ID');
        $show->field("title",'文章标题');
        $show->field("sub_title",'文章副标题');
        $show->field("content","文章内容");
        $show->field("status","是否显示");
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article);
        $form->text('author','作者')->rules('required');
        $form->text('title','文章标题')->rules('required');
        $form->text('sub_title','文章副标题')->default('无');
        $cate = DB::table("b_categories")->where("on_show",'=',1)->get();
        foreach ($cate as $k=>$v){
            $list[$v->id] = $v->title;
        }
        $form->select("cate_id",'文章分类')->default(1)->options($list);
        $form->datetime('created_at','创建时间');
        $states = [
            'on'  => ['value' => 1, 'text' => '显示', 'color' => 'success'],
            'off' => ['value' => 2, 'text' => '不显示', 'color' => 'danger'],
        ];
        $form->switch("status",'显示')->states($states);
        $form->UEditor('content','内容');


        return $form;
    }
}
