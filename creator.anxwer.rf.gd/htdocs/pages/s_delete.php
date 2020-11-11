<?php

    include 'dbconfig.php';
                        
    if (isset($_POST['id']))
    {
        $id = $_POST["id"];
    }



    mysqli_query($connect,"DELETE FROM `stories` WHERE `id` = ".$id);

?>