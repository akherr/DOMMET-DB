<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel='stylesheet' type='text/css' href='style.php' />
<html>
    <head> DomMet Contacts DB um what </head>
<body>
    <p> This is a test of the DomMet Contacts DB Website </p>

<?php
echo 
include ($_SERVER['DOCUMENT_ROOT']."prints.php");

ini_set('date.timezone','America/New_York');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
show_source(__FILE__);
?>
</body>
</html>
