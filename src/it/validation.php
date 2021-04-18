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

    'accepted'        => ':attribute deve essere accettato.',
    'active_url'      => ':attribute non è un URL valido.',
    'after'           => ':attribute deve essere una data successiva a :date.',
    'after_or_equal'  => ':attribute deve essere una data successiva o uguale a :date.',
    'alpha'           => ':attribute può contenere solo lettere.',
    'alpha_dash'      => ':attribute può contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num'       => ':attribute può contenere solo lettere e numeri.',
    'array'           => ':attribute deve essere un\'array.',
    'before'          => ':attribute deve essere una data antecedente a :date.',
    'before_or_equal' => ':attribute deve essere una data uguale o antecedente a :date.',
    'between'         => [
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'file'    => ':attribute deve essere compreso :min e :max kilobytes.',
        'string'  => ':attribute deve essere compreso :min e :max caratteri.',
        'array'   => ':attribute deve essere compreso tra :min e :max elementi.',
    ],
    'boolean'        => 'I campo :attribute deve essere vero o falso.',
    'confirmed'      => ':attribute confirmation does not match.',
    'date'           => ':attribute non è una data valida.',
    'date_equals'    => ':attribute deve essere una data uguale a :date.',
    'date_format'    => ':attribute non rispetta il formato :format.',
    'different'      => ':attribute e :other devono essere differenti.',
    'digits'         => ':attribute deve essere di :digits cifre.',
    'digits_between' => ':attribute deve essere compreso tra :min e :max cifre.',
    'dimensions'     => ':attribute ha dimensioni di immagine non valide.',
    'distinct'       => 'Il campo :attribute ha valore duplicato.',
    'email'          => ':attribute deve essere un\' indirizzo email valido.',
    'ends_with'      => ':attribute deve terminare con uno dei seguenti: :values.',
    'exists'         => 'Il selezionato :attribute è invalido.',
    'file'           => ':attribute deve essere un file.',
    'filled'         => 'Il campo :attribute deve avere un valore.',
    'gt'             => [
        'numeric' => ':attribute deve essere maggiore di :value.',
        'file'    => ':attribute deve essere maggiore :value kilobytes.',
        'string'  => ':attribute deve essere maggiore :value caratteri.',
        'array'   => ':attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => ':attribute deve essere maggiore o uguale a :value.',
        'file'    => ':attribute deve essere maggiore o uguale a :value kilobytes.',
        'string'  => ':attribute deve essere maggiore o uguale a :value caratteri.',
        'array'   => ':attribute must have :value items or more.',
    ],
    'image'    => ':attribute deve essere un immagine.',
    'in'       => 'Il selezionato :attribute non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer'  => ':attribute deve essere un intero.',
    'ip'       => ':attribute deve essere un indirizzo IP.',
    'ipv4'     => ':attribute deve essere un indirizzo IPV4 valido.',
    'ipv6'     => ':attribute deve essere un indirizzo IPV6 valido.',
    'json'     => ':attribute deve essere una stringa JSON valida.',
    'lt'       => [
        'numeric' => ':attribute deve essere minore di :value.',
        'file'    => ':attribute deve essere minore di :value kilobytes.',
        'string'  => ':attribute deve essere minore di :value caratteri.',
        'array'   => ':attribute deve avere mendo di :value elementi.',
    ],
    'lte' => [
        'numeric' => ':attribute deve essere minore di o uguale a :value.',
        'file'    => ':attribute deve essere minore di o uguale a :value kilobytes.',
        'string'  => ':attribute deve essere minore di o uguale a :value caratteri.',
        'array'   => ':attribute non deve avere più di  :value elementi.',
    ],
    'max' => [
        'numeric' => ':attribute non deve essere maggiore di :max.',
        'file'    => ':attribute non deve essere maggiore di :max kilobytes.',
        'string'  => ':attribute non deve essere maggiore di :max caratteri.',
        'array'   => ':attribute non può avere più di :max elementi.',
    ],
    'mimes'     => ':attribute deve essere un file di tipo: :values.',
    'mimetypes' => ':attribute deve essere un file di tipo: :values.',
    'min'       => [
        'numeric' => ':attribute deve essere almeno :min.',
        'file'    => ':attribute deve essere almeno :min kilobytes.',
        'string'  => ':attribute deve essere almeno :min caratteri.',
        'array'   => ':attribute deve avere almeno :min elementi.',
    ],
    'not_in'               => 'Il selezionato :attribute non è valido.',
    'not_regex'            => 'Il formato di :attribute non è valido.',
    'numeric'              => ':attribute deve essere un numero.',
    'password'             => 'La password non è corretta.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => 'Il formato di :attribute non è valido.',
    'required'             => 'Il campo :attribute è richiesto.',
    'required_if'          => 'Il campo :attribute è richiesto quanto :other è :value.',
    'required_unless'      => 'Il campo :attribute è richiesto a meno che :other è in :values.',
    'required_with'        => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è richiesto quando :values sono presenti.',
    'required_without'     => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è richiesto quando nessuno di :values sono presenti.',
    'same'                 => ':attribute e :other devono corrispondere.',
    'size'                 => [
        'numeric' => ':attribute essere di :size.',
        'file'    => ':attribute essere di :size kilobytes.',
        'string'  => ':attribute essere di :size caratteri.',
        'array'   => ':attribute deve contenere :size elementi.',
    ],
    'starts_with' => ':attribute deve iniziare con uno dei seguenti: :values.',
    'string'      => ':attribute essere una strina.',
    'timezone'    => ':attribute essere timezone.',
    'unique'      => ':attribute è già stato assegnato.',
    'uploaded'    => ':attribute upload fallito.',
    'url'         => 'Il formato di :attribute è invalido.',
    'uuid'        => ':attribute deve essere un validoUUID.',

    'incorrect_password' => 'La password corrente non è corretta.',

];
