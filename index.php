<?
session_start();
error_reporting( error_reporting() & ~E_NOTICE );


include('includes/functions.php');

echo getTemplate('Header');

include('includes/FrontPage.php');
echo getTemplate('Footer');
?>