<?php
/**
 * Created by PhpStorm.
 * User: aliosha
 * Date: 27.03.19
 * Time: 22:17
 */

namespace App\Http\Node;

use Illuminate\Contracts\Foundation\Application;
use Trafik8787\LaraCrud\Contracts\NodeInterface;
use Trafik8787\LaraCrud\Models\NodeModelConfiguration;

abstract class BaseNode extends NodeModelConfiguration implements NodeInterface
{

    public function __construct(Application $app, $model = null)
    {
        parent::__construct($app, $model);

        $this->buttonCopy(false);
        $this->buttonApply(false);
    }

}