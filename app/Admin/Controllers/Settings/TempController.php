<?php

namespace App\Admin\Controllers\Settings;

use App\Models\Settings\Temp;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use function foo\func;
use Illuminate\Support\Facades\DB;

class TempController extends AdminController
{
    use HasResourceActions;

    public function index(Content $content)
    {
        return $content
            ->header("模板")
            ->description("模板列表")
            ->body($this->grid());
    }
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Settings\Temp';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Temp);
        $grid->filter(function($filter){
            $filter->column(1/2,function ($filter){
                $filter->like('title');
            });
            $filter->column(1/2,function ($filter){
                $filter->between('rate');
            });
        });

        $grid->paginate(15);
        $grid->column('id','ID')->sortable()->style('border-left:1px solid #ccc');
        $grid->title('标题')->width('100');//->editable('select', [1 => 'option1', 2 => 'option2', 3 => 'option3']);;
        $grid->column('rate',"排序权重")->sortable()->style('border-left:1px solid #ccc')->width(50);
        $is_recommend = [
            'on'  => ['value' => 1, 'text' => '推荐', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '不推荐', 'color' => 'default'],
        ];
        $grid->column('is_recommend','是否推荐')->switch($is_recommend)->style('border-left:1px solid #ccc');
        $grid->column('temp_cost','是否免费')->display(function ($temp_cost){
            return $temp_cost==0?'是':'否';
        })->color('#f00');
        $status = [
            'on'  => ['value' => 1, 'text' => '上架', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '下架', 'color' => 'default'],
        ];
        $grid->column('status','上架状态')->switch($status);
        $grid->column('used_times','使用次数')->editable()->sortable();
        $grid->column('mark','文案')->editable('textarea')->style('width:100px;');
        $grid->column('video_url')->link()->style('border-left:1px solid #ccc');
        $grid->column('tmp_url')->link()->copyable()->width(50)->style('border-left:1px solid #ccc');
        $grid->column('cover_url','封面图')->image('','60','100');

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
        $show = new Show(Temp::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Temp);
//        $form->header('创建模板');
        $form->setTitle('创建模板');

        $form->column(1/3,function ($form){
            $form->text('title','模板标题')->required();
            $form->number('temp_cost','花费');
            $form->number('rate','排序权重');
            $form->radio('is_recommend','是否推荐')->options(['1'=> '是', '2'=> '否'])->default('1');
            $form->radio('status','是否上架')->options(['1'=> '是', '2'=> '否'])->default('1');
        });
        $form->column(1/3,function($form){
            $form->number('user_times','使用次数');
            $form->text("mark",'文案');
            $form->image('cover_url','封面图')->move('public/upload/images');
            $form->file('tmp_url','模板文件');
//            $form->text('title')->value('text...');
        });
        $form->column(1/3,function($form){
            $form->text("video_url",'视频地址');
            $form->fieldset('用户信息', function (Form $form) {
                $form->text('username');
                $form->email('email');
            });
            $form->text('title', '标题')->icon('fa-pencil');
            $form->multipleSelect("test","test")->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name']);
//            $form->listbox("test","test")->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name']);
            $form->url("video_url",'视频地址');
            $form->timeRange("video_url",'视频地址', 'Time Range');
            $form->keyValue('kv')->rules('required|min:5');
        });



        $form->footer(function ($footer) {
            // 去掉`重置`按钮
//            $footer->disableReset();
//
//            // 去掉`提交`按钮
//            $footer->disableSubmit();

            // 去掉`查看`checkbox
            $footer->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();

            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();

        });
        return $form;
    }
}
