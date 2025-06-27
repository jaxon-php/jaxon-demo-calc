<?php

namespace Jaxon\Demo\Calc;

use Jaxon\Plugin\AbstractPackage;

use function realpath;

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
        return '' . $this->view()->render('jaxon::demo::calc::wrapper');
    }
}
