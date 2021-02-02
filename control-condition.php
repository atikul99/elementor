<?php



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
