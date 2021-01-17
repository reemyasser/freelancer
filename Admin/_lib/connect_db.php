<?php

function adduser()
{
$connect=mysqli_connect('localhost','root','','db_038l');
if(!$connect)
{
    die ('connection problem ... ');
}
$insert="insert into users 
values (NULL,'aml','aml@gmail.com','aml','1234',1)";
mysqli_query($connect,$insert);
echo 'insert successd';



}
adduser();