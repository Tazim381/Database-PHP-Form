<?php

    $conn = mysqli_connect("localhost", "root", "", "tazim");
    if ($conn) {
        $query = "SELECT * FROM studentinfo";
        $res = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($res)){
            ?> 
            <div style="display: flex; justify-content: center">
            <table  border="3" style="width: 40%;">
                <tr>
                    <th style="width: 30%;"><?php echo $row['Std_id'] ?></th>
                    <th style="width: 30%;"> <?php echo $row['Std_name'] ?> </th>
                    <th style="width: 40%;" > <?php echo $row['Std_sub'] ?></th>
                </tr>
            </table>
            </div>
            
            <?php
        }
    }
    else echo "N";
?>