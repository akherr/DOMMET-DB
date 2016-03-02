<?php
include ($_SERVER['DOCUMENT_ROOT']."dbconnect.php");
$results = $conn->query("SELECT * from Suppliers where Name LIKE '%" . $_GET["printSupplierstxt"] . "%'");
$numfields = $conn->field_count;

echo '<html><p> Number of Fields: ' . $numfields . '</p>';
echo "<table border='1' id='resultstable'><tr>";

for($i=0; $i<$numfields; $i++)
{
    $fieldinfo = mysqli_fetch_field_direct($results, $i);
    echo "<td id='tableheaders'>" . $fieldinfo->name . "</td>";
}

echo '</tr>';

while($row = $results->fetch_assoc()) {
    //echo '<tr><td>' . $row['SupplierID'] . '</td>';
    echo '<tr><td>' . $row['Name'] . '</td>';
    echo '<td>' . $row['Address'] . '</td>';
    echo '<td>' . $row['City'] . '</td>';
    echo '<td>' . $row['State'] . '</td>';
    echo '<td>' . $row['Zipcode'] . '</td>';
    echo '<td>' . $row['Fax'] . '</td>';
    echo '<td><a href="' . $row['Website'] . '" target="_blank>"' . $row['Website'] . '</a></td>';
    echo '<td>' . $row['Email'] . '</td></tr>';
    
}

echo '</table></html>';
?>