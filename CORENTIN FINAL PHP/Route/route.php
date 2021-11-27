<?php
$app = new App();

//Vehicule
$app->route("home","VehiculeController","index");
$app->route("delete","VehiculeController","delete");
$app->route("home/added","VehiculeController","create");
$app->route("home/edit","VehiculeController","find");
$app->route("home/edited","VehiculeController","edit");




//Marque
$app->route("Marque","MarqueController","index");
$app->route("home","MarqueController","listMarque");
$app->route("deleteMarque","MarqueController","delete");
$app->route("Marque/added","MarqueController","create");
$app->route("Marque/edit","MarqueController","find");
$app->route("Marque/edited","MarqueController","edit");



