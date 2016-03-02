<?php
$colNames = $conn->query("show columns from Suppliers");

echo "<select name='printSuppliersSelect'><option value='default'>Select Search</option>";

while($row2 = $colNames->fetch_assoc()) 
{
    if(strcmp($row2['Field'],"SupplierID"))
    {
        echo "<option value='" . $row2['Field'] . "'>" . $row2['Field'] . "</option>";
    }
}
echo "</select>";
?>