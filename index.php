<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel='stylesheet' type='text/css' href='style.php' />
<html>
<head> DomMet Contacts DB</head>
<?php include ($_SERVER['DOCUMENT_ROOT']."dbconnect.php"); ?>
<body>
    <p> This is a test of the DomMet Contacts DB Website </p>
    <a href="createSupplierForm.php">Create New Supplier Form </a>
<form method="get" action="prints.php">
      <input name="printsuppliers" type="submit" value="Get Suppliers"/>
</form>
<form method="get" action="prints1.php">
      <input name="printSupplierSpecific" type="submit" value="Get Suppliers Specific" />
      <input name="printSupplierstxt" type="text" />
      <?php include ($_SERVER['DOCUMENT_ROOT']."ddprint.php"); ?>
</form> 
    <form method="get" action="searchContacts.php">
        <input name="printContactSpecific" type="submit" value="Get Contact Specific" />
        <input name="printContactstxt" type="text" />
        <?php include ($_SERVER['DOCUMENT_ROOT']."contactPrint.php"); ?>
    </form>
<?php
//include ($_SERVER['DOCUMENT_ROOT']."prints.php");

ini_set('date.timezone','America/New_York');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
</body>
</html>
