<html>
<body>
<?php
$dbhost = getenv('DATABASE_SERVICE_NAME');
$dbuser = getenv('MYSQL_USER');
$dbpwd = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');
printf("information host %s user %s, password %s db %s\n", $dbhost, $dbuser, $dbpwd, $dbname);

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
</body>
</html>
