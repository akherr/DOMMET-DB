<?php

include 'dbconnect.php';

$results = $conn->query("SELECT * from Names");

echo '<html><h2> Is this thing on?</h2></html>';
echo '<table id ="resultstable"><tr>';

$numfields = mysql_num_fields($results);

echo '<html><p> Number of Fields: ' . $numfields . '</p></html>';

for($i=0; $i<$numfields; $i++)
{
    echo '<td>' . mysql_field_name($results, $i). '</td>';
}

echo '</tr>'
?>

<?php

foreach ( $results as $row ) {
	echo '<p id="firstname">' . $row['first'] . '</p>';
	echo '<p id="lastname">&ndash;' . $row['last'] . '</p>';
}

echo '</table>';
?>