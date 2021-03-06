<?php

namespace App\JsonApi\Tags;

use CloudCreativity\LaravelJsonApi\Schema\EloquentSchema;

class Schema extends EloquentSchema
{

    /**
     * @var string
     */
    protected $resourceType = 'tags';

    /**
     * @var array
     */
    protected $attributes = [
        'name',
    ];

}
