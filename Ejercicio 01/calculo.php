<?php

if (isset($_POST["txtHoras"])) {
	$txtHoras = $_POST["txtHoras"];
	$txtCosto = $_POST["txtCosto"];


	$total = $txtCosto*$txtHoras;
	echo $total;
}

?>