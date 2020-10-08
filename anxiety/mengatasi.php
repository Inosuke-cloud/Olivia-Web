<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxwer - Anxiety</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM CSS -->

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <link rel="stylesheet" href="../css/navbarStyle.css">
    <link rel="stylesheet" href="../css/style2.css">
    
</head>
<body style="overflow-x: hidden;">
    <!-- NAVBAR -->
    <section id="navbar" >
            <!-- NAVBAR -->
    <style>
    .dropdown {
        position: relative;
        display: inline-block;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 190px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }
    
    .dropdown:hover .dropdown-content {
        display: block;
        transition: 0.5s;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
</style>
<nav>
    <div class="logo">
        <h4><a href="../index.php" style="text-decoration:none;color:black;">Anxwer</a></h4>
    </div>
    <ul>
        <li class="nav-link-text">
            <a class="text-decoration-none" href="../index.php">Home</a></li>
        <li class="dropdown">
            <a href="../anxiety.php" class="no-bortom-nav text-decoration-none">Anxiety <span class="fa fa-angle-down"></span></a>
            <div class="dropdown-content">
                <a class="no-bortom" href="ciri.php">Ciri-ciri</a>
                <a class="no-bortom" href="pemicu.php">Pemicu</a>
                <a class="no-bortom" href="hindari.php">Hal yang perlu dihindari</a>
                <a class="no-bortom" href="mengatasi.php">Cara mengatasi</a>
            </div>
        </li>
        <li class="nav-link-text">
            <a class="text-decoration-none" href="../articles.php">Artikel</a>
        </li>
        <li class="nav-link-text">
            <a class="text-decoration-none" href="../about.php">Tentang</a>
        </li>
        <li class="nav-link-text">
            <a class="text-decoration-none" href="../contact.php">Kontak</a>
        </li>
    </ul>

    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
    </section>

    <section id="header" style="padding-top: 7em;"> 
        <?php

        include ('../detail_anxiety/mengatasi.html');

        ?>
    </section>
    
    <!-- Footer DESKTOP-->
    <section id="footer" style="padding-top: 10em;">
        <?php

        include ('../homepage/footer.html');

        ?>
    </section>

    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>

