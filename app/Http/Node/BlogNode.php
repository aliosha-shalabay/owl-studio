<?php

namespace App\Http\Node;


use App\User;
use Illuminate\Contracts\Foundation\Application;

class BlogNode extends BaseNode
{

    public function __construct(Application $app, $model = null)
    {
        parent::__construct($app, $model);

        $this->fieldName([
            'title_uk' => 'Заголовок UK',
            'title_en' => 'Заголовок EN',
            'text_uk' => 'Текст UK',
            'text_en' => 'Текст EN',
            'seo_title' => 'SEO Title',
            'seo_description' => 'SEO Description',
            'seo_keywords' => 'SEO Keywords',
            'alias' => 'URL',
            'img' => 'Головне зображення',
            'user_id' => 'Автор',
        ]);

    }

    public function showDisplay()
    {
        $this->fieldShow([
            'title_uk',
            'text_uk',
            'img',
            'alias',
            'user_id',
        ]);

        $this->tableRowsRenderCollback(function ($model){
           $model->user_id = $model->user->email;
           return $model;
        });
    }


    public function showEditDisplay()
    {

        $this->setTypeField([
            'title_uk' => 'text',
            'title_en' => 'text',
            'text_uk' => 'textarea',
            'text_en' => 'textarea',
            'seo_title' => 'text',
            'seo_description' => 'textarea',
            'seo_keywords' => 'text',
            'alias' => 'text',
            'img' => ['file', 'upload/blog'],
            'user_id' => ['select', [User::class, 'id', 'email']],
        ]);

        $this->enableEditor(['text_uk', 'text_en']);

    }


    public function showInsertDisplay()
    {
        $this->showEditDisplay();
    }

    public function showDelete()
    {

    }

}