<?php

namespace App\Http\Node;


use Illuminate\Contracts\Foundation\Application;

class SettingNode extends BaseNode
{

    public function __construct(Application $app, $model = null)
    {
        parent::__construct($app, $model);
    }

    public function showDisplay()
    {

        $this->formShow(1);
        $this->setTitle('Головні налаштування');

        $this->setTypeField([
            'seo_title' => 'text',
            'seo_desc' => 'text',
            'seo_keywords' => 'text',
            'seo_text' => 'textarea',
            'phone' => 'text',
            'email' => 'text',
            'telegram' => 'text',
            'facebook' => 'text',
            'instagram' => 'text',
            'address_uk' => 'textarea',
            'address_en' => 'textarea',
        ]);

        $this->fieldName([
            'seo_title' => 'SEO Title',
            'seo_desc' => 'SEO Description',
            'seo_keywords' => 'SEO Keywords',
            'seo_text' => 'SEO Текст',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'telegram' => 'Telegram',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'address_uk' => 'Адресса EN',
            'address_en' => 'Адресса UK',
        ]);

        $this->enableEditor(['seo_text']);
    }


    public function showEditDisplay()
    {


    }


    public function showInsertDisplay()
    {

    }

    public function showDelete()
    {

    }

}