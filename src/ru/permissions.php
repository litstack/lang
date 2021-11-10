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

    'role_name'  => 'Название роли',
    'operations' => [
        'lit-user-roles' => 'Роли пользователей',
        'lit-users'      => 'Пользователи',
    ],
    'groups'     => [
        //
    ],
    'messages'   => [
        'cant_remove_admin_role'  => 'Вы не можете удалить роль администратора у своей учётной записи.',
        'added_role'              => 'Роль {role} создана.',
        'deleted_role'            => 'Роль {role} удалена.',
        'cant_delete_role'        => 'Роль {role} не может быть удалена.',
        'confirm_delete_role_msg' => 'Всем пользователям роли <b>{role}</b> будет назначена роль <b>User</b>.',
        'all_permission_updated'  => 'Права доступа обновлены: {group}',
        'permission_updated'      => 'Права доступа обновлены: {operation} {group}',
        'role_assigned'           => 'Пользователю {username} назначена роль {role}.',
        'role_removed'            => 'У пользователя {username} удалена роль {role}.',
    ],
];
