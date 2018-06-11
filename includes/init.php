<?php
/*Gestion de url (page,action,router)*/

include SITE_PATH  . '/includes/Bootstrap.php';
Bootstrap::url();

/*Connexion à la base de done*/
include SITE_PATH . '/includes/Db.php';




/*Session*/
session_start();


/*Load comon Controller*/
include SITE_PATH . '/includes/components/CommonController.php';


/*Gestion des Template et des Controllers*/

include SITE_PATH .'/includes/Template.php';
Template::page();
