<?php
/* Design a pyramid that will look like this:
*
**
***
****
*****
using php
*/
for ($i = 0; $i <= 4; $i++){
	for($j=0; $j <= $i; $j++){
		echo "*";
	}
	echo "<br />";
}
?>