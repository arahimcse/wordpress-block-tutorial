<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/copyright-date-block',
		'version' => '0.1.0',
		'title' => 'Copyright Date Block',
		'category' => 'widgets',
		'description' => 'Display your site’s copyright date.',
		'example' => array(
			
		),
		'attributes' => array(
			'showStartingYear' => array(
				'type' => 'boolean',
				'default' => false
			),
			'startingYear' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'text' => true,
				'background' => true
			),
			'typography' => array(
				'fontSize' => true,
				'textAlign' => true
			),
			'layout' => true
		),
		'textdomain' => 'copyright-date-block',
		'editorScript' => 'file:./index.js',
		'render' => 'file:./render.php'
	)
);
