<?php

use Jaxon\Demo\Calc\Service\CalculatorService;

return [
    'directories' => [
        [
            'path' => realpath(__DIR__ . '/../src/App'),
            'namespace' => 'Jaxon\\Demo\\Calc\\App',
        ],
    ],
    'views' => [
        'jaxon::demo::calc' => [
            'directory' => realpath(__DIR__ . '/../templates'),
            'extension' => '',
            'renderer' => 'jaxon',
        ],
    ],
    'container' => [
        'auto' => [
            CalculatorService::class,
        ],
    ],
];
