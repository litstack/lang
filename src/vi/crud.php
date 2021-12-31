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

    'sort_new_to_old'  => 'Mới nhất',
    'sort_old_to_new'  => 'Cũ nhất',
    'preview'          => 'Xem trước',
    'of'               => 'của',
    'n_items_selected' => ':count mục được chọn | :count mục được chọn',

    'messages' => [
        'not_created'   => ':model phải được tạo trước khi tạo quan hệ <i>:relation</i>.',
        'deleted_items' => 'Đã xóa :count mục.|Đã xóa :count mục.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'mở rộng',
            'expand_all'   => 'mở rộng hết',
            'collapse_all' => 'thu hẹp hết',
            'messages'     => [
                'new_block' => 'Đã tạo khối :type mới',

            ],
        ],
        'relation' => [
            'goto'     => 'Xem mối quan hệ',
            'unlink'   => 'Gỡ mối quan hệ',
            'edit'     => 'Sửa mối quan hệ',
            'messages' => [
                'relation_linked'   => '{relation} đã liên kết thành công.',
                'relation_unlinked' => 'Đã gỡ mối quan hệ.',
                'confirm_unlink'    => 'Hãy chắc chắn rằng bạn muốn gỡ chúng.',
                'max_items_reached' => 'Chỉ có thể chọn tối đa :count mục.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'mở cửa sổ mới',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'Danh sách có thể lồng tối đa :count cấp.',
                'confirm_delete'      => 'Bạn thực sự muốn xóa :item không?',
                'confirm_delete_info' => 'Nếu bạn xóa nó, những mục phía dưới cũng bị xóa luôn đấy.',
            ],
        ],
        'media' => [
            'messages' => [
                'image_uploaded'   => 'Tệp đã tải lên thành công.',
                'image_alt_hint'   => 'Văn bản thay thế (văn bản mô tả) giúp cải thiện khả năng truy cập và trải nghiệm người dùng khi họ không thể xem hình ảnh, kể cả những người dùng đang dùng thiết bị chỉ đọc hoặc kết nối mạng yếu.',
                'image_title_hint' => 'Tiêu đề xuất hiện dạng chú thích khi người dùng rê con trỏ vào nó.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Câu ngắn ngọn, dễ hiểu. Mang ý tưởng về nội dung của trang. Độ rộng tối đa :width.',
        'keywords_hint'    => 'Những từ khóa quan trọng của trang. Một hoặc nhiều từ cách nhau bởi dấu phẩy.',
        'description_hint' => 'Mô tả ngắn gọn nhưng phải bao quát và phải chứa những từ khóa quan trọng của trang.',
    ],
];
