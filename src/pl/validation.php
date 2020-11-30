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

    'accepted'             => 'Pole :attribute musi zostaæ zaakceptowane.',
    'active_url'           => 'Pole :attribute jest nieprawid³owym adresem URL.',
    'after'                => 'Pole :attribute musi byæ dat¹ póŸniejsz¹ od :date.',
    'after_or_equal'       => 'Pole :attribute musi byæ dat¹ nie wczeœniejsz¹ ni¿ :date.',
    'alpha'                => 'Pole :attribute mo¿e zawieraæ jedynie litery.',
    'alpha_dash'           => 'Pole :attribute mo¿e zawieraæ jedynie litery, cyfry i myœlniki.',
    'alpha_num'            => 'Pole :attribute mo¿e zawieraæ jedynie litery i cyfry.',
    'array'                => 'Pole :attribute musi byæ tablic¹.',
    'before'               => 'Pole :attribute musi byæ dat¹ wczeœniejsz¹ od :date.',
    'before_or_equal'      => 'Pole :attribute musi byæ dat¹ nie póŸniejsz¹ ni¿ :date.',
    'between'              => [
        'numeric' => 'Pole :attribute musi zawieraæ siê w granicach :min - :max.',
        'file'    => 'Pole :attribute musi zawieraæ siê w granicach :min - :max kilobajtów.',
        'string'  => 'Pole :attribute musi zawieraæ siê w granicach :min - :max znaków.',
        'array'   => 'Pole :attribute musi sk³adaæ siê z :min - :max elementów.',
    ],
    'boolean'              => 'Pole :attribute musi mieæ wartoœæ logiczn¹ prawda albo fa³sz.',
    'confirmed'            => 'Potwierdzenie pola :attribute nie zgadza siê.',
    'date'                 => 'Pole :attribute nie jest prawid³ow¹ dat¹.',
    'date_equals'          => 'Pole :attribute musi byæ dat¹ równ¹ :date.',
    'date_format'          => 'Pole :attribute nie jest w formacie :format.',
    'different'            => 'Pole :attribute oraz :other musz¹ siê ró¿niæ.',
    'digits'               => 'Pole :attribute musi sk³adaæ siê z :digits cyfr.',
    'digits_between'       => 'Pole :attribute musi mieæ od :min do :max cyfr.',
    'dimensions'           => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct'             => 'Pole :attribute ma zduplikowane wartoœci.',
    'email'                => 'Pole :attribute nie jest poprawnym adresem e-mail.',
    'ends_with'            => 'Pole :attribute musi koñczyæ siê jedn¹ z nastêpuj¹cych wartoœci: :values.',
    'exists'               => 'Zaznaczone pole :attribute jest nieprawid³owe.',
    'file'                 => 'Pole :attribute musi byæ plikiem.',
    'filled'               => 'Pole :attribute nie mo¿e byæ puste.',
    'gt'                   => [
        'numeric' => 'Pole :attribute musi byæ wiêksze ni¿ :value.',
        'file'    => 'Pole :attribute musi byæ wiêksze ni¿ :value kilobajtów.',
        'string'  => 'Pole :attribute musi byæ d³u¿sze ni¿ :value znaków.',
        'array'   => 'Pole :attribute musi mieæ wiêcej ni¿ :value elementów.',
    ],
    'gte'                  => [
        'numeric' => 'Pole :attribute musi byæ wiêksze lub równe :value.',
        'file'    => 'Pole :attribute musi byæ wiêksze lub równe :value kilobajtów.',
        'string'  => 'Pole :attribute musi byæ d³u¿sze lub równe :value znaków.',
        'array'   => 'Pole :attribute musi mieæ :value lub wiêcej elementów.',
    ],
    'image'                => 'Pole :attribute musi byæ obrazkiem.',
    'in'                   => 'Zaznaczony element :attribute jest nieprawid³owy.',
    'in_array'             => 'Pole :attribute nie znajduje siê w :other.',
    'integer'              => 'Pole :attribute musi byæ liczb¹ ca³kowit¹.',
    'ip'                   => 'Pole :attribute musi byæ prawid³owym adresem IP.',
    'ipv4'                 => 'Pole :attribute musi byæ prawid³owym adresem IPv4.',
    'ipv6'                 => 'Pole :attribute musi byæ prawid³owym adresem IPv6.',
    'json'                 => 'Pole :attribute musi byæ poprawnym ci¹giem znaków JSON.',
    'lt'                   => [
        'numeric' => 'Pole :attribute musi byæ mniejsze ni¿ :value.',
        'file'    => 'Pole :attribute musi byæ mniejsze ni¿ :value kilobajtów.',
        'string'  => 'Pole :attribute musi byæ krótsze ni¿ :value znaków.',
        'array'   => 'Pole :attribute musi mieæ mniej ni¿ :value elementów.',
    ],
    'lte'                  => [
        'numeric' => 'Pole :attribute musi byæ mniejsze lub równe :value.',
        'file'    => 'Pole :attribute musi byæ mniejsze lub równe :value kilobajtów.',
        'string'  => 'Pole :attribute musi byæ krótsze lub równe :value znaków.',
        'array'   => 'Pole :attribute musi mieæ :value lub mniej elementów.',
    ],
    'max'                  => [
        'numeric' => 'Pole :attribute nie mo¿e byæ wiêksze ni¿ :max.',
        'file'    => 'Pole :attribute nie mo¿e byæ wiêksze ni¿ :max kilobajtów.',
        'string'  => 'Pole :attribute nie mo¿e byæ d³u¿sze ni¿ :max znaków.',
        'array'   => 'Pole :attribute nie mo¿e mieæ wiêcej ni¿ :max elementów.',
    ],
    'mimes'                => 'Pole :attribute musi byæ plikiem typu :values.',
    'mimetypes'            => 'Pole :attribute musi byæ plikiem typu :values.',
    'min'                  => [
        'numeric' => 'Pole :attribute musi byæ nie mniejsze od :min.',
        'file'    => 'Pole :attribute musi mieæ przynajmniej :min kilobajtów.',
        'string'  => 'Pole :attribute musi mieæ przynajmniej :min znaków.',
        'array'   => 'Pole :attribute musi mieæ przynajmniej :min elementów.',
    ],
    'not_in'               => 'Zaznaczony :attribute jest nieprawid³owy.',
    'not_regex'            => 'Format pola :attribute jest nieprawid³owy.',
    'numeric'              => 'Pole :attribute musi byæ liczb¹.',
    'password'             => 'Has³o jest nieprawid³owe.',
    'present'              => 'Pole :attribute musi byæ obecne.',
    'regex'                => 'Format pola :attribute jest nieprawid³owy.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other ma wartoœæ :value.',
    'required_unless'      => 'Pole :attribute jest wymagane je¿eli :other nie znajduje siê w :values.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole :attribute jest wymagane gdy wszystkie :values s¹ obecne.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy ¿adne z :values nie s¹ obecne.',
    'same'                 => 'Pole :attribute i :other musz¹ byæ takie same.',
    'size'                 => [
        'numeric' => 'Pole :attribute musi mieæ :size.',
        'file'    => 'Pole :attribute musi mieæ :size kilobajtów.',
        'string'  => 'Pole :attribute musi mieæ :size znaków.',
        'array'   => 'Pole :attribute musi zawieraæ :size elementów.',
    ],
    'starts_with'          => 'Pole :attribute musi zaczynaæ siê jedn¹ z nastêpuj¹cych wartoœci: :values.',
    'string'               => 'Pole :attribute musi byæ ci¹giem znaków.',
    'timezone'             => 'Pole :attribute musi byæ prawid³ow¹ stref¹ czasow¹.',
    'unique'               => 'Taki :attribute ju¿ wystêpuje.',
    'uploaded'             => 'Nie uda³o siê wgraæ pliku :attribute.',
    'url'                  => 'Format pola :attribute jest nieprawid³owy.',
    'uuid'                 => 'Pole :attribute musi byæ poprawnym identyfikatorem UUID.',

    'incorrect_password' => 'Podane has³o jest nieprawid³owe.',

];
