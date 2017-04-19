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

    'accepted'             => ':attribute 必须为是或否',
    'active_url'           => ':attribute 必须是有效网址',
    'after'                => ':attribute 必须在 :date 之后',
    'alpha'                => ':attribute 只能包含字母',
    'alpha_dash'           => ':attribute 只能包含字母、数字、-、_',
    'alpha_num'            => ':attribute 只能包含字母、数字',
    'array'                => ':attribute 必须是数组',
    'before'               => ':attribute 必须在:date 之前',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 到 :max 之间',
        'file'    => ':attribute 必须在 :min 到 :max KB之间',
        'string'  => ':attribute 必须在 :min 到 :max 字符之间',
        'array'   => ':attribute 必须在 :min and :max 项之间',
    ],
    'boolean'              => ':attribute 值必须是true或者false',
    'confirmed'            => ':attribute 和confirmation值不匹配',
    'date'                 => ':attribute 必须是一个合法日期',
    'date_format'          => ':attribute 不符合格式： :format.',
    'different'            => ':attribute 和 :other 必须不同',
    'digits'               => ':attribute 必须为 :digits 位数字',
    'digits_between'       => ':attribute 必须是 :min 到 :max 位数字',
    'distinct'             => ':attribute 值重复',
    'email'                => ':attribute 必须是邮箱',
    'exists'               => '选择的:attribute 无效',
    'filled'               => ':attribute 值必填',
    'image'                => ':attribute 必须为图片',
    'in'                   => '选择的:attribute 无效',
    'in_array'             => ':attribute 值在:other中不存在',
    'integer'              => ':attribute 必须是整数',
    'ip'                   => ':attribute 必须是IP地址',
    'json'                 => ':attribute 必须是JSON字符串',
    'max'                  => [
        'numeric' => ':attribute 不得大于 :max',
        'file'    => ':attribute 不得大于 :max KB',
        'string'  => ':attribute 不得大于 :max 位字符',
        'array'   => ':attribute 不得大于 :max 项',
    ],
    'mimes'                => ':attribute 必须为:values类型文件',
    'min'                  => [
        'numeric' => ':attribute 不得小于 :min',
        'file'    => ':attribute 不得小于 :min KB',
        'string'  => ':attribute 不得小于 :min 位字符',
        'array'   => ':attribute 不得小于 :min 项',
    ],
    'not_in'               => '选择的 :attribute 已存在',
    'numeric'              => ':attribute 必须是数字',
    'present'              => ':attribute 必须存在',
    'regex'                => ':attribute 格式错误',
    'required'             => ':attribute 必填',
    'required_if'          => '当:other 为 :value 时 :attribute 必填',
    'required_unless'      => ':attribute 必填， 除非 :other 值在 :values 中',
    'required_with'        => ':attribute 必填，当 :values 值存在.',
    'required_with_all'    => ':attribute 必填， 当 :values 值都存在',
    'required_without'     => ':attribute 必填， 当 :values 值不存在',
    'required_without_all' => ':attribute 必填， 当 :values 值都不存在',
    'same'                 => ':attribute 和 :other 值必须一样',
    'size'                 => [
        'numeric' => ':attribute 必须为 :size 位',
        'file'    => ':attribute 必须为 :size KB',
        'string'  => ':attribute 必须为 :size 字符',
        'array'   => ':attribute 必须为 :size 项',
    ],
    'string'               => ':attribute 必须是字符串',
    'timezone'             => ':attribute 必须是有效时区',
    'unique'               => ':attribute 已存在',
    'url'                  => ':attribute 格式非法',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'=>'用户名',
        'password'=>'密码',
        'email'=>'邮箱',
    ],

];
