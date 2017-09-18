<?php

namespace AppBundle\GraphQL;

use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Schema\AbstractSchema;

class Schema extends AbstractSchema
{

    public function build(SchemaConfig $config)
    {
        $config->setQuery(new Query());
    }
}
