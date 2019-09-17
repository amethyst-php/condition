<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ConditionAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'condition.create',
        Tokens::PERMISSION_UPDATE => 'condition.update',
        Tokens::PERMISSION_SHOW   => 'condition.show',
        Tokens::PERMISSION_REMOVE => 'condition.remove',
    ];
}
