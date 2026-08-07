<?php
$mysqli = new mysqli_driver();
$mysqli->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$conn->set_charset("utf8");
		return $conn;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}

function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
