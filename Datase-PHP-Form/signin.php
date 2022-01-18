<?php
include('connection.php');

if(isset($_POST['submit']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "select * from employee";
    $res = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($res)){
        if ($email == $row['email'] && $password == $row['password']){
            echo "login successfully";
            $_SESSION['USER_NAME'] = $row['name'];
            header("location:home.php");
            die();
        } 
    }

}

?>


<form action="" method="post">
        <input type ="email" name ="email" placeholder="email"> <br>
        <input type ="password" name ="password" placeholder="password"> <br>
        <input type ="submit" name = "submit"/>


    </form>

    <a href="registration.php">For SignUp</a>
