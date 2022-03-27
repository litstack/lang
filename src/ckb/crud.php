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

    'sort_new_to_old'  => 'نوێ یەکەمجار',
    'sort_old_to_new'  => 'کۆن یەکەمجار',
    'preview'          => 'پێشبینین',
    'of'               => '؛ە',
    'n_items_selected' => ':count بڕگە هەڵبژێردراوە | :count بڕگە هەڵبژێردراوە',

    'messages' => [
        'not_created'   => ':model has to be created in order to add <i>:relation</i>.',
        'deleted_items' => 'Deleted :count item.|Deleted :count items.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'فراوانکردن',
            'expand_all'   => 'فراوانکردنی هەموو',
            'collapse_all' => 'collapse all',
            'messages'     => [
                'new_block' => 'زیادکردنی :type بلۆکی نوێ',

            ],
        ],
        'relation' => [
            'goto'     => 'بڕۆ بۆ پەیوەندیدار',
            'unlink'   => 'پەیوەستنەکردنی پەیوەندیدار',
            'edit'     => 'دەستکاری پەیوەندیدار',
            'messages' => [
                'relation_linked'   => '{relation} successfully linked.',
                'relation_unlinked' => 'Relation unlinked.',
                'confirm_unlink'    => 'Please confirm that you wish to unlink the item.',
                'max_items_reached' => 'A maximum of :count items can be selected.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'open in new window',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'The list can be nested a maximum of :count levels.',
                'confirm_delete'      => 'Should :item item really be deleted?',
                'confirm_delete_info' => 'If you remove this item, you also remove all child items below it.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'File successfully uploaded.',
                'image_alt_hint'   => 'Alternative text (text that describes this medium) improves accessibility and user experience for people who cannot see images on Web pages, including users who use screen reader applications or have low bandwidth connections.',
                'image_title_hint' => 'The title appears in the browser as a tooltip, if you move the mouse pointer over the image.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Easily understandable meaningful sentence. Gives an idea what the page content is about. Maximum :width wide.',
        'keywords_hint'    => 'The most important keywords of the page content. Single (few) words separated by commas.',
        'description_hint' => 'Short but meaningful summary of the page. Contains the most important keywords of the page content.',
    ],
];
