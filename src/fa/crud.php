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

    'sort_new_to_old'  => 'جدید ترین اول',
    'sort_old_to_new'  => 'قدیمی ترین اول',
    'preview'          => 'پیش نمایش',
    'of'               => 'از',
    'n_items_selected' => ':count انتخاب شد | :count انتخاب شد',

    'messages' => [
        'not_created'   => ':model جهت اضافه کرد رابطه <i>:relation</i> ایجاد شد.',
        'deleted_items' => ':count حذف شد.|:count حذف شد.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'باز کردن',
            'expand_all'   => 'بازکردن همه',
            'collapse_all' => 'بستن همه',
            'messages'     => [
                'new_block' => 'یک بلاک از نوع :type اضافه شد',

            ],
        ],
        'relation' => [
            'goto'     => 'برو به ارتباطات',
            'unlink'   => 'حذف ارتباط',
            'edit'     => 'ویرایش ارتباط',
            'messages' => [
                'relation_linked'   => 'ارتباط {relation} ایجاد شد.',
                'relation_unlinked' => 'ارتباط حذف شد.',
                'confirm_unlink'    => 'آیا از حذف ارتباط مطمئن هستید؟',
                'max_items_reached' => 'حداکثر :count آیتم قابل انتخاب است.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'بازکردن در پنجره جدید',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'حداکثر تعداد سطح بندی :count می باشد.',
                'confirm_delete'      => 'آیا :item آیتم باید حذف شود؟',
                'confirm_delete_info' => 'با حذف آیتم شما تمام زیر مجموعه ها را حذف می کنید.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'فایل با موفقیت بارگذاری شد.',
                'image_alt_hint'   => 'در زمان هایی که عکس لود نمی شود یا از Screen Reader استفاده می شود این متن نمایش داده می شود.',
                'image_title_hint' => 'به عنوان یک توضیح مختصر زمانی که موس روی عکس است نمایش داده می شود.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'یک جمله با معنا برای فهم بهتر عنوان است و حداکثر طول آن :width می باشد.',
        'keywords_hint'    => 'کلمات کلید صفحه که مهم هستند و باید با کاما جدا شوند.',
        'description_hint' => 'توضیحات مختصر و مفید صفحه می باشد.',
    ],
];
