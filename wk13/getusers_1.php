<form action="getusers_1.php" method="get">
    <label for="fname">Search</label>
    <input type="text" name="valueToSearch">
    <input type="submit" name="search" value="Submit">
</form>

<?php
$servername = "localhost";
$username = "patrick";
$password = "admin";
$dbname = "mySchema";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Filter
if(isset($_GET['search'])){
    $valueToSearch =  $_GET['valueToSearch'];
    $sql = "SELECT * FROM users WHERE firstname = '$valueToSearch' AND active = '1'";
    $result = mysqli_query($conn, $sql);
}
echo "<table>";
if (mysqli_num_rows($result) > 0) {
   // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td> id: ". $row["id"]. " Username: ". $row["username"]. " Email:" . $row["email"] . " Firstname:" . $row["firstname"] . " Lastname:" . $row["lastname"] . " Active:" . $row["active"] . "</td></tr>";
    }
}
echo "</table>";
mysqli_close($conn);
?>
