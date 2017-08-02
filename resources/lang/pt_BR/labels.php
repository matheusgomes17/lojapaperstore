<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Labels Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines are used in labels throughout the system.
      | Regardless where it is placed, a label can be listed here so it is easily
      | found in a intuitive way.
      |
      |--------------------------------------------------------------------------
     */

    'general' => [
        'all'     => 'Todos',
        'yes'     => 'Sim',
        'no'      => 'Não',
        'custom'  => 'Custom', // TODO TRANSLATION
        'actions' => 'Ações',
        'active'  => 'Ativo',
        'buttons' => [
            'save'   => 'Salvar',
            'update' => 'Atualizar',
        ],
        'hide'              => 'Esconder',
        'inactive'          => 'Inativo',
        'none'              => 'Nenhum',
        'show'              => 'Mostrar',
        'toggle_navigation' => 'Mostrar / Esconder Navegação',
    ],
    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'Criar Papel',
                'edit'       => 'Criar Papel',
                'management' => 'Gerenciamento de Papéis',
                'table'      => [
                    'number_of_users' => 'Número de Usuários',
                    'permissions'     => 'Permissões',
                    'role'            => 'Papel',
                    'sort'            => 'Ordenar',
                    'total'           => 'total de permissao|total de permissões',
                ],
            ],
            'users' => [
                'active'              => 'Ativar Usuários',
                'all_permissions'     => 'Todas as Permissões',
                'change_password'     => 'Alterar Senha',
                'change_password_for' => 'Alterar senha para :user',
                'create'              => 'Criar Usuário',
                'deactivated'         => 'Desativar Usuários',
                'deleted'             => 'Excluir Usuários',
                'edit'                => 'Editar Usuário',
                'management'          => 'Gerenciamento Usuários',
                'no_permissions'      => 'Sem permissões',
                'no_roles'            => 'Sem papéis para definir.',
                'permissions'         => 'Permissões',
                'table'               => [
                    'confirmed'      => 'Confirmado',
                    'created'        => 'Criado',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Última atualização',
                    'name'           => 'Nome',
                    'no_deactivated' => 'Nenhum usuário desativado.',
                    'no_deleted'     => 'Nenhum usuário excluído',
                    'roles'          => 'Papéis',
                    'total'          => 'total de usuário|total de usuários',
                ],
                'tabs' => [
                    'titles' => [
                        'overview' => 'Visão Geral',
                        'history'  => 'Histórico',
                    ],
                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmado',
                            'created_at'   => 'Criado em',
                            'deleted_at'   => 'Apagado em',
                            'email'        => 'E-mail',
                            'last_updated' => 'Última atualização',
                            'name'         => 'Nome',
                            'status'       => 'Estado',
                        ],
                    ],
                ],
                'view' => 'Visualizar Usuário',
            ],
        ],
        'catalog' => [
            'products' => [
                'active' => 'Ativar Produto',
                'deactivated' => 'Desativar Produto',
                'deleted' => 'Excluir Produto',
                'create' => 'Criar Produto',
                'edit' => 'Editar Produto',
                'management' => 'Gerenciado Produtos',
                'table' => [
                    'name' => 'Nome',
                    'code' => 'Código',
                    'category' => 'Categoria',
                    'create' => 'Criado em',
                    'last_updated' => 'Última atualização',
                ],
            ],
            'categories' => [
                'active' => 'Ativar Categoria',
                'create' => 'Criar Categoria',
                'edit' => 'Editar Categoria',
                'management' => 'Gerenciado Categoria',
                'table' => [
                    'name' => 'Nome',
                    'create' => 'Criado em',
                    'last_updated' => 'Última atualização',
                ],
            ],
            'budgets' => [
                'pending' => 'Responder Orçamento',
                'answered' => 'Orçamentos Respondidos',
                'management' => 'Gerenciado Orçamentos',
                'title' => 'Responder Orçamento',
                'reply' => 'Resposta',
                'reply_to' => 'Resposta de',
                'list' => 'Lista de Orçamentos',
                'modal' => 'Você tem certeza que deseja excluir este orçamento?',
                'table' => [
                    'id' => 'N° Orçamento',
                    'items' => 'Item',
                    'user' => 'Usuário',
                    'status' => 'Status',
                    'last_updated' => 'Última atualização',
                ],
                'answers' => [
                    'date' => 'Data do Orçamento:',
                    'budget' => 'N° Orçamento',
                    'qtd' => 'Quantidade',
                    'phone' => 'Telefone:',
                    'mail' => 'E-mail:',
                    'deadline' => 'Prazo de entrega',
                    'validity' => 'Validade do Orçamento',
                    'table' => [
                        'product' => 'Produto',
                        'cod' => 'Código',
                        'category' => 'Modelo',
                        'image' => 'Imagem',
                    ],
                ],
            ],
        ],
        'general' => [
            'sliders' => [
                'active' => 'Ativar Slider',
                'deactivated' => 'Desativar Slider',
                'deleted' => 'Excluir Slider',
                'create' => 'Criar Slider',
                'edit' => 'Editar Slider',
                'management' => 'Gerenciado Slider',
                'table' => [
                    'id' => '#',
                    'url' => 'Link',
                    'title' => 'Título',
                    'status' => 'Status',
                    'create' => 'Criado em',
                    'last_updated' => 'Última atualização',
                ],
            ],
            'contacts' => [
                'active' => 'Ativar Contato',
                'management' => 'Gerenciado Contato',
                'table' => [
                    'name' => 'Nome',
                    'email' => 'E-mail',
                    'subject' => 'Assunto',
                    'create' => 'Criado em',
                    'last_updated' => 'Última atualização',
                ],
            ],
            'answers' => [
                'active' => 'Ativar Contato',
                'management' => 'Gerenciado Contato',
                'table' => [
                    'name' => 'Nome',
                    'email' => 'E-mail',
                    'subject' => 'Assunto',
                    'create' => 'Criado em',
                    'last_updated' => 'Última atualização',
                ],
            ],
        ],
    ],
    'frontend' => [
        'auth' => [
            'login_box_title'    => 'Entrar',
            'login_button'       => 'Entrar',
            'login_with'         => 'Entrar com :social_media',
            'register_box_title' => 'Registrar',
            'register_button'    => 'Registrar',
            'remember_me'        => 'Lembrar-me',
        ],
        'passwords' => [
            'forgot_password'                 => 'Esqueceu Sua Senha?',
            'reset_password_box_title'        => 'Resetar Senha',
            'reset_password_button'           => 'Resetar Senha',
            'send_password_reset_link_button' => 'Enviar link para redefinição de senha',
        ],
        'macros' => [
            'country' => [
                'alpha'   => 'Códigos de País Alpha',
                'alpha2'  => 'Códigos de País Alpha 2',
                'alpha3'  => 'Códigos de País Alpha 3',
                'numeric' => 'Códigos Numéricos País',
            ],
            'macro_examples' => 'Exemplo de Macros',
            'state'          => [
                'mexico' => 'Lista de Estados do México',
                'us'     => [
                    'us'       => 'Lista de estados dos EUA',
                    'outlying' => 'Territórios Distantes EUA',
                    'armed'    => 'Forças Armadas dos EUA',
                ],
            ],
            'territories' => [
                'canada' => 'Província do Canadá e Lista de Territórios',
            ],
            'timezone' => 'Fuso horário',
        ],
        'user' => [
            'passwords' => [
                'change' => 'Alterar Senha',
            ],
            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Criado em',
                'edit_information'   => 'Editar informações',
                'email'              => 'E-mail',
                'last_updated'       => 'Última atualização',
                'name'               => 'Nome',
                'update_information' => 'Atualizar informação',
            ],
            'budgets' => [
                'title' => 'Meus Orçamentos',
            ]
        ],
        'contact' => [
            'title' => 'Contato',
            'wellcome' => '..Estamos esperando a sua visita!..',
            'description' => 'Venha agora mesmo conhecer nosso Showroom.',
            'name' => 'Nome',
            'email' => 'E-mail',
            'subject' => 'Assunto',
            'message' => 'Mensagem',
            'budget_list' => 'LISTA DE ORÇAMENTOS',
            'site_name' => 'PaperStore',
            'site_address' => [
                'address' => 'Rua Porangaba',
                'number' => '781',
                'complement' => 'D',
                'neighborhood' => 'Vila Industrial',
                'city' => 'Araçatuba',
                'state' => 'SP',
                'cep' => '16072-475',
            ],
            'site_phone' => '(18) 99747-3315',
            'site_email' => 'contato@paperstore.com.br',
        ],
        'product' => [
            'comments' => [
                'title' =>  'Comentários',
                'coments_for' => 'Comentários do produto',
                'add_comment' => 'Adicionar Comentário',
                'your_rating' => 'Sua Avaliação',
                'your_comment' => 'Seu Comentário',
                'name' => 'Nome',
                'email' => 'E-mail',
            ],
            'description' => 'Descrição',
            'add_budge' => 'Add Orçamento',
            'add_to_budge' => 'Adicionar ao Orçamento',
            'ask_for_quote' => 'Solicite um orçamento',
            'quick_view' => 'Olhada rápida',
            'view_detail' => 'Ver Detalhes',
            'browse_all_products' => 'Visualizar todos os Produtos',
            'badges' => [

            ],
            'category' => [
                'title' => 'Categoria',
            ],
        ],
        'cart' => [
            '' => '',
            '' => '',
            'table' => [
                'item' => 'Item',
                'product' => 'Produto',
                'code' => 'Código',
            ],
            'close_budget' => 'Fechar Orçamentos',
            'continue_budget' => 'Continuar pesquisando...',
            'empty_card' => 'Lista vazia!',
            'checkout' => 'Fazer Orçamento',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ],
        'newsletter' => [
            'title' => 'Receba nossas novidades e lançamentos',
            'description' => 'Seu e-mail está seguro conosco. Nós nunca lhe enviaremos spam!',
            'email' => 'Entre com seu e-mail',
            'subscribe' => 'Assine',
        ],
    ],
];
