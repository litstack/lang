<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => 'دەبێت :attribute قبوڵ بکرێت.',
    'active_url'      => ':attribute ناونیشانێکی دروست نیە.',
    'after'           => 'دەبێت :attribute دەبێت بەروارێک بێت دوای :date.',
    'after_or_equal'  => 'دەبێت :attribute دەبێت بەروارێک بێت لە دوای یان یەکسان بە... :date.',
    'alpha'           => 'دەکرێت :attribute تەنها لە پیت پێکبێت.',
    'alpha_dash'      => 'دەکرێت :attribute لە پیت, ژمارە, داشەکان و بنهێڵ پێکبێت.',
    'alpha_num'       => 'دەکرێت :attribute تەنها لە پیت و ژمارە پێکبێت',
    'array'           => 'دەبێت :attribute ڕیزێک بێت.',
    'before'          => 'دەبێت :attribute بەروارێک بێت پێش :date.',
    'before_or_equal' => 'دەبێت :attribute دەبێت بەروارێک پێش یان یەکسان بێت بە :date.',
    'between'         => [
        'numeric' => 'دەبێت :attribute لەنێوان :min و :max بێت.',
        'file'    => 'دەبێت :attribute لەنێوان :min و :max کیلۆبایت بێت.',
        'string'  => 'دەبێت :attribute لەنێوان :min و :max نوسە بێت.',
        'array'   => 'دەبێت :attribute لەنێوان :min و :max دانە بێت.',
    ],
    'boolean'        => 'دەبێت خانەی :attribute ڕاست یان هەڵە بێت.',
    'confirmed'      => 'پشتڕاستکردنەوەی :attribute لە یەك ناچن.',
    'date'           => ':attribute بەروارێکی دروست نییە.',
    'date_equals'    => 'دەبێت :attribute بەروارێک بێت کە یەکسان بێت بە :date.',
    'date_format'    => ':attribute لەگەڵ فۆرماتی  :format ناگونجێت.',
    'different'      => 'دەبێت :attribute و :other جیاوازبن.',
    'digits'         => 'دەبێت :attribute :digits ژمارە بێت.',
    'digits_between' => 'دەبێت :attribute لەنێوان :min و :max ژمارە بێت.',
    'dimensions'     => ':attribute ڕەهەندی وێنەی نادروستی هەیە.',
    'distinct'       => 'خانەی :attribute بەهایەکی دووبارەی هەیە.',
    'email'          => 'دەبێت :attribute ناونیشانی ئیمەیڵی دروست بێت.',
    'ends_with'      => 'دەبێت :attribute بە یەکێک لەمانەی خوارەوە کۆتایی پێبێت: :values.',
    'exists'         => ':attribute کە هەڵبژێردراوە دروست نیە.',
    'file'           => 'دەبێت :attribute پەڕگەیەک بێت.',
    'filled'         => 'خانەی :attribute بەهای هەبێت.',
    'gt'             => [
        'numeric' => 'دەبێت :attribute گەرەتر بێت لە :value.',
        'file'    => 'دەبێت :attribute گەورەتر بێت لە :value کیلۆبایت.',
        'string'  => 'دەبێت :attribute گەورەتر بێت لە  :value نوسە.',
        'array'   => 'دەبێت :attribute زیاتر لە :value دانەی هەبێت.',
    ],
    'gte' => [
        'numeric' => 'دەبێت :attribute گەورەتر بێت یان یەکسان بێت بە :value.',
        'file'    => 'دەبێت :attribute گەورەتر بێت یان یەکسان بێت بە  :value کیلۆبایت.',
        'string'  => 'دەبێت :attribute گەورەتر بێت یان یەکسان بێت بە  :value نوسە.',
        'array'   => 'دەبێت :attribute :value دانە یان زیاتری هەبێت.',
    ],
    'image'    => 'دەبێت :attribute وێنەیەک بێت.',
    'in'       => ':attribute ی هەڵبژێراو نادروستە.',
    'in_array' => 'خانەی :attribute بوونی نیە لە :other.',
    'integer'  => 'دەبێت :attribute ژمارەیەکی تەواو بێت.',
    'ip'       => 'دەبێت :attribute ناونیشانی IP بێت.',
    'ipv4'     => 'دەبێت :attribute must be a valid IPv4 address.',
    'ipv6'     => 'دەبێت :attribute must be a valid IPv6 address.',
    'json'     => 'دەبێت :attribute must be a valid JSON string.',
    'lt'       => [
        'numeric' => 'دەبێت :attribute must be less than :value.',
        'file'    => 'دەبێت :attribute must be less than :value kilobytes.',
        'string'  => 'دەبێت :attribute must be less than :value characters.',
        'array'   => 'دەبێت :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'دەبێت :attribute کەمتر یان یەکسان بێت بە :value.',
        'file'    => 'دەبێت :attribute کەمتر یان یەکسان بێت بە :value کیلۆبایت.',
        'string'  => 'دەبێت :attribute کەمتر یان یەکسان بێت بە :value نوسە.',
        'array'   => 'دەبێت :attribute کەمتر یان یەکسان بێت بە :value دانە.',
    ],
    'max' => [
        'numeric' => 'لەوانەیە :attribute گەورەتر نەبێت لە :max.',
        'file'    => 'لەوانەیە :attribute گەورەتر نەبێت لە :max کیلۆبایت.',
        'string'  => 'لەوانەیە :attribute گەورەتر نەبێت لە :max نوسە.',
        'array'   => 'لەوانەیە :attribute گەورەتر نەبێت لە :max دانە.',
    ],
    'mimes'     => 'دەبێت :attribute پەڕگەیەک بێت لە جۆری: :values.',
    'mimetypes' => 'دەبێت :attribute پەڕگەیەک بێت لە جۆری: :values.',
    'min'       => [
        'numeric' => 'دەبێت :attribute لانی کەم :min بێت.',
        'file'    => 'دەبێت :attribute لانی کەم :min کیلۆبایت بێت.',
        'string'  => 'دەبێت :attribute لانی کەم :min نوسە بێت.',
        'array'   => 'دەبێت :attribute لانی کەم :min دانە بێت.',
    ],
    'not_in'               => 'هەڵبژێردراوی :attribute نادروستە.',
    'not_regex'            => 'فۆرماتی :attribute نادروستە.',
    'numeric'              => 'دەبێت :attribute ژمارە بێت.',
    'password'             => 'تێپەڕەوشە هەڵەیە.',
    'present'              => 'خانەی :attribute دەبێت ئامادە بێت.',
    'regex'                => 'فۆرماتی :attribute نادروستە.',
    'required'             => 'خانەی :attribute داواکراوە.',
    'required_if'          => 'خانەی :attribute داواکراوە کاتێک :other بریتییە لە :value.',
    'required_unless'      => 'خانەی :attribute داواکراوە مەگە :other لەناو :values بێت.',
    'required_with'        => 'خانەی :attribute داواکراوە کاتێک :values ئامادەیە.',
    'required_with_all'    => 'خانەی :attribute داواکراوە کاتێک :values ئامادە نین.',
    'required_without'     => 'خانەی :attribute داواکراوە کاتێک :values ئامادە نیە.',
    'required_without_all' => 'خانەی :attribute پێویستە کاتێک هیچ کام لە :values ئامادە نین.',
    'same'                 => ':attribute و :other وەک یەک بن.',
    'size'                 => [
        'numeric' => 'دەبێت :attribute :size بێت.',
        'file'    => 'دەبێت :attribute :size کیلۆبایت بێت.',
        'string'  => 'دەبێت :attribute :size نوسە بێت.',
        'array'   => 'دەبێت :attribute لە :size دانە پێکبێت.',
    ],
    'starts_with' => 'دەبێت :attribute بە یەکێک لەمانەی خوارەوە دەست پێبکات: :values.',
    'string'      => 'دەبێت :attribute نوسین بێت.',
    'timezone'    => 'دەبێت :attribute ناوچەیەکی دروستی هەبێت.',
    'unique'      => ':attribute پێشتر تۆمارکراوە.',
    'uploaded'    => ':attribute شکستی هێنا لە بارکردن.',
    'url'         => 'فۆرماتی :attribute دروست نیە.',
    'uuid'        => 'دەبێت :attribute ناسێنەرێکی ناوازەی گشتگیر(UUID)ی هەبێت.',

    'incorrect_password' => 'تێپەڕەوشەی ئێستا هەڵەیە.',

];
