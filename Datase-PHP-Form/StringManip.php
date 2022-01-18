<?php  
$title = "String";  
   include 'include/header.php';
?>
<body>

   <h1> Php String Manipuation</h1>
    <?php  
    echo '<hr/>';
    $st1 = "Students who come let";
    $st2 ="students who come first,they are rocks";
    $tazim = "This is tazim";
    echo ucfirst($st1)." But the ".'</br>';
    echo ucwords($st2)."</br>";
    echo strtoupper($tazim);
    echo '<hr/>';
    

    


    
    ?>
    
</body>
</html>