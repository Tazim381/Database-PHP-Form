<?php   
   $title = "index";
   include 'include/header.php';
?>
    <?php 
    echo 'This is php';
    echo '<br/>';
    echo 'Second Line';
        
       echo '<br/>';
       //declare variable
       $name = 'tazim';
       $age = 21;

       
       echo "<h1 style ='color:green'>My name is ".$name." </h1>";
       echo "<h1>My age is $age </h1>";
      
     ?>

     <?php require 'include/footer.php'; ?>
<body>
     <button type="button" class="btn btn-dark">CLick Me </button>

<button type="button" class="btn btn-warning">Download now</button>

<button type="button" class="btn btn-success">View Pages</button>
<a href="https://www.geeksforgeeks.org" class ="btn btn-success">GeeksForGeeks</a>


    
</body>
