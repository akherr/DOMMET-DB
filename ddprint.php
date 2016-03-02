<?php
$colNames = $conn->query("show columns from Suppliers");
$numrowsSelect = $colNames->num_rows;
echo '<p> Number of rows: ' . $numrows . '</p>';

echo "<select name='inputText' value=''>Select Search</option>";
for($i=0; $i<$numrowsSelect; $i++)
{
    if(!($colNames[i] = "SupplierID"))
    {
        echo "<option value=$colNames[Field]>bob</option>";
    }
}
echo "</select>";
?>