<?php

namespace Jaxon\Demo\Calc;

use Jaxon\Demo\Calc\App\Calc;
use Jaxon\Plugin\AbstractPackage;

use function realpath;
use function Jaxon\cl;

/**
 * Calc package
 */
class Package extends AbstractPackage
{
    /**
     * @inheritDoc
     */
    public static function config()
    {
        return realpath(__DIR__ . '/../config/calc.php');
    }

    /**
     * @inheritDoc
     */
    public function getHtml(): string
    {
        return cl(Calc::class)->html();
    }
}
