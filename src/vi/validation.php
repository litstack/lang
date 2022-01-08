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

    'accepted'        => 'Trường :attribute phải được chấp nhận.',
    'active_url'      => 'Trường :attribute không phải là URL hợp lệ.',
    'after'           => 'Trường :attribute phải sau ngày :date.',
    'after_or_equal'  => 'Trường :attribute phải sau hoặc bằng ngày :date.',
    'alpha'           => 'Trường :attribute chỉ có thể chứa chữ.',
    'alpha_dash'      => 'Trường :attribute chỉ có thể chứa chữ, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num'       => 'Trường :attribute chỉ có thể chứa chữ và số.',
    'array'           => 'Trường :attribute phải là mảng.',
    'before'          => 'Trường :attribute phải trước ngày :date.',
    'before_or_equal' => 'Trường :attribute phải trước hoặc bằng ngày :date.',
    'between'         => [
        'numeric' => 'Trường :attribute phải ở giữa :min và :max.',
        'file'    => 'Trường :attribute phải ở giữa :min và :max KB.',
        'string'  => 'Trường :attribute phải ở giữa :min và :max kí tự.',
        'array'   => 'Trường :attribute phải có từ :min và :max phần tử.',
    ],
    'boolean'        => 'Trường :attribute chỉ có thể là true hoặc false.',
    'confirmed'      => 'Trường :attribute xác nhận chưa trùng khớp.',
    'date'           => 'Trường :attribute không phải ngày hợp lệ.',
    'date_equals'    => 'Trường :attribute phải là ngày :date.',
    'date_format'    => 'Trường :attribute chưa trùng khớp định dạng :format.',
    'different'      => 'Trường :attribute và :other phải khác nhau.',
    'digits'         => 'Trường :attribute phải có :digits chữ số.',
    'digits_between' => 'Trường :attribute phải ở giữa :min và :max chữ số.',
    'dimensions'     => 'Trường :attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'       => 'Trường :attribute có giá trị bị trùng lặp.',
    'email'          => 'Trường :attribute phải là email hợp lệ.',
    'ends_with'      => 'Trường :attribute phải kết thúc với một trong các giá trị sau: :values.',
    'exists'         => 'Trường :attribute đã chọn không hợp lệ.',
    'file'           => 'Trường :attribute phải là tệp.',
    'filled'         => 'Trường :attribute bắt buộc nhập.',
    'gt'             => [
        'numeric' => 'Trường :attribute phải lớn hơn :value.',
        'file'    => 'Trường :attribute phải lớn hơn :value KB.',
        'string'  => 'Trường :attribute phải lớn hơn :value kí tự.',
        'array'   => 'Trường :attribute phải có nhiều hơn :value phần tử.',
    ],
    'gte' => [
        'numeric' => 'Trường :attribute phải lớn hơn hoặc bằng :value.',
        'file'    => 'Trường :attribute phải lớn hơn hoặc bằng :value KB.',
        'string'  => 'Trường :attribute phải lớn hơn hoặc bằng :value kí tự.',
        'array'   => 'Trường :attribute phải có nhiều hơn hoặc bằng :value phần tử.',
    ],
    'image'    => 'Trường :attribute phải là hình ảnh.',
    'in'       => 'Trường :attribute đã chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không nằm trong mảng :other.',
    'integer'  => 'Trường :attribute phải là một số nguyên.',
    'ip'       => 'Trường :attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4'     => 'Trường :attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6'     => 'Trường :attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json'     => 'Trường :attribute phải là một chuỗi JSON hợp lệ.',
    'lt'       => [
        'numeric' => 'Trường :attribute phải nhỏ hơn :value.',
        'file'    => 'Trường :attribute phải nhỏ hơn :value KB.',
        'string'  => 'Trường :attribute phải nhỏ hơn :value kí tự.',
        'array'   => 'Trường :attribute phải có ít hơn :value phần tử.',
    ],
    'lte' => [
        'numeric' => 'Trường :attribute phải nhỏ hơn hoặc bằng :value.',
        'file'    => 'Trường :attribute phải nhỏ hơn hoặc bằng :value KB.',
        'string'  => 'Trường :attribute phải nhỏ hơn hoặc bằng :value kí tự.',
        'array'   => 'Trường :attribute phải có ít hơn hoặc bằng :value phần tử.',
    ],
    'max' => [
        'numeric' => 'Trường :attribute không thể lớn hơn :max.',
        'file'    => 'Trường :attribute không thể lớn hơn :max KB.',
        'string'  => 'Trường :attribute không thể lớn hơn :max kí tự.',
        'array'   => 'Trường :attribute không thể có nhiều hơn :max phần tử.',
    ],
    'mimes'     => 'Trường :attribute phải là tệp kiểu: :values.',
    'mimetypes' => 'Trường :attribute phải là tệp kiểu: :values.',
    'min'       => [
        'numeric' => 'Trường :attribute không thể nhỏ hơn :min.',
        'file'    => 'Trường :attribute không thể nhỏ hơn :min KB.',
        'string'  => 'Trường :attribute không thể nhỏ hơn :min kí tự.',
        'array'   => 'Trường :attribute không thể có ít hơn :min phần tử.',
    ],
    'not_in'               => 'Trường :attribute đã chọn không hợp lệ.',
    'not_regex'            => 'Trường :attribute định dạng không hợp lệ.',
    'numeric'              => 'Trường :attribute phải là một số.',
    'password'             => 'Mật khẩu không đúng.',
    'present'              => 'Trường :attribute phải có giá trị.',
    'regex'                => 'Trường :attribute định dạng không hợp lệ.',
    'required'             => 'Trường :attribute là bắt buộc.',
    'required_if'          => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless'      => 'Trường :attribute là bắt buộc trừ khi :other là :values.',
    'required_with'        => 'Trường :attribute là bắt buộc khi :values có giá trị.',
    'required_with_all'    => 'Trường :attribute là bắt buộc khi :values đều có giá trị.',
    'required_without'     => 'Trường :attribute là bắt buộc khi :values không có giá trị.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi :values đều không có giá trị.',
    'same'                 => 'Trường :attribute và :other chưa trùng khớp.',
    'size'                 => [
        'numeric' => 'Trường :attribute phải có độ dài là :size.',
        'file'    => 'Trường :attribute phải có kích thước là :size KB.',
        'string'  => 'Trường :attribute phải có độ dài là :size kí tự.',
        'array'   => 'Trường :attribute phải chứa :size phần tử.',
    ],
    'starts_with' => 'Trường :attribute phải bắt đầu với một trong các giá trị sau: :values.',
    'string'      => 'Trường :attribute phải là chuỗi.',
    'timezone'    => 'Trường :attribute phải là múi giờ hợp lệ.',
    'unique'      => 'Trường :attribute đã tồn tại.',
    'uploaded'    => 'Trường :attribute tải lên thất bại.',
    'url'         => 'Trường :attribute định dạng URL không hợp lệ.',
    'uuid'        => 'Trường :attribute phải là một UUID hợp lệ.',

    'incorrect_password' => 'Mật khẩu hiện tại không đúng.',

];
