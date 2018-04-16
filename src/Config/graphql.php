<?php


return [

    'schemas' => [
        'default' => [
            'query' => [
                'users' => \App\GraphQL\Query\UserQuery::class,
            ],
            'mutation' => [
                'updateUserPassword' => \App\GraphQL\Mutation\UpdateUserPasswordMutation::class,
                'updateUserEmail' => \App\GraphQL\Mutation\UpdateUserEmailMutation::class,
            ]
        ]
    ],

    'types' => [
        'User' => \App\GraphQL\Type\UserType::class,
    ],
];
