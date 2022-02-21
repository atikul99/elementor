<?php

// Normal Condition

	'condition'=>[
		'select_style'=> 'three',
	],

// Multiple Condition

	'conditions' => [
	    'relation' => 'or',
		'terms' => [
			[
                'terms' => [
	                [
                        'name' => 'select_style',
                        'operator' => '==',
                        'value' => 'one'
                    ],
                ]
            ],
            [
                'terms' => [
                    [
                         'name' => 'select_style',
                         'operator' => '==',
                         'value' => 'three'
	                ],
                ]
			]
		]
	]
