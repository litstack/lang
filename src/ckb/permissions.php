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
        'cant_remove_admin_role'  => 'ناتوانیت ڕۆڵی بەڕێوەبەر لە هەژمارەکەت بسڕیتەوە.',
        'added_role'              => 'ڕۆڵی {role} زیادکرا.',
        'deleted_role'            => 'ڕۆڵی {role} سڕایەوە.',
        'cant_delete_role'        => 'ڕۆڵی {role} ناتوانرێت بسڕدرێتەوە.',
        'confirm_delete_role_msg' => 'هەموو بەکارهێنەرەکانی ڕۆڵی <b>{role}</b> بۆ ڕۆڵی <b>بەکارهێنەر</b> دیاریدەکرێن.',
        'all_permission_updated'  => 'ڕێگەپێدانە نوێکراوەکان: {group}',
        'permission_updated'      => 'ڕێگەپێدانی نوێکراوە: {operation} {group}',
        'role_assigned'           => '{username} ڕۆڵی {role} بۆ دیاریکرا.',
        'role_removed'            => 'ڕۆڵی {role} سڕایەوە لە {username}.',
    ],
];
