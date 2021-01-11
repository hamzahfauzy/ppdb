<?php


function get_jenjang()
{
	$jenjang = [
		[
			'name' => 'PAUD',
			'need_origin' => false
		],
		[
			'name' => 'TK',
			'need_origin' => true
		],
		[
			'name' => 'MI',
			'need_origin' => true
		]
	];

	return $jenjang;
}