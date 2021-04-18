<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'        => ':attribute debe ser aceptado.',
    'active_url'      => ':attribute no es una dirección de Internet válida.',
    'after'           => ':attribute debe ser una fecha posterior a :date.',
    'after_or_equal'  => ':attribute debe ser una fecha posterior a :date o igual a :date.',
    'alpha'           => ':attribute sólo puede consistir en letras.',
    'alpha_dash'      => ':attribute sólo puede constar de letras, números, guiones y guiones bajos.',
    'alpha_num'       => ':attribute sólo puede consistir en letras y números.',
    'array'           => ':attribute debe ser un array.',
    'before'          => ':attribute debe ser una fecha anterior a la :date.',
    'before_or_equal' => ':attribute debe ser una fecha anterior a :date o igual a :date.',
    'between'         => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file'    => ':attribute debe tener un tamaño entre :min y :max de kilobytes.',
        'string'  => ':attribute debe tener una longitud entre :min y :max caracteres.',
        'array'   => ':attribute debe tener elementos entre :min y :max.',
    ],
    'boolean'        => ":attribute debe ser 'true' o 'false'.",
    'confirmed'      => ':attribute no coincide con la confirmación.',
    'date'           => ':attribute debe ser una fecha válida.',
    'date_equals'    => ':attribute una fecha debe ser igual a :date.',
    'date_format'    => ':attribute no se corresponde con el formato válido para :format.',
    'different'      => ':attribute y :other debe ser diferente.',
    'digits'         => ':attribute debe tener :digits dígitos.',
    'digits_between' => ':attribute debe tener entre los dígitos :min y :max.',
    'dimensions'     => ':attribute tiene dimensiones de imagen no válidas.',
    'distinct'       => ':attribute contiene un valor ya existente.',
    'email'          => ':attribute debe ser una dirección de correo electrónico válida.',
    'ends_with'      => ':attribute debe tener una de las siguientes terminaciones: :values',
    'exists'         => 'El valor seleccionado para :attribute no es válido.',
    'file'           => ':attribute debe ser un archivo.',
    'filled'         => ':attribute debe ser completado.',
    'gt'             => [
        'numeric' => ':attribute debe ser mayor que :value.',
        'file'    => ':attribute debe ser mayor que :value kilobytes.',
        'string'  => ':attribute debe ser mayor que los caracteres de :value.',
        'array'   => ':attribute debe tener más elementos :value.',
    ],
    'gte' => [
      'numeric' => ':attribute debe ser mayor que :value.',
      'file'    => ':attribute debe ser mayor que :value kilobytes.',
      'string'  => ':attribute debe ser mayor que los caracteres de :value.',
      'array'   => ':attribute debe tener más elementos :value.',
    ],
    'image'    => ':attribute debe ser una imagen.',
    'in'       => 'El valor seleccionado para :attribute no es válido.',
    'in_array' => 'El valor seleccionado para :attribute no aparece en :other.',
    'integer'  => ':attribute debe ser un número entero.',
    'ip'       => ':attribute debe ser una dirección IP válida.',
    'ipv4'     => ':attribute debe ser una dirección IPv4 válida.',
    'ipv6'     => ':attribute debe ser una dirección IPv6 válida.',
    'json'     => ':attribute debe ser una cadena JSON válida.',
    'lt'       => [
      'numeric' => ':attribute debe ser mayor que :value.',
      'file'    => ':attribute debe ser mayor que :value kilobytes.',
      'string'  => ':attribute debe ser mayor que los caracteres de :value.',
      'array'   => ':attribute debe tener más elementos :value.',
    ],
    'lte' => [
      'numeric' => ':attribute debe ser mayor que :value.',
      'file'    => ':attribute debe ser mayor que :value kilobytes.',
      'string'  => ':attribute debe ser mayor que los caracteres de :value.',
      'array'   => ':attribute debe tener más elementos :value.',
    ],
    'max' => [
        'numeric' => ':attribute puede ser un máximo de:max',
        'file'    => ':attribute no debe ser mayor que :max kilobytes.',
        'string'  => ':attribute puede tener un máximo de :max caracteres.',
        'array'   => ':attribute puede tener un máximo de elementos :max.',
    ],
    'mimes'     => ':attribute debe tener el tipo de archivo :values.',
    'mimetypes' => ':attribute debe tener el tipo de archivo :values.',
    'min'       => [
        'numeric' => ':attribute debe ser al menos :min.',
        'file'    => ':attribute debe tener un tamaño mínimo de :min kilobytes.',
        'string'  => ':attribute debe tener al menos :min caracteres.',
        'array'   => ':attribute debe tener al menos elementos :min.',
    ],
    'not_in'               => 'El valor seleccionado para :attribute no es válido.',
    'not_regex'            => ':attribute tiene un formato no válido.',
    'numeric'              => ':attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => ':attribute debe estar presente.',
    'regex'                => ':attribute el formato no es válido.',
    'required'             => ':attribute debe ser rellenado.',
    'required_if'          => ':attribute debe rellenarse si :other tiene el valor :value.',
    'required_unless'      => ':attribute debe rellenarse si :other no tiene el valor :values.',
    'required_with'        => ':attribute debe rellenarse si se ha rellenado :values.',
    'required_with_all'    => ':attribute debe rellenarse si se ha rellenado :values.',
    'required_without'     => ':attribute debe rellenarse si :values no se ha rellenado.',
    'required_without_all' => ':attribute debe rellenarse si :values no se ha rellenado.',
    'same'                 => ':attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe ser igual a :size.',
        'file'    => ':attribute debe ser :size kilobyte.',
        'string'  => ':attribute debe tener una longitud de :size de tamaño.',
        'array'   => ':attribute debe tener exactamente elementos :size.',
    ],
    'starts_with' => ':attribute debe comenzar con uno de los siguientes: :values',
    'string'      => ':attribute debe ser una cadena.',
    'timezone'    => ':attribute debe ser una zona horaria válida.',
    'unique'      => ':attribute ya está ocupado.',
    'uploaded'    => ':attribute no se ha podido cargar.',
    'url'         => ':attribute debe ser una URL.',
    'uuid'        => ':attribute debe ser un UUID.',

    'incorrect_password' => 'La contraseña actual es incorrecta.',
];
