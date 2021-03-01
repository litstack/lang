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

    'role_name'  => 'nom du rôle',
    'operations' => [
        'lit-user-roles' => 'Rôles d\'utilisateur',
        'lit-users'      => 'Utilisateurs',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Vous ne pouvez pas supprimer le rôle d’administrateur de votre compte.',
        'added_role'              => 'Créé le rôle {role}.',
        'deleted_role'            => 'Rôle supprimé {role}.',
        'cant_delete_role'        => 'Le rôle {role} ne peut pas être supprimé.',
        'confirm_delete_role_msg' => 'Tous les utilisateurs du rôle <b>{role}</b> sont affectés au rôle <b>User</b>.',
        'all_permission_updated'  => 'Permissions mises à jour : {group}',
        'permission_updated'      => 'Permission mise à jour : {operation} {group}',
        'role_assigned'           => '{username} s’est vu attribuer le rôle {role}.',
        'role_removed'            => 'Le rôle {role} a été supprimé de {username}.',
    ],
];
