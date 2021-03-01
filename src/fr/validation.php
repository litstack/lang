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

    'accepted'        => ':attribute doit être accepté•e.',
    'active_url'      => ':attribute n’est pas une URL valide.',
    'after'           => ':attribute doit être une date postérieure au :date.',
    'after_or_equal'  => ':attribute doit être une date postérieure ou égale au :date.',
    'alpha'           => ':attribute ne peut contenir que des lettres.',
    'alpha_dash'      => ':attribute ne peut contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num'       => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array'           => ':attribute doit être un tableau.',
    'before'          => ':attribute doit être une date antérieure au :date.',
    'before_or_equal' => ':attribute doit être une date antérieure ou égale au :date.',
    'between'         => [
        'numeric' => ':attribute doit être compris•e entre :min et :max.',
        'file'    => ':attribute doit être compris•e entre :min et :max kilobytes.',
        'string'  => ':attribute doit comporter entre :min et :max caractères.',
        'array'   => ':attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'        => 'Le champ :attribute doit être à true ou false.',
    'confirmed'      => 'La confirmation de :attribute ne correspond pas.',
    'date'           => ':attribute n’est pas une date valide.',
    'date_equals'    => ':attribute doit être une date égale à :date.',
    'date_format'    => ':attribute ne correspond pas au format :format.',
    'different'      => ':attribute et :other doivent être différents.',
    'digits'         => ':attribute doit être à :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'dimensions'     => ':attribute a des dimensions d’image non valides.',
    'distinct'       => 'Le champ :attribute a une valeur dupliquée.',
    'email'          => ':attribute doit être une adresse e-mail valide.',
    'ends_with'      => ':attribute doit se terminer par l’une des valeurs suivantes : :values.',
    'exists'         => 'L’:attribute sélectionné•e n’est pas valide.',
    'file'           => ':attribute doit être un fichier.',
    'filled'         => 'Le champ :attribute doit avoir une valeur.',
    'gt'             => [
        'numeric' => ':attribute doit être supérieur à :value.',
        'file'    => ':attribute doit être supérieur à :value kilobytes.',
        'string'  => ':attribute doit être supérieur à :value caractères.',
        'array'   => ':attribute doit avoir plus que :value éléments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être supérieur ou égal à :value.',
        'file'    => ':attribute doit être supérieur ou égal à :value kilobytes.',
        'string'  => ':attribute doit être supérieur ou égal à :value caractères.',
        'array'   => ':attribute doit avoir :value éléments ou plus.',
    ],
    'image'    => ':attribute doit être une image.',
    'in'       => 'L’:attribute sélectionné•e n’est pas valide.',
    'in_array' => 'Le champ :attribute n’existe pas dans :other.',
    'integer'  => ':attribute doit être un nombre entier.',
    'ip'       => ':attribute doit être une adresse IP valide.',
    'ipv4'     => ':attribute doit être une adresse IPv4 valide.',
    'ipv6'     => ':attribute doit être une adresse IPv6 valide.',
    'json'     => ':attribute doit être une chaîne JSON valide.',
    'lt'       => [
        'numeric' => ':attribute doit être inférieure à :value.',
        'file'    => ':attribute doit être inférieure à :value kilobytes.',
        'string'  => ':attribute doit être inférieure à :value caractères.',
        'array'   => ':attribute doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être inférieure ou égale à :value.',
        'file'    => ':attribute doit être inférieure ou égale à :value kilobytes.',
        'string'  => ':attribute doit être inférieure ou égale à :value caractères.',
        'array'   => ':attribute doit avoir :value éléments ou moins.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit pas être supérieur à :max.',
        'file'    => ':attribute ne doit pas être supérieur à :max kilobytes.',
        'string'  => ':attribute ne doit pas être supérieur à :max caractères.',
        'array'   => ':attribute ne doit pas contenir plus de :max éléments.',
    ],
    'mimes'     => ':attribute doit être un fichier de type : :values.',
    'mimetypes' => ':attribute doit être un fichier de type : :values.',
    'min'       => [
        'numeric' => ':attribute ne doit pas être inférieure à :min.',
        'file'    => ':attribute ne doit pas être inférieure à :min kilobytes.',
        'string'  => ':attribute ne doit pas être inférieure à :min caractères.',
        'array'   => ':attribute ne doit pas contenir moins de :min éléments.',
    ],
    'not_in'               => 'L’:attribute sélectionné•e n’est pas valide.',
    'not_regex'            => 'Le format de l’:attribute n’est pas valide.',
    'numeric'              => ':attribute doit être un nombre.',
    'password'             => 'Le mot de passe est incorrect.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'Le format de l’:attribute n’est pas valide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless'      => 'Le champ :attribute est requis sauf si :other se trouve dans :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requis lorsque :values sont présentes.',
    'required_without'     => 'Le champ :attribute est requis lorsque :values n’est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsqu’aucune des :values n’est présente.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être à :size.',
        'file'    => ':attribute doit être à :size kilobytes.',
        'string'  => ':attribute doit être à :size caractères.',
        'array'   => ':attribute doit contenir :size éléments.',
    ],
    'starts_with' => ':attribute doit commencer par l’une des valeurs suivantes : :values.',
    'string'      => ':attribute doit être une chaîne.',
    'timezone'    => ':attribute doit être une zone valide.',
    'unique'      => ':attribute a déjà été pris.',
    'uploaded'    => ':attribute n’a pas pu être téléchargé•e.',
    'url'         => 'Le format de l’:attribute n’est pas valide.',
    'uuid'        => ':attribute doit être un UUID valide.',

    'incorrect_password' => 'Le mot de passe actuel est incorrect.',

];
