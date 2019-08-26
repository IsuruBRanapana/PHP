<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User definde functions</title>
</head>
<body>
	<?php 
		function GetMonth($monthVal=0){
			switch ($monthVal) {
				case '1':
					$monthName="duruthu";
					break;
				case '2':
					$monthName="Nawam";
					break;
				case '3':
					$monthName="Madin";
					break;
				case '4':
					$monthName="bak";
					break;
				case '5':
					$$monthName="vesak";
					break;
				case '6':
					$monthName="Poson";
					break;
				case '7':
					$monthName="esala";
					break;
				case '8':
					$monthName="Nikini";
					break;
				case '9':
					$monthName="binara";
					break;
				case '10':
					$monthName="vap";
					break;
				case '11':
					$$monthName="il";
					break;
				case '12':
					$monthName="uduwap";
					break;
				
				default:
					$monthName="Invalid month";
					break;
			}
			return $monthName;
		}
		echo GetMonth(6);
		echo "<br>";
		echo GetMonth(12);
		echo "<br>";
		echo GetMonth(15);
	 ?>
	
	<?php 
		//multipal parameters
		function getMont($monthVa=0,$yearVal=2016){
			switch ($monthVa) {
				case '1':
					$monthNam="duruthu";
					break;
				case '2':
					$monthNam="Nawam";
					break;
				case '3':
					$monthNam="Madin";
					break;
				case '4':
					$monthNam="bak";
					break;
				case '5':
					$$monthNam="vesak";
					break;
				case '6':
					$monthNam="Poson";
					break;
				case '7':
					$monthNam="esala";
					break;
				case '8':
					$monthNam="Nikini";
					break;
				case '9':
					$monthNam="binara";
					break;
				case '10':
					$monthNam="vap";
					break;
				case '11':
					$$monthNam="il";
					break;
				case '12':
					$monthNam="uduwap";
					break;
				
				default:
					$monthNam="Invalid month";
					break;
			}
			return $monthNam." ".$yearVal;
		}
		echo getMont(6,2019);
		echo "<br>";
		echo getMont(12,2001);
		echo "<br>";
		echo getMont(15);
	 ?>
	 <br>
	 <?php 
	 	$dName="google.lk";
	 	echo "{$dName} <br>";
	 	myFunc();
	 	function myFunc(){
	 		global $dName;
	 		echo "Inside function : {$dName} <br>";
	 	}
	  ?>
	 
</body>
</html> 