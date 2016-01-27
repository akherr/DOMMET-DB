<?php

include 'dbconnect.php';

$results = $conn->query( 'SELECT * from Names' );

echo '<table id ="resultstable"><tr>';

$numfields = mysql_num_fields($results);

for($i=0; $i<numfields; $i++)
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

<?php
      ini_set('date.timezone','America/New_York');
      echo "Last modified: ", date("Y.M.d (D) H:i.", filemtime(__FILE__)), "<br />\n";
      error_reporting (E_ALL|E_WARNING|E_PARSE);
      show_source(__FILE__);
    ?>