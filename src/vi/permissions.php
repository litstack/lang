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

    'role_name'  => 'tên vai trò',
    'operations' => [
        'lit-user-roles' => 'Vai trò người dùng',
        'lit-users'      => 'Người dùng',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Không thể xóa vai trò Admin.',
        'added_role'              => 'Đã tạo vai trò {role}.',
        'deleted_role'            => 'Đã xóa vai trò {role}.',
        'cant_delete_role'        => 'Vai trò {role} không thể xóa.',
        'confirm_delete_role_msg' => 'Tất cả người dùng thuộc <b>{role}</b> sẽ được chuyển thành <b>User</b>.',
        'all_permission_updated'  => 'Phân quyền đã cập nhật: {group}',
        'permission_updated'      => 'Phân quyền đã cập nhật: {operation} {group}',
        'role_assigned'           => '{username} đã được gán vai trò {role}.',
        'role_removed'            => 'Vai trò {role} đã được xóa khỏi {username}.',
    ],
];
