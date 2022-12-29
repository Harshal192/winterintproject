<?php

    $conn = mysqli_connect("localhost", "root", "", "internship","3307");
    if(!$conn){
        echo "Can't Connnect Database" . mysqli_connect_error();
        exit;
    }

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$mothername = $_POST['mothername'];
$address = $_POST['address'];
$cityname = $_POST['cityname'];
$pincode = $_POST['pincode'];
$sphone = $_POST['sphone'];
$fphone = $_POST['fphone'];
$mphone = $_POST['mphone'];
$pemail = $_POST['pemail'];
$semail = $_POST['semail'];
$gender = $_POST['gender'];
$adcategory = $_POST['adcategory'];
$bloodgroup = $_POST['bloodgroup'];
$hobbies = $_POST['hobbies'];


$query = "INSERT INTO pform(lastname,firstname,middlename,mothername,address,cityname,pincode,sphone,fphone,mphone,pemail,semail,gender,adcategory,bloodgroup,hobbies) VALUES('$lastname','$firstname','$middlename','$mothername','$address','$cityname','$pincode','$sphone','$fphone','$mphone','$pemail','$semail','$gender','$adcategory','$bloodgroup','$hobbies');";
$result = mysqli_query($conn, $query);
if(!$result) {
    echo "query issue", mysqli_error($conn);
}
else{
    echo "<script>
    alert('Successfully Filled');
    window.location.replace('index.php');

    </script>";
}

?>