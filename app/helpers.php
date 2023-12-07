<?php
	
	function dateDiff($date1, $date2){
		//$timeDiff = abs($date2) - abs($date1);
		$date1 = new DateTime($date1);
		$date2 = new DateTime($date2);
		$interval = $date1->diff($date2);
		//echo $interval->days;
		//$numberDays = $timeDiff/86400;
		//$numberDays = intval($numberDays);	
		return $interval->days;
	}

?>