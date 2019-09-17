<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ConditionsController::class,
    'router'     => [
        'as'     => 'condition.',
        'prefix' => '/conditions',
    ],
];
