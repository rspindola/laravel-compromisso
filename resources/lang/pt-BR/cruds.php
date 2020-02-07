<?php

return [
    'userManagement' => [
        'title'          => 'Gerenciar Usuários',
        'title_singular' => 'Gerenciar Usuário',
    ],
    'permission'     => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titulo',
            'title_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluido em',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Funções',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titulo',
            'title_helper'       => '',
            'permissions'        => 'Permissão',
            'permissions_helper' => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluido em',
            'deleted_at_helper' => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'email'                    => 'E-mail',
            'email_helper'             => '',
            'email_verified_at'        => 'Email veriicado em',
            'email_verified_at_helper' => '',
            'password'                 => 'Senha',
            'password_helper'          => '',
            'password_confirmation'         => 'Confirmar Senha',
            'password_confirmation_helper'  => '',
            'roles'                    => 'Funções',
            'roles_helper'             => '',
            'remember_token'           => 'Lembrar',
            'remember_token_helper'    => '',
            'created_at'               => 'Criado em',
            'created_at_helper'        => '',
            'updated_at'               => 'Atualizado em',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Excluido em',
            'deleted_at_helper'        => '',
        ],
    ],
    'service'        => [
        'title'          => 'Serviços',
        'title_singular' => 'Serviço',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'price'             => 'Preço',
            'price_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluido em',
            'deleted_at_helper' => '',
        ],
    ],
    'cupon'        => [
        'title'          => 'Cupons',
        'title_singular' => 'Cupom',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Titulo',
            'name_helper'        => '',
            'discount'           => 'Desconto',
            'discount_helper'    => '',
            'validity'        => 'Validade',
            'validity_helper' => '',
            'created_at'         => 'Criado em',
            'created_at_helper'  => '',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Excluido em',
            'deleted_at_helper'  => '',
        ],
    ],
    'employee'       => [
        'title'          => 'Funcionários',
        'title_singular' => 'Funcionário',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'email'             => 'E-mail',
            'email_helper'      => '',
            'phone'             => 'Telefone',
            'phone_helper'      => '',
            'photo'             => 'Foto',
            'photo_helper'      => '',
            'services'          => 'Serviços',
            'services_helper'   => '',
            'genre'          => 'Gênero',
            'genre_helper'   => '',
            'birth_date'          => 'Aniversário',
            'birth_date_helper'   => '',
            'address'          => 'Endereço',
            'address_helper'   => '',
            'number'          => 'Número',
            'number_helper'   => '',
            'city'          => 'Cidade',
            'city_helper'   => '',
            'state'          => 'Estado',
            'state_helper'   => '',
            'country'          => 'País',
            'country_helper'   => '',
            'neighborhood'          => 'Bairro',
            'neighborhood_helper'   => '',
            'zipcode'          => 'CEP',
            'zipcode_helper'   => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluido em',
            'deleted_at_helper' => '',
        ],
    ],
    'client'         => [
        'title'          => 'Clientes',
        'title_singular' => 'Cliente',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'phone'             => 'Telefone',
            'phone_helper'      => '',
            'email'             => 'E-mail',
            'email_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Excluido em',
            'deleted_at_helper' => '',
        ],
    ],
    'appointment'    => [
        'title'          => 'Compromissos',
        'title_singular' => 'Compromisso',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'client'             => 'Cliente',
            'client_helper'      => '',
            'employee'           => 'Funcionário',
            'employee_helper'    => '',
            'start_time'         => 'Inicio',
            'start_time_helper'  => '',
            'finish_time'        => 'Fim',
            'finish_time_helper' => '',
            'price'              => 'Preço',
            'price_helper'       => '',
            'comments'           => 'Comentários',
            'comments_helper'    => '',
            'services'           => 'Serviços',
            'services_helper'    => '',
            'created_at'         => 'Criado em',
            'created_at_helper'  => '',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Excluido em',
            'deleted_at_helper'  => '',
        ],
    ],
];
