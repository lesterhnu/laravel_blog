<?php

namespace App\Admin\Controllers;

use App\Model\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章列表';

//    public function index(Content $content)
//    {
//        $content->header('文章列表')
//            ->description('')
//            ->body($this->grid());
//    }

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
        $grid->column('category.title','分类名称');
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
//        return $content->header('文章详情')
//            ->description('详情')
//            ->body(Article::findOrFail($id),function (Show $show){
//                $show->id('ID');
//                $show->title('标题');
//                $show->content('内容');
//                $show->created_at();
//                $show->updated_at();
//            });
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
        $form->text('sub_title')->default('无');
        $form->datetime('created_at','创建时间');
        $form->textarea('content','内容');


        return $form;
    }

//    public function show($id, Content $content)
//    {
//        return $content->header('Post')
//            ->description('详情')
//            ->body(Admin::show(Post::findOrFail($id), function (Show $show) {
//
//                $show->id('ID');
//                $show->title('标题');
//                $show->content('内容');
//                $show->created_at();
//                $show->updated_at();
//            }));
//    }
}
