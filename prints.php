<?php

include 'dbconnect.php';

$results = $db_connection->query( 'SELECT * from Suppliers' );

echo '<table id ="resultstable"><tr>';

$numfields = mysql_num_fields($results);

for($i=0; $i<numfields; $i++)
{
    echo '<td>' . mysql_field_name($results, $i). '</td>';
}
?>

<?php

foreach ( $results as $row ) {
	echo '<p id="quote">' . $row['testimonial'] . '</p>';
	echo '<p id="author">&ndash;' . $row['author'] . '</p>';
}

echo '</table>';
?>

