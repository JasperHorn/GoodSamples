<?php

// This whole file shouldn't be needed by The Good Suite in the future.
// All of this bootstrapping should be done by the platform itself.
//
// (There might be some including of classes here, as the suclasses
//  of the DataType-based BaseClasses need to be included before one
//  of the calls in this file, but the plan is to have that fixed
//  and handled by the system itself as well.)

require 'settings.php';

date_default_timezone_set($timezone);

require_once $good_dir . 'Good.php';
require_once $good_dir . 'Memory/Database/DbMySQL.php';
require_once $good_dir . 'Service/GoodService.php';
require_once $good_dir . 'Looking/GoodLooking.php';

require_once $compiled_dir . 'Store.php';
require_once $compiled_dir . 'SQLStore.php';
require_once $compiled_dir . 'LookingWithManners.php';

foreach ($datatypes as $datatype)
{
	require_once $compiled_dir . 'Base' . ucfirst($datatype) . '.datatype.php';
}

// ** include Storable subclasses here    ** //

require_once 'DataSubClasses/User.php';

// ** end of included Storable subclasses **//

$service = new GoodService();
$service->requireClasses($datatypes);

$store = new GoodMemorySQLStore(new GoodMemoryDbMySQL($dbname, $dbhost, $dbport, $dbuser, $dbpass, ''));

?>