<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2019 Jonny Spitzner
 *
 * @license LGPL-3.0+
 */

array_insert($GLOBALS['BE_MOD']['recipes'], 100, array
(
	'recipescategorie' 	=> array('tables' => array('tl_recipes_categories')),
	'recipesitems' 	=> array('tables' => array('tl_recipes'))
));


/**
 * Style sheet
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/JonnyspRezept/recipes.css|static';
}


/**
 * Front end modules
 */
array_insert($GLOBALS['TL_CTE'], 1, array
	(
		'includes' 	=> array
			(
				//'recipes_viewer' 	=> 'RecipesViewer',
				'recipescategorie_viewer'	=> 'RecipesCategorieViewer'
			)
	)
);


