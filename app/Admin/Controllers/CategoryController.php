<?php

namespace App\Admin\Controllers;

use App\Model\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分类列表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);
        $grid->column('title','分类名称')->editable();
        $on_show = [
            'on' => ['value'=>1,'text'=>'显示','color'=>'success'],
            'on' => ['value'=>2,'text'=>'不显示','color'=>'failed'],
        ];
        $grid->column('on_show','是否显示')->switch($on_show);
//        $grid->column('');
        $grid->column('articles','文章数')->display(function ($articles){
            $count = count($articles);
            return $count;
        });

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
        $show = new Show(Category::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);



        return $form;
    }
}
