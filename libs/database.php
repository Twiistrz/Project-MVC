<?php

// Fixed to Display and Save Japanese and other Characters
class Database extends PDO {
	public function __construct() { parent::__construct(DBTYPE.':host='.DBHOST.';dbname='.DBNAME.';charset=utf8',DBUSER,DBPASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); }
}
