<?php

include ("connection.php");
if(isset($_POST['submit']))
{

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO employee(name,email,password) VALUES('$name','$email','$password')";
    $res = mysqli_query($conn,$query);
    if($res) { echo "inserted";}
    else echo "Not inserted";
}

?>
  
  
  
  
  <form action="" method="POST"> 
     <a>Registration form </a><br>
     <input type="text" name ="username" placeholder="username"> <br>
        <input type ="email" name ="email" placeholder="email"> <br>
        <input type ="password" name ="password" placeholder="password"> <br>
        <input type ="submit" name = "submit"/>
    </form>

    <a href="signin.php">signin</a>
    

