<?php
include "articles/dbconfig.php";
// FUNGSI CARI
function cari($keyword)
{
    include "articles/dbconfig.php";
    $query = "SELECT * FROM articles WHERE judul LIKE '%$keyword%'";

    $result = mysqli_query($connect, $query);

    return $result;
}

// MEMANGGIL SEMUA DATA ARTIKEL BERDASARKAN UPDATE TERBARU
$r = mysqli_query($connect, "SELECT * FROM articles ORDER BY tanggal DESC");

// KETIKA TOMBOL CARI DI KLIK
if (isset($_POST['cari'])) {
    $r = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxwer Article</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="css/navbarStyle.css">
    <link rel="stylesheet" href="css/style2.css">
<!-- http://localhost/test/articles/index_detail.php -->
    <!-- CSS only -->
    

    <!-- JS, Popper.js, and jQuery -->
</head>

<body>

    <section id="header">
        <?php include('homepage/navbar.html'); ?>
    </section>

    <section id="header" style="padding-top: 3em;">
        <?php include('articles/pages/article_index_header.php'); ?>
    </section>

    <section id="header">
        <?php include('articles/pages/article_list.php'); ?>
    </section>

    <!-- FOOTER -->
    <section id="footer">
        <?php include('homepage/footer.html'); ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- CUSTOM JAVASCRIPT -->
    <script src="js/script.js"></script>
</body>

</html>