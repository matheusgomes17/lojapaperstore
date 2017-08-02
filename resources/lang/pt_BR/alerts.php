<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    |--------------------------------------------------------------------------
    */

    'backend' => [
        'roles' => [
            'created' => 'O papel foi criado com sucesso.',
            'updated' => 'O papel foi atualizado com sucesso.',
            'deleted' => 'O papel foi excluído com sucesso.',
        ],

        'users' => [
            'confirmation_email'  => 'Uma nova confirmação de e-mail será enviada.',
            'created'             => 'O usuário foi criado com sucesso.',
            'deleted'             => 'O usuário foi excluído com sucesso.',
            'deleted_permanently' => 'O usuário foi excluído permanentemente.',
            'restored'            => 'O usuário foi restaurado com sucesso.',
            'updated'             => 'O usuário foi atualizado com sucesso.',
            'updated_password'    => 'A senha do usuário foi atualizada com sucesso.',
        ],

        'categories' => [
            'created'             => 'A categoria foi criada com sucesso.',
            'deleted'             => 'A categoria foi excluída com sucesso.',
            'updated'             => 'A categoria foi atualizada com sucesso.',
        ],

        'products' => [
            'created'             => 'O produto foi criado com sucesso.',
            'deleted'             => 'O produto foi excluído com sucesso.',
            'deleted_permanently' => 'O produto foi excluído permanentemente.',
            'restored'            => 'O produto foi restaurado com sucesso.',
            'updated'             => 'O produto foi atualizado com sucesso.',
        ],

        'budgets' => [
            'created'             => 'O orçamento foi criado com sucesso.',
            'updated'             => 'O orçamento foi atualizado com sucesso.',
            'pending'             => 'Aguarde até que o mesmo seja respondido para fazer um novo orçamento.',
            'answers' => [
                'responded'       => 'O orçamento foi respondido com sucesso.'
            ]
        ],

        'sliders' => [
            'created'             => 'O slider foi criado com sucesso.',
            'deleted'             => 'O slider foi excluído com sucesso.',
            'deleted_permanently' => 'O slider foi excluído permanentemente.',
            'restored'            => 'O slider foi restaurado com sucesso.',
            'updated'             => 'O slider foi atualizado com sucesso.',
        ],
    ],
    'frontend' => [
        'products' => [
            'no_have_products'    => 'Não existem produtos nesta categoria.',
        ]
    ],
];
