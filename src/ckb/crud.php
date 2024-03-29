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
        'not_created'   => ':model دەبێت دروست بکرێت بۆ ئەوەی زیاد بکرێت <i>:relation</i>.',
        'deleted_items' => ':count دانە سڕایەوە.|:count دانە سڕایەوە.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'فراوانکردن',
            'expand_all'   => 'فراوانکردنی هەموو',
            'collapse_all' => 'نیشاندانی هەموو',
            'messages'     => [
                'new_block' => 'زیادکردنی :type بلۆکی نوێ',

            ],
        ],
        'relation' => [
            'goto'     => 'بڕۆ بۆ پەیوەندیدار',
            'unlink'   => 'پەیوەستنەکردنی پەیوەندیدار',
            'edit'     => 'دەستکاری پەیوەندیدار',
            'messages' => [
                'relation_linked'   => '{relation} بەسەرکەوتوویی پەیوەستکرا.',
                'relation_unlinked' => 'پەیوەندی پچڕێندرا،',
                'confirm_unlink'    => 'تکایە پشتڕاستی بکەرەوە کە دەتەوێت پەیوەندییەکە بپچڕێنیت.',
                'max_items_reached' => 'زۆرترین... :count دانە دەتوانرێت هەڵبژێردرێت.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'کردنەوە لە پەنجەرەیەکی نوێدا',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'دەتوانرێت لیستەکە زۆرترین هێلانە بکرێت :count ئاست.',
                'confirm_delete'      => 'دەبێت :item بەڕاستی بسڕدرێتەوە?',
                'confirm_delete_info' => 'ئەگەر ئەم بابەتە بسڕیتەوە، هەروەها هەموو پەیوەستکراوەکانی خوارەوەیش دەسڕدرێنەوە.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'پەڕگەکە بە سەرکەوتوویی بارکرا.',
                'image_alt_hint'   => 'دەقی جێگرەوە (دەقێک کە باس لەم ڕەنگاڵەیە دەکات) دەستڕاگەیشتن و ئەزموونی بەکارهێنەر باشتر دەکات بۆ ئەو کەسانەی کە ناتوانن وێنە لە لاپەڕەکانی وێبدا ببینن، لەوانە ئەو بەکارهێنەرانەی کە بەرنامەکانی خوێنەری شاشە بەکاردەهێنن یان پەیوەندی باندبه‌رینی کەمیان هەیە.',
                'image_title_hint' => 'ناونیشانەکە لە وێبگەڕەکەدا وەک ئامرازێک دەردەکەوێت، ئەگەر ئاماژەدەری ماوسەکە بەسەر وێنەکەدا بجوڵێنیت.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'ڕستەیەکی مانادار بە ئاسانی تێدەگات. بیرۆکەیەک دەدات کە ناوەڕۆکی لاپەڕەکە باسی چی دەکات. زۆرترین :width پانی.',
        'keywords_hint'    => 'گرنگترین وشە سەرەکییەکانی ناوەڕۆکی لاپەڕەکە. تاکە (چەند) وشەیەک کە بە کۆما جیا دەکرێنەوە.',
        'description_hint' => 'پوختەیەکی کورت بەڵام مانادار لە لاپەڕەکە. گرنگترین وشە سەرەکییەکانی ناوەڕۆکی لاپەڕەکە لەخۆدەگرێت.',
    ],
];
