<?php
$colNames = $conn->query("show columns from Suppliers");
$numrowsSelect = $colNames->num_rows;
echo '<p> Number of rows: ' . $numrowsSelect . '</p>';

echo "<select name='inputText'><option value='default'>Select Search</option>";

while($row2 = $colNames->fetch_assoc()) 
{
    if(!($row2['Field'] = "SupplierID"))
    {
        echo "<option value='" . $row2['Field'] . "'>" . $row2['Field'] . "</option>";
    }
}
//for($i=0; $i<$numrowsSelect; $i++)
//{
//    if(!($colNames[$i] = "SupplierID"))
//    {
//        echo "<option value=$colNames[Field]>bob</option>";
//    }
//}
echo "</select>";
?>