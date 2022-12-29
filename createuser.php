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
   }
   a{
      padding: auto;
      width: 100%;
      margin: 8px 0;
      background-color: #116466;
      color: #edc7b7;
      display: flex;
      justify-content: center;
      align-items: center;
      border: none;
   }
   

</style>
<body>
    <form action="adduser.php" method="post">

  <div class="container">
   <a>Registration Form</a><br><br>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>

    <button type="submit" class="submit">Register</button><br><br>
  </div>

</form>

</body>

</html>
