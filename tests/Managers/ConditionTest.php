<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ConditionFaker;
use Amethyst\Managers\ConditionManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ConditionTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ConditionManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ConditionFaker::class;
}
