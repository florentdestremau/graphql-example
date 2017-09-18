<?php

namespace AppBundle\GraphQL\Field;

use AppBundle\Entity\Article;
use AppBundle\GraphQL\Type\ArticleType;
use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Type\AbstractType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\BooleanType;
use Youshido\GraphQLBundle\Field\AbstractContainerAwareField;

class ArticlesField extends AbstractContainerAwareField
{
    public function build(FieldConfig $config)
    {
        $config->addArguments(
            [
                'published' => new BooleanType(),
            ]
        );
    }

    public function resolve($value, array $args, ResolveInfo $info)
    {
        return $this->container
            ->get('doctrine.orm.entity_manager')
            ->getRepository(Article::class)
            ->findBy($args);
    }

    /**
     * @return AbstractObjectType|AbstractType
     */
    public function getType()
    {
        return new ListType(new ArticleType());
    }
}
