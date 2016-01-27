<?php

include 'dbconnect.php';

$results = $conn->query("SELECT * from Names");

echo '<html><h2> Is this thing on?</h2></html>';
echo '<table id ="resultstable"><tr>';

$numfields = 2;

echo '<html><p> Number of Fields: ' . $numfields . '</p></html>';

//for($i=0; $i<$numfields; $i++)
//{
    //echo '<html><p>Inside For Loop before fetch field</p></html>';
    //$fieldinfo = mysqli_fetch_field_direct($results, $i);
    //echo '<html><p>Inside For Loop before print field name</p></html>';
    //echo '<td>' .$fieldinfo->name. '</td>';
//}

echo '</tr>'
?>

<?php

while($row = $results->fetch_assoc()) {
	echo '<p id="firstname">' . $row['first'] . '</p>';
	echo '<p id="lastname">&ndash;' . $row['last'] . '</p>';
}

echo '</table>';
?>