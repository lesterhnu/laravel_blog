<?php

namespace App\Admin\Controllers;

use App\Model\Settings;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SettingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\Settings';
    public function index(Content $content)
    {
        return $content->header('系统配置项')
            ->description('')
            ->body($this->grid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Settings);
        $grid->column("id",'ID')->sortable();
        $grid->column('title','配置项名称')->editable();
        $grid->column('value','配置项值')->editable();
        $status = [
            'on'  => ['value' => 1, 'text' => '是', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => '否', 'color' => 'default'],
        ];
        $grid->column('status','是否可用')->switch($status);

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
        $show = new Show(Settings::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Settings);
        $form->text('title','配置项名称')->help('请输入英文字符串')->pattern('\w{1,30}');
        $form->text('value','配置项的值')->rules('required');
        $status = [
            'on' =>['value'=>1,'text'=>'是','color'=>'success'],
            'off'=>['value'=>2,'text'=>'否','color'=>'danger']
        ];
        $form->switch('status','是否生效')->states($status);
        $form->datetime('updated_at','更新时间')->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
