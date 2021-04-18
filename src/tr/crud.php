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

    'sort_new_to_old'  => 'Önce yeniler',
    'sort_old_to_new'  => 'Önce eskiler',
    'preview'          => 'Önizle',
    'of'               => 'bunun',
    'n_items_selected' => ':count adet içerik seçildi | :count ader içerik seçildi',

    'messages' => [
        'not_created'   => '<i>:relation</i> eklemeden önce :model oluşturun.',
        'deleted_items' => ':count adet içerik silindi. | :count adet içerik silindi.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'genişlet',
            'expand_all'   => 'tümünü genişler',
            'collapse_all' => 'kapat',
            'messages'     => [
                'new_block' => 'yeni :type bloğu ekle',

            ],
        ],
        'relation' => [
            'goto'     => 'İlişkiye git',
            'unlink'   => 'İlişkiyi kaldır',
            'edit'     => 'İlişkiyi düzenle',
            'messages' => [
                'relation_linked'   => '{relation} başarıyla eklendi.',
                'relation_unlinked' => 'İlişki kaldırıldı.',
                'confirm_unlink'    => 'Lütfen öğenin bağlantısını kaldırmak istediğinizi onaylayın.',
                'max_items_reached' => 'çok fazla içerik seçtiniz. :count',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'yeni sekmede aç',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'En fazla derinliğe ulaştınız',
                'confirm_delete'      => 'Silmek istediğinize emin misiniz?',
                'confirm_delete_info' => 'Bu öğeyi kaldırırsanız, altındaki tüm alt öğeleri de kaldırmış olursunuz.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'Dosya başarıyla yüklendi.',
                'image_alt_hint'   => 'Alternatif metin (bu ortamı tanımlayan metin), ekran okuyucu uygulamaları kullanan veya bant genişliği düşük bağlantıları olan kullanıcılar da dahil olmak üzere Web sayfalarındaki görüntüleri göremeyen kişiler için erişilebilirliği ve kullanıcı deneyimini geliştirir.',
                'image_title_hint' => 'Fare işaretçisini görüntünün üzerine getirirseniz, başlık tarayıcıda bir araç ipucu olarak görünür.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Kolay anlaşılır anlamlı cümle. Sayfa içeriğinin ne hakkında olduğu konusunda fikir verir. Maksimum :width geniş.',
        'keywords_hint'    => 'Sayfa içeriğinin en önemli anahtar kelimeleri. Virgülle ayrılmış tek (birkaç) kelime.',
        'description_hint' => 'Sayfanın kısa ama anlamlı özeti. Sayfa içeriğinin en önemli anahtar kelimelerini içerir.',
    ],
];
