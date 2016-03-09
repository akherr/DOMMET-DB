<?php
$colNames = $conn->query("show columns from Contacts");

echo "<select name='printContactsSelect'><option value='default'>Select Search</option>";

while($row2 = $colNames->fetch_assoc()) 
{
    if(!(strcmp($row2['Field'],"SupplierID")) || !(strcmp($row2['Field'],"ContactID")))
    {
        echo "<option value='" . $row2['Field'] . "'>" . $row2['Field'] . "</option>";
    }
}
echo "</select>";
?>