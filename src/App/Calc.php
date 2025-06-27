<?php

namespace Jaxon\Demo\Calc\App;

use Jaxon\App\NodeComponent;
use Stringable;

class Calc extends NodeComponent
{
    public function html(): Stringable
    {
        return $this->view()->render('jaxon::demo::calc::calc');
    }
}
