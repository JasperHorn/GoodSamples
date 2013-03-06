<?php

// This should all happen automatically as checks on whether
// it is needed to recompile should be built into this whole
// thing, but until that happens this file is here to do it
// manually

require 'settings.php';

include_once $good_dir . 'Rolemodel/Rolemodel.php';
include_once $good_dir . 'Service/ModifierObservable.php';
include_once $good_dir . 'Manners/ModifierStorable.php';
include_once $good_dir . 'Service/Service.php';
include_once $good_dir . 'Service/Observer.php';
include_once $good_dir . 'Manners/Manners.php';
include_once $good_dir . 'Memory/Memory.php';
include_once $good_dir . 'temptools/LookingWithMannersCompiler.php';

function class2file($in)
{
	global $datatype_dir;
	return $datatype_dir . $in . '.datatype';
}



$rolemodel = new \Good\Rolemodel\Rolemodel();

$model = $rolemodel->createDataModel(array_combine($datatypes, array_map("class2file", $datatypes)));

$modifiers = array(new \Good\Service\ModifierObservable(),
				   new \Good\Manners\ModifierStorable());

$service = new \Good\Service\Service();

$service->compile($modifiers, $model, 'compiled/');

$manners = new \Good\Manners\Manners();

$manners->compileStore($model, 'compiled/');

$memory = new \Good\Memory\Memory();

$memory->compileSQLStore($model, 'compiled/');

$memory = new \temptools\LookingWithMannersCompiler();

$memory->compile($model, 'compiled/');

?>