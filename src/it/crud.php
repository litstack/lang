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

    'sort_new_to_old'  => 'Nuovi prima',
    'sort_old_to_new'  => 'Vecchi prima',
    'preview'          => 'Anteprima',
    'of'               => 'di',
    'n_items_selected' => ':count elemento selezionato | :count elementi selezionati',

    'messages' => [
        'not_created'   => ':model è stato creato per aggiungere <i>:relation</i>.',
        'deleted_items' => 'Elemento :count elmiinato.|Elementi :count elminati.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'espandi',
            'expand_all'   => 'espandi tutto',
            'collapse_all' => 'espandi tutto',
            'messages'     => [
                'new_block' => 'Nuovo blocco :type aggiunto ',

            ],
        ],
        'relation' => [
            'goto'     => 'Vai alla relazione',
            'unlink'   => 'Scollega relazione',
            'edit'     => 'Modifica relazione',
            'messages' => [
                'relation_linked'   => '{relation} collegata correttamente.',
                'relation_unlinked' => 'Relazione scollegata.',
                'confirm_unlink'    => 'Per favore conferma che vuoi scollegare l\'elemento.',
                'max_items_reached' => 'Massimo :count elementi possono essere selezionati.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'apri in una nuova finestra',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'La lista può avere :count livelli annidati.',
                'confirm_delete'      => 'Vuoi veramente cancellare l\'elemento :item ?',
                'confirm_delete_info' => 'Se rimuovi questo elemento, rimuovi anche tutti gli elementi secondari sottostanti.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'File caricato correttamente.',
                'image_alt_hint'   => 'Il testo alternativo (testo che descrive questo mezzo) migliora l\'accessibilità e l\'esperienza utente per le persone che non possono vedere le immagini sulle pagine Web, inclusi gli utenti che utilizzano applicazioni di lettura dello schermo o hanno connessioni a larghezza di banda ridotta.',
                'image_title_hint' => 'Il titolo viene visualizzato nel browser come una descrizione comando, se sposti il ​​puntatore del mouse sull\'immagine.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Frase significativa facilmente comprensibile. Dà un\'idea di cosa tratta il contenuto della pagina. Larghezza massima :width.',
        'keywords_hint'    => 'Le parole chiave più importanti del contenuto della pagina. Singole (poche) parole separate da virgole.',
        'description_hint' => 'Sintesi breve ma significativa della pagina. Contiene le parole chiave più importanti del contenuto della pagina.',
    ],
];
