<?php

namespace App\Admin\Controllers;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class newsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('title', __('标题'));
        $grid->column('logo', __('Logo'));
        $grid->column('username', __('作者'));
        $grid->column('description', __('描述'));
        $grid->column('enable', __('有效'));
        $grid->column('content', __('内容'));
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
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('标题'));
        $show->field('logo', __('Logo'));
        $show->field('username', __('作者'));
        $show->field('description', __('描述'));
        $show->field('enable', __('有效'));
        $show->field('content', __('内容'));
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));
        $show->field('click_num', __('浏览量'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());
        $form->tab('基础信息', function ($form) {
            $form->text('title', __('标题'))->required();
            $form->image('logo', __('Logo'))->setWidth(3,2)->move('logo')->uniqueName()->thumbnail('resized', 80, 50);
            $form->text('description', __('描述'));
            $form->UEditor('content', '内容');
            $form->date('created_at',  __('创建时间'))->default(date('Y-m-d H:i:s'));
        });
        $form->tools(function (Form\Tools $tools) {

            $tools->disableView();
            /*$tools->disableList();
            $tools->disableDelete();*/
        });


        return $form;
    }
}
