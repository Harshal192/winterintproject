<?php
    $conn = mysqli_connect("localhost", "root", "", "internship","3307");
    if(!$conn){
        echo "Can't Connnect Database" . mysqli_connect_error();
        exit;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO user(username,password) VALUES('$username','$hash');";

$result = mysqli_query($conn, $query);
if(!$result) {
    echo "query issue", mysqli_error($conn);
}
else{
    echo "<script>
    alert('Successfully registered');
    window.location.replace('pformharshal.php');

    </script>";
}

?>