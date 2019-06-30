<?php

namespace Statamic\Fieldtypes;

use Statamic\Fields\Fieldtype;

class Checkboxes extends Fieldtype
{
    protected $configFields = [
        'options' => [
            'type' => 'array',
            'value_header' => 'Label'
        ],
        'inline' => ['type' => 'toggle']
    ];
}
