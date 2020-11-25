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

    'sort_new_to_old'  => 'Najnowsze',
    'sort_old_to_new'  => 'Najstarsze',
    'preview'          => 'Podgląd',
    'of'               => 'z',
    'n_items_selected' => ':count zaznaczony | :count zaznaczonych',

    'messages' => [
        'not_created' => 'Najpierw należy zapisać aby móc dodać <i>:relation</i>.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'rozszerz',
            'expand_all'   => 'rozwiń wszystkie',
            'collapse_all' => 'zwiń wszystkie',
            'messages'     => [
                'new_block' => 'Dodano nowy blok typu: :type',

            ],
        ],
        'relation' => [
            'goto'     => 'Idź do ralcji',
            'unlink'   => 'Odłącz relację',
            'edit'     => 'Edytuj relację',
            'messages' => [
                'relation_linked'   => '{relation} dołączono.',
                'relation_unlinked' => 'Relacja odłączona.',
                'confirm_unlink'    => 'Proszę potrwierdź odłączenie relacji.',
                'max_items_reached' => 'Maksymalnie :count elemtów może być zaznaczonych.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'otwórz w nowym oknie',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'Maksymalne zagnieżdżenie wynosli :count poziomów.',
                'confirm_delete'      => 'Na pewno usunąć :item ?',
                'confirm_delete_info' => 'Jeżeli usuniesz ten element, usuniesz również elemtny do niego należące.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Easily understandable meaningful sentence. Gives an idea what the page content is about. Maximum :width wide.',
        'keywords_hint'    => 'The most important keywords of the page content. Single (few) words separated by commas.',
        'description_hint' => 'Short but meaningful summary of the page. Contains the most important keywords of the page content.',
    ],
];
