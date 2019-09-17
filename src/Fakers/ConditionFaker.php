<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ConditionFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('raw', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
