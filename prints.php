<?php

include 'dbconnect.php';

$results = $conn->query("SELECT * from Names");

echo '<html><h2> Is this thing on?</h2></html>';
$numfields = 2;

echo '<html><p> Number of Fields: ' . $numfields . '</p>';
echo '<table id ="resultstable"><tr>';



for($i=0; $i<$numfields; $i++)
{
    echo '<p>Inside For Loop before fetch field</p>';
    $fieldinfo = mysqli_fetch_field_direct($results, $i);
    echo '<p>Inside For Loop before print field name</p>';
    echo '<td>' .$fieldinfo->name. '</td>';
}

echo '</tr></html>'
?>

<?php

while($row = $results->fetch_assoc()) {
    echo "<html><p> Inside fetch while";
    echo '<p id="firstname">' . $row['first'] . '</p>';
    echo '<p id="lastname">&ndash;' . $row['last'] . '</p>';
}

echo '</table>';
?>