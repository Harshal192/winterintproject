<?php
session_start();
?>

<html>
<style>
   body {
      font-family: 'Inconsolata', monospace;
      background-color: #116466;
      display: flex;
      justify-content: center;
      align-items: center;
   }
   .container {
      width: 200px;
      height: 320px;
      padding: 70px;
      background-color: #edc7b7;
      box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, .4);
   }
   input[type=text], input[type=password], input[type=email], input[type=int], textarea {
      font-family: 'Inconsolata', monospace;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
   }
   .submit{
      background-color: #116466;  
      color: white;  
      padding: 16px 20px;  
      margin: 8px 0;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      border: none;
   }


</style>

<body>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username"><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"><br><br>

    <center><button type="submit" class="submit" name="submit">Login</button><br>
    <p>Don't have an Account?</p>
    <a href="http://localhost/intproject/createuser.php">Register</a></center>
    
  </div>


</form>

</body>

</html>
<?php
if (isset($_POST['submit'])) {

    $conn = mysqli_connect("localhost", "root", "", "internship", "3307");
    if (!$conn) {
        echo "Can't Connnect Database" . mysqli_connect_error();
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT username,password FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);


    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {

                session_start();
                $_SESSION['user'] = $username;
                header("location: pformharshal.php");
            } else {
                echo "<script>alert('Invalid Username or Password');
                window.location.href = 'http://localhost/intproject/login.php';
                </script>";
            }

        }
    } else {
        echo "<script>alert('User does not exist, Please Register'); 
        window.location.href = 'http://localhost/intproject/login.php';
        </script>";
        
    }

}
?>