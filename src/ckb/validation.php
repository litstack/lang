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
    'ends_with'      => 'دەبێت :attribute must end with one of the following: :values.',
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
        'numeric' => 'دەبێت :attribute must be greater than or equal :value.',
        'file'    => 'دەبێت :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'دەبێت :attribute must be greater than or equal :value characters.',
        'array'   => 'دەبێت :attribute must have :value items or more.',
    ],
    'image'    => 'دەبێت :attribute must be an image.',
    'in'       => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer'  => 'دەبێت :attribute must be an integer.',
    'ip'       => 'دەبێت :attribute must be a valid IP address.',
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
        'numeric' => 'دەبێت :attribute must be less than or equal :value.',
        'file'    => 'دەبێت :attribute must be less than or equal :value kilobytes.',
        'string'  => 'دەبێت :attribute must be less than or equal :value characters.',
        'array'   => 'دەبێت :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'     => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min'       => [
        'numeric' => 'دەبێت :attribute must be at least :min.',
        'file'    => 'دەبێت :attribute must be at least :min kilobytes.',
        'string'  => 'دەبێت :attribute must be at least :min characters.',
        'array'   => 'دەبێت :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'password'             => 'The password is incorrect.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values are present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
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
