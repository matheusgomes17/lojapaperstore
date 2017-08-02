<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Menus Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines are used in menu items throughout the system.
      | Regardless where it is placed, a menu item can be listed here so it is easily
      | found in a intuitive way.
      |
      |--------------------------------------------------------------------------
     */

    'backend' => [
        'access' => [
            'title' => 'Gerenciamento de Usuários',
            'roles' => [
                'all'        => 'Todos os Papéis',
                'create'     => 'Criar Papel',
                'edit'       => 'Editar Papel',
                'management' => 'Gerenciamento de Papéis',
                'main'       => 'Papéis',
            ],
            'users' => [
                'all'             => 'Todos os Usuários',
                'change-password' => 'Alterar Senha',
                'create'          => 'Criar Usuário',
                'deactivated'     => 'Desativar Usuários',
                'deleted'         => 'Excluir Usuários',
                'edit'            => 'Editar Usuário',
                'main'            => 'Usuários',
                'view'            => 'Visualizar Usuário',
            ],
        ],
        'catalog' => [
            'title' => 'Gerenciamento de Produtos',
            'categories' => [
                'all'        => 'Todas as Categorias',
                'create'     => 'Criar Categoria',
                'edit'       => 'Editar Categoria',
                'management' => 'Gerenciamento de Categorias',
                'main'       => 'Categorias',
            ],
            'products' => [
                'all'         => 'Todos os Produtos',
                'create'      => 'Criar Produto',
                'deactivated' => 'Desativar Produtos',
                'deleted'     => 'Excluir Produtos',
                'edit'        => 'Editar Produto',
                'management'  => 'Gerenciamento de Produtos',
                'main'        => 'Produtos',
            ],
            'budgets' => [
                'pending'     => 'Orçamentos Pendentes',
                'answered'    => 'Orçamentos Respondidos',
                'management'  => 'Gerenciamento de Orçamentos',
                'main'        => 'Orçamentos',
            ],
        ],
        'log-viewer' => [
            'main'      => 'Visualizador de Log',
            'dashboard' => 'Painel de Controle',
            'logs'      => 'Logs',
        ],
        'general' => [
            'sliders' => [
                'all'         => 'Todos os Sliders',
                'create'      => 'Criar Slider',
                'deactivated' => 'Desativar Sliders',
                'deleted'     => 'Excluir Slider',
                'edit'        => 'Editar Slider',
                'management'  => 'Gerenciamento de Produtos',
                'main'        => 'Gerenciador de Sliders',
                'title'       => 'Gerenciando Sliders',
            ],
            'contacts' => [
                'index'       => 'Contatos Pendentes',
                'answer'      => 'Contatos Respondidos',
                'management'  => 'Gerenciamento de Produtos',
                'main'        => 'Gerenciador de Contatos',
                'title'       => 'Gerenciando Contatos',
            ],
        ],
        'sidebar' => [
            'dashboard' => 'Painel de Controle',
            'general'   => 'Geral',
            'system'    => 'Sistema',
        ],
    ],
    'language-picker' => [
        'language' => 'Idioma',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar'    => 'العربية (Arabic)',
            'da'    => 'Dinamarquês (Danish)',
            'de'    => 'Alemão (German)',
            'el'    => '(Greek)',
            'en'    => 'Inglês (English)',
            'es'    => 'Espanhol (Spanish)',
            'fr'    => 'Francês (French)',
            'it'    => 'Italiano (Italian)',
            'nl'    => 'Holandês (Dutch)',
            'pt_BR' => 'Português do Brasil (Brazilian Portuguese)',
            'sv'    => 'Sueco (Swedish)',
            'th'    => 'Thai',
        ],
    ],
];
