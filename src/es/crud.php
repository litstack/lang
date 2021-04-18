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

    'sort_new_to_old'  => 'Nueva primera',
    'sort_old_to_new'  => 'El antiguo primero',
    'preview'          => 'Vista previa',
    'of'               => 'Desde',
    'n_items_selected' => ':count Elemento seleccionado | :count Elementos seleccionados',
    'messages'         => [
        'not_created'   => ':model debe ser creado para poder añadir <i>:relation</i>',
        'deleted_items' => 'Se ha eliminado :count elemento.|:count El elemento ha sido eliminado.',
    ],
    'fields' => [
        'block' => [
            'expand'       => 'desplegar',
            'expand_all'   => 'Desplegar todo',
            'collapse_all' => 'Colapsar todo',
            'messages'     => [
                'new_block' => 'Nuevo bloque añadido (:type)',
            ],
        ],
        'relation' => [
            'goto'     => 'al enlace',
            'unlink'   => 'Desenlazar enlace',
            'edit'     => 'Editar enlace',
            'messages' => [
                'relation_linked'   => ':relation enlazado con éxito',
                'relation_unlinked' => 'Se ha retirado el enlace.',
                'confirm_unlink'    => 'Por favor, confirme que desea desvincularse.',
                'max_items_reached' => 'Se puede seleccionar un máximo de :count elementos.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'Abrir enlace en una nueva ventana',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'La lista se puede anidar hasta los niveles de :count',
                'confirm_delete'      => '¿Debe eliminarse realmente el elemento :item ?',
                'confirm_delete_info' => 'Si se elimina este elemento, también se eliminan todos los elementos por debajo de él.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'Archivo cargado con éxito',
                'image_alt_hint'   => 'El texto alternativo (que describe este medio) mejora la accesibilidad y la experiencia del usuario para las personas que no pueden ver las imágenes en las páginas web. Esto incluye a los usuarios que utilizan aplicaciones de lectura de pantalla o tienen una mala conexión a Internet.',
                'image_title_hint' => 'El título aparece en el navegador en forma de información sobre herramientas cuando se mueve el puntero del ratón sobre la imagen.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Una frase significativa y fácil de entender. Da una idea del contenido de la página. Máximo :width de ancho.',
        'keywords_hint'    => 'Las palabras clave más importantes del contenido de la página. Palabras sueltas (pocas) separadas por comas.',
        'description_hint' => 'Resumen breve pero significativo del contenido de la página. Contiene las palabras clave más importantes del contenido de la página.',
    ],
];
