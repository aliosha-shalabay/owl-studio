<?php

namespace App\Providers;

use Trafik8787\LaraCrud\LaraCrudProvider as ServiceProvider;

class LaraCrudProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $navigation = [

        'App\Http\Node\RequestNode' => [
            'priory' => 1,
            'title' => 'Заявки',
            'icon' => 'fa-tree'
        ],
        'App\Http\Node\SettingNode' => [
            'priory' => 1,
            'title' => 'Налаштування',
            'icon' => 'fa-tree'
        ]
    ];

    protected $nodes = [
        'App\Http\Node\Model\RequestNodeModel'         => 'App\Http\Node\RequestNode',
        'App\Http\Node\Model\SettingNodeModel'         => 'App\Http\Node\SettingNode',
    ];

    public function boot()
    {

    }

}
