<?php
$colNames = $conn->query("show columns from Suppliers");
$numrowsSelect = $colNames->num_rows;

echo "<select name='inputText' value=''>Select Search</option>";
for($i=0; $i<$numrowsSelect; $i++)
{
    if(!($colNames[i] = "SupplierID"))
    {
        echo "<option value=$colNames[Field]>$colNames[Field]";
    }
}
echo "</select>";
?>