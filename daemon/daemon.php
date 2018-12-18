<?php
function run() {
	logMessage("Opening connection");
	$conn = mysqli_connect('db', 'user', 'test', "myDb");
	logMessage("Opened connection");
	while (true) {
		try {
			printData($conn);
		} catch (Exception $e) {
			logMessage($e->getMessage());
		}
		sleep(5);
	}
}

function printData($conn){
	$query = 'SELECT * FROM Person';
	$result = mysqli_query($conn, $query);
	if (!$result) {
		logMessage("Connection error");
		return;
	}
	while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
		logMessage("Selected data");
		foreach ($value as $element) {
			logMessage($element);
		}
	}
}

function logMessage($message) {
	$message = $message . "/n";
	print $message;
	$log = fopen("/var/log/roman/daemon.log", "w") or die("Unable to open log file!");
	fwrite($log, $message);
	fclose($log);
}

run();
