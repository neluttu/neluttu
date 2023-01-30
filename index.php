<?
session_start();


include('includes/functions.php');

echo getTemplate('Header');

include('includes/FrontPage.php');
echo getTemplate('Footer');
?>