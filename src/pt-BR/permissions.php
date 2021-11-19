<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Permission Language Lines
    |--------------------------------------------------------------------------
    |
    | The permission translations translate the page of the permission manager.
    | In addition, permission "groups" and "operations" are translated here.
    | These can occur in different parts of the litstack application.
    |
    */

    'role_name'  => 'nome do papel',
    'operations' => [
        'lit-user-roles' => 'Papel do Usuário',
        'lit-users'      => 'Usuários',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Você não pode remover a função de administrador da sua conta..',
        'added_role'              => 'Papel criado {role}.',
        'deleted_role'            => 'Papel removido {role}.',
        'cant_delete_role'        => 'O papel {role} não pode ser excluido.',
        'confirm_delete_role_msg' => 'Todos os usuários do papel <b>{role}</b> são atribuídos ao papel<b>Usuário</b>.',
        'all_permission_updated'  => 'Permissões atualizadas: {group}',
        'permission_updated'      => 'Permissões atualizadas: {operation} {group}',
        'role_assigned'           => '{username} foi atribuído o papel {role}.',
        'role_removed'            => 'Papel {role} foi removido de {username}.',
    ],
];
