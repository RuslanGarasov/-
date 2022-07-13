<?php

/*$array = array (array ('item 1',
	'item 2',
	'item 3',
	'item 4',
	'item 5',
	'item 6',
	'item 7',
	'item 8',
	'item 9',
	'item 10',
	'item 11',
	'item 12',
	'item 13',
	'item 14',
	'item 15',
	'item 16',
	'item 17',
	'item 18',
	'item 19',
	'item 20',), array ("Example"));

for ($i = 0; $i < count($array); $i++) {
	for ($j = 0; $j < count ($array[$i]); $j++) {
	   echo $array[$i][$j]."  ";
    }
    echo "<br />";
}

?>*/

$array2 = [
	['item 2', 'item 3', 'item 4', 'item 5'],
	['item 6', 'item 7', 'item 8', 'item 9',],
	['item 10', 'item 11', 'item 12','item 13',]
];

echo '<table border="1">';

for ($i = 0; $i < count($array2); $i++) {

echo '<tr>';

for ($j = 0; $j < count($array2[$i]); $j++) {
  echo '<td>';
     echo $array2[$i][$j];
    echo '</td>';

  

echo '</tr>';

}


echo '</table>';

}

function myEcho() {

echo "Halo Wrold";

}

myEcho(); 

?>

