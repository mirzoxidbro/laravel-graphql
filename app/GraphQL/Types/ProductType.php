<?php

// app/graphql/types/CategoryType 

namespace App\GraphQL\Types;

use App\Models\Category;
use App\Models\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Product',
        'description' => 'Collection of products',
        'model' => Product::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of product'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of the product'
            ]
        ];
    }
}