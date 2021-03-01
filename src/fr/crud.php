<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CRUD Language Lines
    |--------------------------------------------------------------------------
    |
    | The crud translations include all translations related to the litstack
    | crud system. This includes fields and other parts of the crud pages.
    |
    */

    'sort_new_to_old'  => 'Récent en premier',
    'sort_old_to_new'  => 'Ancien en premier',
    'preview'          => 'Aperçu',
    'of'               => 'de',
    'n_items_selected' => ':count élément sélectionné | :count éléments sélectionnés',

    'messages' => [
        'not_created'   => ':model doit être créé afin d’ajouter un•e <i>:relation</i>',
        'deleted_items' => 'Suppression de :count élément.|Suppression de :count éléments.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'agrandir',
            'expand_all'   => 'agrandir tout',
            'collapse_all' => 'réduire tout',
            'messages'     => [
                'new_block' => 'Ajout d\'un nouveau bloc :type',
            ],
        ],
        'relation' => [
            'goto'     => 'Aller à la relation',
            'unlink'   => 'Dissocier la relation',
            'edit'     => 'Modifier la relation',
            'messages' => [
                'relation_linked'   => '{relation} lié•e avec succès.',
                'relation_unlinked' => 'Relation dissociée.',
                'confirm_unlink'    => 'Veuillez confirmer que vous souhaitez dissocier l\'élément.',
                'max_items_reached' => 'Un maximum de :count éléments peuvent être sélectionnés.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'ouvrir dans une nouvelle fenêtre',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'La liste peut être imbriquée à un maximum de :count niveaux.',
                'confirm_delete'      => 'Doit-on vraiment supprimer :item éléments?',
                'confirm_delete_info' => 'Si vous supprimez cet élément, vous supprimez également tous les éléments enfants en dessous.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'Fichier téléchargé avec succès.',
                'image_alt_hint'   => 'Le texte alternatif (texte qui décrit ce support) améliore l’accessibilité et l’expérience utilisateur pour les personnes qui ne peuvent pas voir les images sur les pages Web, y compris les utilisateurs qui utilisent des applications de lecture d’écran ou qui ont des connexions à faible bande passante.',
                'image_title_hint' => 'Le titre apparaît dans le navigateur sous forme d’infobulle, si vous déplacez le pointeur de la souris sur l’image.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Phrase facile à comprendre. Donne une idée du contenu de la page. Maximum :width de large.',
        'keywords_hint'    => 'Les mots-clés les plus importants du contenu de la page. (Quelques) mots séparés par des virgules.',
        'description_hint' => 'Résumé court mais significatif de la page. Contient les mots clés les plus importants du contenu de la page.',
    ],
];
