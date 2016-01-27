<?php

include 'dbconnect.php';

$results = $conn->query( 'SELECT * from Names' );

echo '<html><h2> Is this thing on?';
echo '<table id ="resultstable"><tr>';

$numfields = mysql_num_fields($results);

for($i=0; $i<$numfields; $i++)
{
    echo '<td>' . mysql_field_name($results, $i). '</td>';
}
?>

<?php

foreach ( $results as $row ) {
	echo '<p id="firstname">' . $row['first'] . '</p>';
	echo '<p id="lastname">&ndash;' . $row['last'] . '</p>';
}

echo '</table>';
?>