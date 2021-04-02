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

    'role_name'  => 'nazwa uprawnienia',
    'operations' => [
        'lit-user-roles' => 'Uprawnienia użytkowników',
        'lit-users'      => 'Użytkownicy',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Nie możesz usunąć uprawnienia administracyjnego ze swojego konta.',
        'added_role'              => 'Utworzono uprawnienie {role}.',
        'deleted_role'            => 'Usunięto uprawnienie {role}.',
        'cant_delete_role'        => 'Uprawnienie {role} nie może zostać usunięte.',
        'confirm_delete_role_msg' => 'Wszyscy użytkownicy z uprawnieniem <b>{role}</b> są przypisani do uprawnienia <b>Uzytkownik</b>.',
        'all_permission_updated'  => 'Uprawnienia zaktualizowano: {group}',
        'permission_updated'      => 'Uprawnienie zaktualizowane: {operation} {group}',
        'role_assigned'           => '{username} został przypisany do uprawnienia {role}.',
        'role_removed'            => 'Uprawnienie {role} zostało usunięte użytkownikowi {username}.',
    ],
];
