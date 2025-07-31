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

    'accepted'              => ':attributeを承認してください。',
    'accepted_if'           => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url'            => ':attributeは、有効なURLではありません。',
    'after'                 => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal'        => ':attributeには、:date以降の日付を指定してください。',
    'alpha'                 => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash'            => ':attributeには、英数字（A-Z、a-z、0-9）およびハイフンとアンダースコア（-、_）が使用できます。',
    'alpha_num'             => ':attributeには、英数字（A-Z、a-z、0-9）が使用できます。',
    'array'                 => ':attributeには、配列を指定してください。',
    'ascii'                 => ':attributeには、シングルバイトの英数字と記号のみ使用できます。',
    'before'                => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal'       => ':attributeには、:date以前の日付を指定してください。',
    'between'               => [
        'array'   => ':attributeの項目は、:min個から:max個にしてください。',
        'file'    => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'numeric' => ':attributeには、:minから:maxまでの数値を指定してください。',
        'string'  => ':attributeは、:min文字から:max文字にしてください。',
    ],
    'boolean'               => ':attributeフィールドは、trueまたはfalseである必要があります。',
    'confirmed'             => ':attributeが確認用項目と一致しません。',
    'current_password'      => 'パスワードが正しくありません。',
    'date'                  => ':attributeは、正しい日付ではありません。',
    'date_equals'           => ':attributeは:dateと同じ日付である必要があります。',
    'date_format'           => ':attributeの形式は、:formatと一致しません。',
    'decimal'               => ':attributeは、小数点以下が:decimal桁である必要があります。',
    'declined'              => ':attributeを辞退する必要があります。',
    'declined_if'           => ':otherが:valueの場合、:attributeを辞退する必要があります。',
    'different'             => ':attributeと:otherは、異なる必要があります。',
    'digits'                => ':attributeは、:digits桁である必要があります。',
    'digits_between'        => ':attributeは、:min桁から:max桁の間でなければなりません。',
    'dimensions'            => ':attributeの画像サイズが無効です。',
    'distinct'              => ':attributeフィールドに重複した値があります。',
    'doesnt_end_with'       => ':attributeの終わりは「:values」のいずれかであってはなりません。',
    'doesnt_start_with'     => ':attributeの始まりは「:values」のいずれかであってはなりません。',
    'email'                 => ':attributeは、有効なメールアドレス形式で指定してください。',
    'ends_with'             => ':attributeの終わりは「:values」のいずれかである必要があります。',
    'enum'                  => '選択された:attributeは無効です。',
    'exists'                => '選択された:attributeは、有効ではありません。',
    'file'                  => ':attributeは、ファイルでなければなりません。',
    'filled'                => ':attributeフィールドには、値が必要です。',
    'gt'                    => [
        'array'   => ':attributeの項目数は、:value個より多くなければなりません。',
        'file'    => ':attributeは、:value KBより大きくなければなりません。',
        'numeric' => ':attributeは、:valueより大きくなければなりません。',
        'string'  => ':attributeは、:value文字より長くなければなりません。',
    ],
    'gte'                   => [
        'array'   => ':attributeの項目数は、:value個以上でなければなりません。',
        'file'    => ':attributeは、:value KB以上でなければなりません。',
        'numeric' => ':attributeは、:value以上でなければなりません。',
        'string'  => ':attributeは、:value文字以上でなければなりません。',
    ],
    'image'                 => ':attributeは、画像でなければなりません。',
    'in'                    => '選択された:attributeは、有効ではありません。',
    'in_array'              => ':attributeフィールドは、:otherには存在しません。',
    'integer'               => ':attributeは、整数でなければなりません。',
    'ip'                    => ':attributeは、有効なIPアドレスでなければなりません。',
    'ipv4'                  => ':attributeは、有効なIPv4アドレスでなければなりません。',
    'ipv6'                  => ':attributeは、有効なIPv6アドレスでなければなりません。',
    'json'                  => ':attributeは、有効なJSON文字列でなければなりません。',
    'lowercase'             => ':attributeは小文字でなければなりません。',
    'lt'                    => [
        'array'   => ':attributeの項目数は、:value個より少なくなければなりません。',
        'file'    => ':attributeは、:value KBより小さくなければなりません。',
        'numeric' => ':attributeは、:valueより小さくなければなりません。',
        'string'  => ':attributeは、:value文字より短くなければなりません。',
    ],
    'lte'                   => [
        'array'   => ':attributeの項目数は、:value個以下でなければなりません。',
        'file'    => ':attributeは、:value KB以下でなければなりません。',
        'numeric' => ':attributeは、:value以下でなければなりません。',
        'string'  => ':attributeは、:value文字以下でなければなりません。',
    ],
    'mac_address'           => ':attributeは有効なMACアドレスでなければなりません。',
    'max'                   => [
        'array'   => ':attributeの項目数は、:max個以下でなければなりません。',
        'file'    => ':attributeは、:max KB以下のファイルでなければなりません。',
        'numeric' => ':attributeは、:max以下の数値でなければなりません。',
        'string'  => ':attributeは、:max文字以下でなければなりません。',
    ],
    'max_digits'            => ':attributeは:max桁以下でなければなりません。',
    'mimes'                 => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes'             => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min'                   => [
        'array'   => ':attributeの項目数は、:min個以上でなければなりません。',
        'file'    => ':attributeは、:min KB以上のファイルでなければなりません。',
        'numeric' => ':attributeは、:min以上の数値でなければなりません。',
        'string'  => ':attributeは、:min文字以上でなければなりません。',
    ],
    'min_digits'            => ':attributeは:min桁以上でなければなりません。',
    'missing'               => ':attributeフィールドは存在しない必要があります。',
    'missing_if'            => ':otherが:valueの場合、:attributeフィールドは存在しない必要があります。',
    'missing_unless'        => ':otherが:valueでない限り、:attributeフィールドは存在しない必要があります。',
    'missing_with'          => ':valuesが存在する場合、:attributeフィールドは存在しない必要があります。',
    'missing_with_all'      => ':valuesがすべて存在する場合、:attributeフィールドは存在しない必要があります。',
    'multiple_of'           => ':attributeは、:valueの倍数でなければなりません。',
    'not_in'                => '選択された:attributeは、有効ではありません。',
    'not_regex'             => ':attributeの形式が無効です。',
    'numeric'               => ':attributeは、数値でなければなりません。',
    'password'              => [
        'letters'      => ':attributeには少なくとも1つの文字を含める必要があります。',
        'mixed'        => ':attributeには少なくとも1つの大文字と1つの小文字を含める必要があります。',
        'numbers'      => ':attributeには少なくとも1つの数字を含める必要があります。',
        'symbols'      => ':attributeには少なくとも1つの記号を含める必要があります。',
        'uncompromised' => '指定された:attributeはデータ漏洩で使用されています。別の:attributeを選択してください。',
    ],
    'present'               => ':attributeフィールドが存在する必要があります。',
    'prohibited'            => ':attributeフィールドは禁止されています。',
    'prohibited_if'         => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless'     => ':otherが:valuesに含まれていない限り、:attributeフィールドは禁止されています。',
    'prohibits'             => ':attributeフィールドは:otherの存在を禁止します。',
    'regex'                 => ':attributeの形式が無効です。',
    'required'              => ':attributeフィールドは必須です。',
    'required_array_keys'   => ':attributeフィールドには、:valuesのエントリが必要です。',
    'required_if'           => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_if_accepted'  => ':otherが承認された場合、:attributeフィールドは必須です。',
    'required_unless'       => ':otherが:valuesでない限り、:attributeフィールドは必須です。',
    'required_with'         => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all'     => ':valuesが全て存在する場合、:attributeフィールドは必須です。',
    'required_without'      => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all'  => ':valuesが全て存在しない場合、:attributeフィールドは必須です。',
    'same'                  => ':attributeと:otherが一致しません。',
    'size'                  => [
        'array'   => ':attributeの項目数は、:size個にしてください。',
        'file'    => ':attributeは、:size KBのファイルでなければなりません。',
        'numeric' => ':attributeは、:sizeでなければなりません。',
        'string'  => ':attributeは、:size文字でなければなりません。',
    ],
    'starts_with'           => ':attributeは、次のいずれかで始まる必要があります: :values',
    'string'                => ':attributeは、文字列でなければなりません。',
    'timezone'              => ':attributeは、有効なタイムゾーンでなければなりません。',
    'unique'                => '指定の:attributeは既に使用されています。',
    'uploaded'              => ':attributeのアップロードに失敗しました。',
    'uppercase'             => ':attributeは大文字でなければなりません。',
    'url'                   => ':attributeは、有効なURL形式で指定してください。',
    'ulid'                  => ':attributeは、有効なULIDでなければなりません。',
    'uuid'                  => ':attributeは、有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'                  => '名前',
        'email'                 => 'メールアドレス',
        'password'              => 'パスワード',
        'password_confirmation' => '確認用パスワード',
        'title'                 => 'タイトル',
        'body'                  => '本文',
        'content'               => '内容',
        'address'               => '住所',
        'phone'                 => '電話番号',
        'age'                   => '年齢',
        'sex'                   => '性別',
        'gender'                => '性別',
        'day'                   => '日',
        'month'                 => '月',
        'year'                  => '年',
        'hour'                  => '時',
        'minute'                => '分',
        'second'                => '秒',
    ],

];
