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
        'deleted_items' => 'Usnunięto :count element.|Liczba usuniętych elementów: :count.',
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
            'goto'     => 'Idź do relacji',
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
        'media' => [
            'messages' => [
                'image_uploaded'   => 'Plik pomyślnie przesłany.',
                'image_alt_hint'   => 'Tekst alternatywny (opisujący to medium) poprawia dostępność i pomaga użytkownikom, którzy nie mogą widzień obrazów na stronach internetowych, wliczając użytkowników używających czytników ekranczytników lub posiadających słabe łącze internetowe.',
                'image_title_hint' => 'Tytuł pojawia się w przeglądarce jako podpowiedź, jeśli przesuniesz wskaźnik myszy nad obraz.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Łatwo zrozumiałe, znaczące zdanie. Daje wyobrażenie, o czym jest treść strony. Maksymalna liczba zanków: :width.',
        'keywords_hint'    => 'Najważniejsze słowa kluczowe zawartości strony. Pojedyncze (kilka) słów oddzielone przecinkami.',
        'description_hint' => 'Krótkie, ale wymowne podsumowanie strony. Zawiera najważniejsze słowa kluczowe zawartości strony.',
    ],
];
