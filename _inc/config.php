<?php

//konštanta DATABASE obsahujúca asoc pole 
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'project_sj_2024',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

require_once('classes/Database.php');
require_once('classes/Cart.php');
require_once('classes/Page.php');
require_once('classes/Menu.php');
require_once('classes/Products.php');
require_once('classes/Team.php');
require_once('classes/Contact.php');
require_once('functions.php');
?>