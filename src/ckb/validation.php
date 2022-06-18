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
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => 'The :attribute must be an image.',
    'in'       => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer'  => 'The :attribute must be an integer.',
    'ip'       => 'The :attribute must be a valid IP address.',
    'ipv4'     => 'The :attribute must be a valid IPv4 address.',
    'ipv6'     => 'The :attribute must be a valid IPv6 address.',
    'json'     => 'The :attribute must be a valid JSON string.',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
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
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
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
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => 'The :attribute must be a string.',
    'timezone'    => 'The :attribute must be a valid zone.',
    'unique'      => 'The :attribute has already been taken.',
    'uploaded'    => 'The :attribute failed to upload.',
    'url'         => 'The :attribute format is invalid.',
    'uuid'        => 'The :attribute must be a valid UUID.',

    'incorrect_password' => 'The current password is incorrect.',

];
