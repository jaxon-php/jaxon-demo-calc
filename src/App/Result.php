<?php

namespace Jaxon\Demo\Calc\App;

use Jaxon\App\NodeComponent;
use Stringable;

class Result extends NodeComponent
{
    public function html(): Stringable
    {
        return $this->view()->render('jaxon::demo::calc::result', [
            'result' => $this->stash()->get('calculator.result'),
            'operator' => $this->stash()->get('calculator.operator'),
        ]);
    }
}
