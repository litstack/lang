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

    'role_name'  => 'Nombre del rol',
    'operations' => [
        'lit-user-roles' => 'Funciones de los usuarios',
        'lit-users'      => 'Usuario',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'No puede eliminar el rol de administrador de su cuenta.',
        'permission_updated'      => 'La autorización ha cambiado: :group :operation',
        'added_role'              => 'Se ha creado el rol {role}.',
        'deleted_role'            => 'El rol {role} ha sido eliminado.',
        'cant_delete_role'        => 'El rol :role no puede ser eliminado.',
        'confirm_delete_role_msg' => 'Todos los usuarios del rol <b>{role}</b> están asignados al rol <b>usuario</b>.',
        'all_permission_updated'  => 'Los permisos han cambiado: {group}',
        'permission_updated'      => 'La autorización ha cambiado: {group} {operation}',
        'role_assigned'           => 'A {username} se le ha asignado el rol {role}.',
        'role_removed'            => '{username} ha sido despojado del rol {role}.',
    ],
];
