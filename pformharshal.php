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
      width: 900px;
      height: 1100px;
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
      border: none;
   }

</style>


<div class="container">
<body bgcolor="wheat"> 
<h1 style="text-align: center;">Proctor Form</h1>  
<br>  
<br> 
<form action="submitpform.php" method="post">

<label> Last Name: </label>         
<input type="text" name="lastname" placeholder="Last Name" required>  
<label> First Name </label>         
<input type="text" name="firstname" placeholder="First Name" required> <br>
<label> Middle Name: </label>     
<input type="text" name="middlename" placeholder="Middle Name" required> 
<label> Mother's Name: </label>         
<input type="text" name="mothername" placeholder="Mother's Name" required><br><br>  

<label>Address</label>  
<br>  
<textarea cols="30" rows="5" name="address" value="address" placeholder="Enter the Current Address" style="width: 50%;">  
</textarea>  
<br> <br>
<label>City Name</label>
<input type="text" name="cityname" required>
<label>Pincode</label>
<input type="int" name="pincode" required>
<br><br>

<label>Student's Phone number :</label>    
<input type="text" name="sphone" >
<label>Father's Phone number :</label>  
<input type="text" name="fphone" ><br>
<label>Mother's Phone number :</label>    
<input type="text" name="mphone" ><br><br> 

<label>Parent's Email:</label>  
<input type="email" id="email" placeholder="Enter Parent's email-id" name="pemail" >
<label>Student's Email:</label>  
<input type="email" id="email" placeholder="Enter your email-id" name="semail" > <br><br>


<label for="gender">Gender:</label>
<select name="gender" id="gender">
<option value="Male">Male</option> 
<option value="Female">Female</option>  
<option value="Other">Other</option>      
</select>

<label for="adcategory">Admission Category:</label>
<select name="adcategory" id="adcategory">
<option value="General">General</option> 
<option value="SC">SC</option>  
<option value="ST">ST</option>  
<option value="OBC">OBC</option>  
<option value="Phisically Challenged">Phisically Challenged</option>    
</select>

<label for="bloodgroup">Blood Group:</label>
<select name="bloodgroup" id="bloodgroup">
<option value="A+">A+</option>  
<option value="A-">A-</option>  
<option value="B+">B+</option>  
<option value="B-">B-</option>
<option value="O+">O+</option>    
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>
    
<label>Hobbies:</label>  
<input type="text" name="hobbies"> <br><br>   
<button type="submit" class="submit">Submit</button>  
</form>  
</body>
</div> 
</html>  