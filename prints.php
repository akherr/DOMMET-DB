<?php

include ($_SERVER['DOCUMENT_ROOT']."dbconnect.php");
echo "<html><p> before query </p></html>";
$results = $conn->query("SELECT * from Suppliers");
echo "<html><p> I am here now </p></html>";
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
    echo '<tr><td>' . $row['first'] . '</td>';
    echo '<td>' . $row['last'] . '</td></tr>';
}

echo '</table></html>';
?>