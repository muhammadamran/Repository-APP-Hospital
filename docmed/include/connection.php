<?php
$host='localhost';
$user='root';
$password='';
$dbname='rskg_website';
$koneksi=mysql_connect($host,$user,$password) or die(mysql_error());
$dbselect=mysql_select_db($dbname);
?>