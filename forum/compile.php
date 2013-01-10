<?php

// This should all happen automatically as checks on whether
// it is needed to recompile should be built into this whole
// thing, but until that happens this file is here to do it
// manually

require 'settings.php';

include_once $good_dir . 'Rolemodel/GoodRolemodel.php';
include_once $good_dir . 'Service/ModifierObservable.php';
include_once $good_dir . 'Manners/ModifierStorable.php';
include_once $good_dir . 'Service/GoodService.php';
include_once $good_dir . 'Service/Observer.php';
include_once $good_dir . 'Manners/GoodManners.php';
include_once $good_dir . 'Memory/GoodMemory.php';
include_once $good_dir . 'temptools/LookingWithMannersCompiler.php';

function class2file($in)
{
	global $datatype_dir;
	return $datatype_dir . $in . '.datatype';
}



$rolemodel = new GoodRolemodel();

$model = $rolemodel->createDataModel(array_combine($datatypes, array_map("class2file", $datatypes)));

$modifiers = array(new GoodServiceModifierObservable(),
				   new GoodMannersModifierStorable());

$service = new GoodService();

$service->compile($modifiers, $model, 'compiled/');

$manners = new GoodManners();

$manners->compileStore($model, 'compiled/');

$memory = new GoodMemory();

$memory->compileSQLStore($model, 'compiled/');

$memory = new LookingWithMannersCompiler();

$memory->compile($model, 'compiled/');

?>