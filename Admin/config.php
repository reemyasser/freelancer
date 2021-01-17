<?php
define('servername','localhost');
define('userdb','root');
define('userpass','');
define('dbname','db_038l');

$connect=mysqli_connect(servername,userdb,userpass,dbname);
if(!$connect)
{
    die ('connection problem ... ');
}
?>