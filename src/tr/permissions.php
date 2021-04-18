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

    'role_name'  => 'rol adı',
    'operations' => [
        'lit-user-roles' => 'Kullanıcı rolleri',
        'lit-users'      => 'Kullanıcılar',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Yönetici rolünü hesabınızdan kaldıramazsınız.',
        'added_role'              => '{role} rol oluşturuldu.',
        'deleted_role'            => '{role} rol silindi',
        'cant_delete_role'        => 'Bu rol {role} silinemez.',
        'confirm_delete_role_msg' => '<b> {role} </b> rolünün tüm kullanıcıları <b>User</b> rolüne atandı.',
        'all_permission_updated'  => 'İzinler güncellendi: {group}',
        'permission_updated'      => 'İzinler güncellendi:  {operation} {group}',
        'role_assigned'           => '{username} kullanıcısı {role} \'ne atandı',
        'role_removed'            => '{username} {role} \'nden kaldırıldı.',
    ],
];
