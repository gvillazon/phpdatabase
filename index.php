<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';
 $servername = "172.25.35.20";
 $username = "root";
 $password = "Ntrvl12#";
 $dbname = "db";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 
 echo "Connected successfully<br><br>";
 $sql = "SELECT PersonID, LastName, FirstName FROM Persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "PersonID: " . $row["PersonID"]. " - LastName: " . $row["LastName"]. " " . $row["FirstName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close(); 
 ?> 
 </body>
</html>
