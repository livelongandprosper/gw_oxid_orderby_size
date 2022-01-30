<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0'; // see https://docs.oxid-esales.com/developer/en/6.0/modules/skeleton/metadataphp/version20.html

/**
 * Module information
 */
$aModule = array(
	'id'           => 'gw_oxid_orderby_size',
	'title'        => array(
		'de' => 'Variante-Sortierung nach größen',
		'en' => 'Order variants by confection size',
	),
	'description'  => array(
		'de'=>'Ordnet Artikel-Varianten nach Kleidergrößen (Konfektionsgrößen US 3XS-6XL und Schuhe EU/DE 20-55).',
		'en'=>'Variant articles are ordered by confection sizes (Confections sizes US 3XS-6XL and Shoes EU/DE 20-55).',
	),
	'thumbnail'		=> '',
	'version'		=> '1.0',
	'email'			=> 'email@gewend.de',
	'url'			=> 'https://www.gewend.de',
	'author'		=> 'g:wend Webentwicklung, Gregor Wendland',
	'settings' => array(
		array('group' => 'gw_oxid_orderby_size', 'name' => 'gw_oxid_orderby_size_variant_position', 'type' => 'select',   'value' => '1', 'constraints' => '0|1', 'position' => 1 ),
	),
	'extend'       => array(
		OxidEsales\Eshop\Application\Model\Article::class => gw\gw_oxid_orderby_size\Model\Article::class

	),
	'blocks' => array(
	),
	'events' => array(
		'onActivate'   => '\gw\gw_oxid_orderby_size\Core\Events::onActivate',
		'onDeactivate' => '\gw\gw_oxid_orderby_size\Core\Events::onDeactivate'
	),
	'controllers'  => [
	],
	'templates' => [
	]
);
