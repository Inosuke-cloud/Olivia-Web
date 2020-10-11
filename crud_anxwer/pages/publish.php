<?php


    if (isset($_POST['publish']))
    {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];
    $image = $_FILES["image"];
    $document = $_FILES["document"];
    }
    
    
    mkdir("../articles/".$author." - ".$title);

    $dft_img = "articles/default/image.jpg";
    $dft_doc = "articles/default/document.pdf";

    if (!empty($image["name"])){
        move_uploaded_file($image["tmp_name"], "../articles/".$author." - ".$title."/".$image["name"]);
        $img = "articles/".$author." - ".$title."/".$image["name"];
    } else {
        $img = $dft_img;  
    }

    if (!empty($document["name"])){
        move_uploaded_file($document["tmp_name"], "../articles/".$author." - ".$title."/".$document["name"]);
        $doc = "articles/".$author." - ".$title."/".$document["name"];
    } else {
        $doc = $dft_doc;  
    }
    
    include ('dbconfig.php');

    

    

    mysqli_query($connect,"INSERT INTO `articles` (`id`, `judul`, `isi`, `author`, `tanggal`, `image`, `doc`)
                                         VALUES (NULL, '".$title."', '".$content."', '".$author."', NOW(), '".$img."', '".$doc."' )");
        



    

    header('Location: ../');





?>