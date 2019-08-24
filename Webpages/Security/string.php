<?php
	function returnString($result, $key) {
		$arr = mysqli_fetch_assoc($result);
		return $arr[$key];
	}
?>
