<?php
function run() {
	while (true) {
        printData();
		sleep(1000);
	}
}

function printData(){
	$conn = mysqli_connect('db', 'user', 'test', "myDb");
	$query = 'SELECT * From Person';
	$result = mysqli_query($conn, $query);
	while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
		foreach ($value as $element) {
			print $element;
		}
	}
}

run();
