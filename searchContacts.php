<?php
include ($_SERVER['DOCUMENT_ROOT']."dbconnect.php");
$results = $conn->query("SELECT * from Contacts where " . $_GET['printContactsSelect'] . " LIKE '%" . $_GET['printContactstxt'] . "%'");
$numfields = $conn->field_count;

echo '<html><p> Number of Fields: ' . $numfields . '</p>';
echo "<table border='1' id='resultstable'><tr>";

for($i=2; $i<$numfields; $i++)
{
    $fieldinfo = mysqli_fetch_field_direct($results, $i);
    echo "<td id='tableheaders'>" . $fieldinfo->name . "</td>";
}

echo '</tr>';

while($row = $results->fetch_assoc()) {
    echo '<tr><td>' . $row['FirstName'] . '</td>';
    echo '<td>' . $row['MiddleName'] . '</td>';
    echo '<td>' . $row['LastName'] . '</td>';
    echo '<td>' . $row['WorkPhone'] . '</td>';
    echo '<td>' . $row['HomePhone'] . '</td>';
    echo '<td>' . $row['MobilePhone'] . '</td>';
    echo '<td>' . $row['Email'] . '</td>';
    echo '<td>' . $row['Suffix'] . '</td>';
    echo '<td>' . $row['JobTitle'] . '</td></tr>';
}

echo '</table></html>';
?>