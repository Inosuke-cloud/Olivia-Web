<?php


    if (isset($_POST['send']))
    {
        $title = $_POST["judul"];
        $author = $_POST["author"];
        $email = $_POST["email"];
        $content = $_POST["isi"];    
    }
    
    
    include ('dbconfig.php');

    

    mysqli_query($connect, " SET SESSION time_zone = '+7:00' " );

    mysqli_query($connect,"INSERT INTO `stories` (`id`, `judul`, `isi`, `author`, `email`, `tanggal`, `approval_status`)
                                         VALUES (NULL, '".$title."', '".$content."', '".$author."', '".$email."', NOW(), '0' )");
        



    

    header('Location: ../stories.php');





?>