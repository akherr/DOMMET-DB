<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel='stylesheet' type='text/css' href='style.php' />
<html>
    <head> DomMet Contacts DB um what </head>
<body>
    <p> This is a test of the DomMet Contacts DB Website </p>

<?php
include 'prints.php';
?>

<?php
  ini_set('date.timezone','America/New_York');
  echo "Last modified: ", date("Y.M.d (D) H:i.", filemtime(__FILE__)), "<br />\n";
  error_reporting (E_ALL|E_WARNING|E_PARSE);
  show_source(__FILE__);
?>
</body>
</html>
