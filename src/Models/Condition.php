<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;
use Railken\Template\Generators\TextGenerator;
use Railken\Bag;

class Condition extends Model implements EntityContract
{
    use SoftDeletes, ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.condition.data.condition');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function target(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Generate the raw string
     *
     * @param \Railken\Bag
     *
     * @return string
     */
    public function parse(Bag $data): string
    {
        $generator = new TextGenerator;

        return $generator->generateAndRender($this->raw, $data->toArray());
    }
}
