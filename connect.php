<?php
// Database connection variables
$serverName = "your_server_name";
$connectionOptions = array(
    "Database" => "your_database_name",
    "Uid" => "your_username",
    "PWD" => "your_password"
);

// Establish the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check if the connection is successful
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Perform SQL queries
$query = "SELECT * FROM your_table";
$result = sqlsrv_query($conn, $query);

// Process the query results
if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo $row['column_name'] . "<br>";
}

// Close the connection
sqlsrv_close($conn);
?>
