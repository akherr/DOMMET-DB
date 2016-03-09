<?php
include ($_SERVER['DOCUMENT_ROOT']."dbconnect.php");

$sql = "insert into Suppliers (Name, Address, City, State,"
        . " Zipcode, Fax, Website, Email) "
        . "values('$_POST[supName]', '$_POST[supAddress]', '$_POST[supCity]',"
        . "'$_POST[supState]', '$_POST[supZipcode]', '$_POST[supFax]', '$_POST[supWebsite]',"
        . "'$_POST[supEmail]')";

$result = $conn->query($sql);
echo "<html><p>$result</p></html>";
?>