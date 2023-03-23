<?php
define("HOST",'localhost');
define("USER",'root');
define("PSWD",'');
define("DBNAME",'pr_parking');

$conn = new mysqli(HOST,USER,PSWD,DBNAME);
session_start();