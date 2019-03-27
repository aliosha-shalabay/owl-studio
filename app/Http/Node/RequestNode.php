<?php

namespace App\Http\Node;

use Illuminate\Contracts\Foundation\Application;

class RequestNode extends BaseNode {

    public function __construct(Application $app, $model = null)
    {
        parent::__construct($app, $model);

        $this->buttonAdd(false);
        $this->buttonEdit(false);

        $this->fieldName([
            'name' => "Ім'я",
            'email' => "E-mail",
            'subject' => "Тема",
            'message' => "Повідомлення",

        ]);
    }

    public function showDisplay ()
    {


    }


    public function showEditDisplay()
    {
        $this->setTypeField([
            'name' => "text",
            'email' => "text",
            'subject' => "text",
            'message' => "textarea",

        ]);
    }


    public function showInsertDisplay()
    {
        $this->showEditDisplay();
    }

    public function showDelete()
    {

    }

}