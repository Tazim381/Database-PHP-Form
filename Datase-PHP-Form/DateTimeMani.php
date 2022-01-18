<?php  
$title = "Date Time";  
   include 'include/header.php';
?>
    
<h1> Date Time Manipulation </h1>
<?php   

echo "<hr/>";
$date = getdate();
echo $date['mday'].'<br/>';
echo $date['mon'].'<br/>';
echo $date['year'].'<br/>';
echo 'Todays date is '.date ('Y-m-d').'<br/>';

echo time();
echo "<hr/>";
?>

</body>
</html>