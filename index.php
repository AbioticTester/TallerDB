<?php
//Autor: Hugo Eduardo Zetina Gutierrez
require_once('lib/config/inc.conf.php');
require_once('app/controller/config.page.php');
require_once('lib/functions/crudOficinas.php');
require_once('lib/functions/crudVehiculos.php');
require_once('lib/functions/crudSeguro.php');
$f3->set('DEBUG',1);

//LogIn
$f3->route('GET @Login: /','Controller\Login->Login_view');
$f3->route('GET @LogOut: /logout','Controller\Login->Acceso_LogOut');

$f3->route('POST @Acceso: /','Controller\Login->Acceso_LogIn');

//Home
$f3->route('GET @HomeAdmin: /admin','Controller\Home->Home_Admin');
$f3->route('GET @HomeUser: /user','Controller\Home->Home_User');

/*User*/
//Add
$f3->route('POST @AddUser: /home/add-user','Controller\Home->Add_User');
//Update
$f3->route('POST @UpdateUser: /home/update-user','Controller\Home->Update_User');
//Remove
$f3->route('POST @RemoveUser: /home/remove-user','Controller\Home->Remove_User');

/*Oficina*/
//Add
$f3->route('POST @AddOficina: /admin/add-oficina','Controller\Home->Add_Oficina');
//Update
$f3->route('POST @UpdateOficina: /admin/update-oficina','Controller\Home->Update_Oficina');
//Remove
$f3->route('POST @RemoveOficina: /admin/remove-oficina','Controller\Home->Remove_Oficina');


/*Vehiculo*/
//Add
$f3->route('POST @AddVehiculo: /admin/add-vehiculo','Controller\Home->Add_Vehiculo');
//Update
$f3->route('POST @UpdateVehiculo: /admin/update-vehiculo','Controller\Home->Update_Vehiculo');
//Remove
$f3->route('POST @RemoveVehiculo: /admin/remove-vehiculo','Controller\Home->Remove_Vehiculo');

/*Vehiculo*/
//Add
$f3->route('POST @AddSeguro: /admin/add-seguro','Controller\Home->Add_Seguro');
//Update
$f3->route('POST @UpdateSeguro: /admin/update-seguro','Controller\Home->Update_Seguro');
//Remove
$f3->route('POST @RemoveSeguro: /admin/remove-seguro','Controller\Home->Remove_Seguro');

/*Rentas*/
$f3->route('POST @Rent: /user/add-rent','Controller\Home->Add_Rent');
$f3->route('POST @Rent: /user/return-car','Controller\Home->Return_Rent');







$f3->run();
