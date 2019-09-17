<?php

return [
    'table'      => 'amethyst_conditions',
    'comment'    => 'Condition',
    'model'      => Amethyst\Models\Condition::class,
    'schema'     => Amethyst\Schemas\ConditionSchema::class,
    'repository' => Amethyst\Repositories\ConditionRepository::class,
    'serializer' => Amethyst\Serializers\ConditionSerializer::class,
    'validator'  => Amethyst\Validators\ConditionValidator::class,
    'authorizer' => Amethyst\Authorizers\ConditionAuthorizer::class,
    'faker'      => Amethyst\Fakers\ConditionFaker::class,
    'manager'    => Amethyst\Managers\ConditionManager::class,
];
