<?
session_start();
error_reporting( error_reporting() & ~E_NOTICE );


include('includes/functions.php');

$FileDetails = stat('template/css/styles.css');
$MT =  dechex($FileDetails['mtime']);

echo str_replace('[-MT-]',$MT,getTemplate('Header'));

include('includes/FrontPage.php');
echo getTemplate('Footer');
?>