<?php

// This should all happen automatically as checks on whether
// it is needed to recompile should be built into this whole
// thing, but until that happens this file is here to do it
// manually

require 'settings.php';
include ($good_dir . 'autoload.php');

function class2file($in)
{
	global $datatype_dir;
	return $datatype_dir . $in . '.datatype';
}

$rolemodel = new \Good\Rolemodel\Rolemodel();

$model = $rolemodel->createSchema(array_combine($datatypes, array_map("class2file", $datatypes)));

$modifiers = array(new \Good\Service\Modifier\Observable(),
				   new \Good\Manners\Modifier\Storable());

$service = new \Good\Service\Service();

$service->compile($modifiers, $model, 'compiled/');

?>