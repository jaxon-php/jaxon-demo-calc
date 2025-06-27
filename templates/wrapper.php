<?php
use Jaxon\Demo\Calc\App\Calc;
use function Jaxon\attr;
use function Jaxon\cl;
use function Jaxon\rq;
?>
<div <?= attr()->bind(rq(Calc::class)) ?>>
    <?= cl(Calc::class)->html() ?>
</div>
