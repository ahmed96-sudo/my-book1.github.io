<?php
$conn = mysqli_connect("sql103.byetcluster.com","epiz_26801984","WZR8JhO34x8","epiz_26801984_msg");
if (!$conn) {
  die("Connection Failed ". mysqli_connect_error());
}
$username = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$msg = mysqli_real_escape_string($conn, $_REQUEST['message']);

// attempt insert query execution
$sql = "INSERT INTO messages (username, email, msg) VALUES ('$username', '$email', '$msg');";
if(mysqli_query($conn, $sql)){
    echo "<h1>Records added successfully.</h1><br><a href='index.html'>Return to Home</a>";
} else{
    echo "ERROR: Could not able to execute " . mysqli_error($conn);
}
mysqli_close($conn);

?>