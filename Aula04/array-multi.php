<?php
echo "<pre>";
$temp =

[

	'2018' => [	'Janeiro' => 28, 
				'Fevereiro' => 29,
				'Marco' => 28
			  ],

	'2017' => [	'Janeiro' => 27, 
				'Fevereiro' => 26,
				'Marco' => 30
			  ]
];

print_r($temp['2017']);
print_r($temp['2018']);

echo "<hr>";

print_r($temp['2017'] ['Fevereiro']);

echo "<hr>";


