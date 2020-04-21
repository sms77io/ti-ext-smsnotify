<?php

return [
    'list' => [
        'toolbar' => [
            'buttons' => [
                'create' => ['label' => 'lang:admin::lang.button_new', 'class' => 'btn btn-primary', 'href' => 'igniterlabs/smsnotify/templates/create'],
                'delete' => ['label' => 'lang:admin::lang.button_delete', 'class' => 'btn btn-danger', 'data-request-form' => '#list-form', 'data-request' => 'onDelete', 'data-request-data' => "_method:'DELETE'", 'data-request-data' => "_method:'DELETE'", 'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm'],
            ],
        ],
        'columns' => [
            'edit' => [
                'type' => 'button',
                'iconCssClass' => 'fa fa-pencil',
                'attributes' => [
                    'class' => 'btn btn-edit',
                    'href' => 'igniterlabs/smsnotify/templates/edit/{id}',
                ],
            ],
            'name' => [
                'label' => 'admin::lang.label_name',
                'type' => 'text',
            ],
            'updated_at' => [
                'label' => 'igniterlabs.smsnotify::default.template.column_updated_at',
                'type' => 'timetense',
                'searchable' => TRUE,
            ],
            'created_at' => [
                'label' => 'igniterlabs.smsnotify::default.template.column_created_at',
                'type' => 'timetense',
                'searchable' => TRUE,
            ],
            'id' => [
                'label' => 'lang:admin::lang.column_id',
                'invisible' => TRUE,
            ],
        ],
    ],
    'form' => [
        'toolbar' => [
            'buttons' => [
                'save' => ['label' => 'lang:admin::lang.button_save', 'class' => 'btn btn-primary', 'data-request' => 'onSave'],
                'saveClose' => [
                    'label' => 'lang:admin::lang.button_save_close',
                    'class' => 'btn btn-default',
                    'data-request' => 'onSave',
                    'data-request-data' => 'close:1',
                ],
                'test_message' => [
                    'label' => 'lang:igniterlabs.smsnotify::default.template.button_test_message',
                    'class' => 'btn btn-default',
                    'data-request' => 'onTestTemplate',
                    'context' => 'edit',
                ],
            ],
        ],
        'fields' => [
            'name' => [
                'label' => 'admin::lang.label_name',
                'type' => 'text',
                'span' => 'left',
            ],
            'code' => [
                'label' => 'admin::lang.label_code',
                'type' => 'text',
                'span' => 'right',
            ],
        ],
        'tabs' => [
            'fields' => [
                'content' => [
                    'tab' => 'igniterlabs.smsnotify::default.template.label_content',
                    'type' => 'textarea',
                ],
            ],
        ],
    ],
];