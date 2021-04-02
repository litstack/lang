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

    'role_name'  => 'عنوان نقش',
    'operations' => [
        'lit-user-roles' => 'نقش های کاربر',
        'lit-users'      => 'کاربرها',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'شما نمی توانید نقش مدیریت را از خود حذف کنید.',
        'added_role'              => 'نقش {role} ایجاد شد.',
        'deleted_role'            => '{role} حذف شد.',
        'cant_delete_role'        => 'نقش {role} نمی تواند حذف شود.',
        'confirm_delete_role_msg' => 'تمام کاربرهای نقش <b>{role}</b> به کاربر عادی تبدیل می شوند.',
        'all_permission_updated'  => 'مجوز ها بروز شد: {group}',
        'permission_updated'      => 'مجوز بروز شد: {operation} {group}',
        'role_assigned'           => 'نقش {role} به کاربر {username} اضافه شد.',
        'role_removed'            => 'نقش {role} از کاربر {username} حذف شد.',
    ],
];
