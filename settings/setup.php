<?php
/* setup files */
include_once("settings/enviroment/Env.php");
include_once('settings/helper/App.php');
include_once('settings/database/database.php');
/*******************************************/

/* database files */
include_once('settings/database/tables/Table.php');
include_once('settings/database/tables/User.php');
include_once('settings/database/tables/Book.php');
include_once('settings/database/tables/Student.php');
include_once('settings/database/tables/BookCount.php');
include_once('settings/database/tables/Isseued_to.php');
/*******************************************/

/* database seeding */
include_once('settings/database/seed/seed.php');
/*******************************************/
?>