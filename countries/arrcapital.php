<?php
 $ceu = array('Italy' =>'Rome', 
 			  'Luxembourg'=>'Luxembourg',
 			  'Belgium'=>'Brussels',
 			  'Denmark'=>'Copenhagen',
 			  'Finland'=>'Helsinki',
 			  'France'=>'Paris',
 			  'Slovakia'=>'Ljubljana',
 			  'Germany'=>'Berlin',
 			  'Greece'=>'Athens',
 			  'Ireland'=>'Dublin',
 			  'Netherland'=>'Amsterdam',
 			  'Portugal'=>'Lisbon',
 			  'Spain'=>'Madrid',
 			  'Sweden'=>'Stockholm',
 			  'United Kindom'=>'London',
 			  'Cyprus'=>'Nicosia',
 			  'Lithuania'=>'Vilnius',
 			  'Czech Republic'=>'Prague',
 			  'Estonia'=>'Tallin',
 			  'Hungary'=>'Budapest',
 			  'Latvia'=>'Riga',
 			  'Malta'=>'Valetta',
 			  'Austria'=>'Vienna',
 			  'Poland'=>'Warsaw');
 			echo "<h2><u>COUNTRIES AND THERE CAPITALS</u></h2>";
 			echo "<table width='400' style ='border-bottom:1px solid #000000;'>
 						<th align ='left'>Country</th>
 						<th align='right'>Capital</th>
 				</table>";
 foreach ($ceu as $key => $value) {
 			echo "<table width='400'>
 						<tr>
 						<td align='left'>".$key."</td>
 						<td align='right'>".$value."</td>
 						</tr>
 				</table>";
 	//echo  $key . "&emsp;&emsp;&emsp;&emsp;".$value."<br />";
 }
?>