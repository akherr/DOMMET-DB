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

<?php
      ini_set('date.timezone','America/New_York');
      echo "Last modified: ", date("Y.M.d (D) H:i.", filemtime(__FILE__)), "<br />\n";
      error_reporting (E_ALL|E_WARNING|E_PARSE);
      show_source(__FILE__);
    ?>