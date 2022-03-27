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

    'role_name'  => 'ناوی ڕۆڵ',
    'operations' => [
        'lit-user-roles' => 'ڕۆڵەکانی بەکارهێنەر',
        'lit-users'      => 'بەکارهێنەران',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'You cannot remove the Admin role from your account.',
        'added_role'              => 'Created Role {role}.',
        'deleted_role'            => 'Deleted Role {role}.',
        'cant_delete_role'        => 'The Role {role} cannot be deletet.',
        'confirm_delete_role_msg' => 'All users of the role <b>{role}</b> are assigned to the role <b>User</b>.',
        'all_permission_updated'  => 'Permissions updated: {group}',
        'permission_updated'      => 'Permission updated: {operation} {group}',
        'role_assigned'           => '{username} was assigned the role {role}.',
        'role_removed'            => 'Role {role} was removed from {username}.',
    ],
];
