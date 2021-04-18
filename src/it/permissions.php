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

    'role_name'  => 'nome ruolo',
    'operations' => [
        'lit-user-roles' => 'Ruoli Utente',
        'lit-users'      => 'Utenti',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Non puoi rimuovere il ruolo di amministratore dal tuo account.',
        'added_role'              => 'Ruolo {role} creato.',
        'deleted_role'            => 'Ruolo {role} eliminato.',
        'cant_delete_role'        => 'Il ruolo  {role} non può essere eliminato.',
        'confirm_delete_role_msg' => 'Tutti gli utenti del ruolo <b>{role}</b> sono assegnati al ruolo <b>User</b>.',
        'all_permission_updated'  => 'Permissi aggiornati: {group}',
        'permission_updated'      => 'Permessi aggiornati: {operation} {group}',
        'role_assigned'           => 'A {username} è stato assegnato il ruolo {role}.',
        'role_removed'            => 'Il ruolo {role} è stato rimosso da {username}.',
    ],
];
