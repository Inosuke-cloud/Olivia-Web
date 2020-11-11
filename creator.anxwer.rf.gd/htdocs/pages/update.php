<?php


    if (isset($_POST['update']))
    {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];
    $image = $_FILES["image"];
    $document = $_FILES["document"];
    }
    
    
    $dft_img = "articles/default/image.jpg";
    $dft_doc = "articles/default/document.pdf";

    if (!empty($image["name"])){
        move_uploaded_file($image["tmp_name"], "../articles/".$author."/".$image["name"]);
        $img = "articles/".$author."/".$image["name"];
    } else {
        $img = $dft_img;  
    }

    if (!empty($document["name"])){
        move_uploaded_file($document["tmp_name"], "../articles/".$author."/".$document["name"]);
        $doc = "articles/".$author."/".$document["name"];
    } else {
        $doc = $dft_doc;  
    }
    
    include ('dbconfig.php');
    
    $result=mysqli_query($connect,"SELECT * FROM articles where `articles`.`id` = $id");
    $data=mysqli_fetch_assoc($result);

    $origin=$data['tanggal'];

    $content .= "Dibuat : ".$origin;

    mysqli_query($connect, " SET SESSION time_zone = '+7:00' " );

    mysqli_query($connect, "UPDATE `articles`  SET `judul` = '".$title."', `isi` = '".$content."', `author` = '".$author."', `tanggal` = NOW(), `image` = '".$img."', `doc` = '".$doc."' WHERE `articles`.`id` = ".$id );


    

    header('Location: ../');



?>