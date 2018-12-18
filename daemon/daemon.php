<?php
function run() {
	$conn = mysqli_connect('db', 'user', 'test', "myDb");
    while (true) {
        printData($conn);
		sleep(1000);
	}
}

function printData($conn){
	$query = 'SELECT * From Person';
	$result = mysqli_query($conn, $query);
	while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
		foreach ($value as $element) {
			print $element;
		}
	}
}

run();
