<?php
	return [
		'filesystems' => [
			'default' => 'local',
			
			'disks' => [
				'local' => [
					'driver' => 'local',
					'root' => ROOT.DS.'/storage',
				],
			]
		]
	];