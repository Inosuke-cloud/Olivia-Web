


<?php


    if (isset($_POST['approve']))
    {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $email = $_POST["email"];
    $content = $_POST["content"];

    }
    
   
    
    include ('dbconfig.php');
    
    $result=mysqli_query($connect,"SELECT * FROM stories where `stories`.`id` = $id");
    $data=mysqli_fetch_assoc($result);

    $origin=$data['tanggal'];

    mysqli_query($connect, " SET SESSION time_zone = '+7:00' " );

    
    mysqli_query($connect, "UPDATE `stories` SET  `judul` = '".$title."', `isi` = '".$content."', `author` = '".$author."', `email` = '".$email."', `tanggal` ='".$origin."', `approval_status` = 1 WHERE `stories`.`id` = ".$id );





    
    
    header('Location: ../stories-approval.php');

?>