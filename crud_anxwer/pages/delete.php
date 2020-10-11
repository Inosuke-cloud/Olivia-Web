<?php

    function removeDirectory($path) {

	$files = glob($path . '/*');
	foreach ($files as $file) {
		is_dir($file) ? removeDirectory($file) : unlink($file);
	}
	rmdir($path);

    return;
    }

    include 'dbconfig.php';
                        
    if (isset($_POST['id']))
    {
        $id = $_POST["id"];
    }


    $result=mysqli_query($connect,"SELECT * FROM articles where `articles`.`id` = $id");
    $data=mysqli_fetch_assoc($result);

    
    $author = $data["author"];
    $title = $data["judul"];

    removeDirectory("../articles/".$author." - ".$title);
    mysqli_query($connect,"DELETE FROM `articles` WHERE `id` = ".$id);

?>