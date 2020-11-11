<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO + FB SHARE PLUGIN REQUIREMENT -->

<?php
  include "dbconfig.php";

  $idnya = $_GET['id'];
  $r = mysqli_query($connect, "SELECT * FROM articles WHERE id = '" . $idnya . "'");
  $data = mysqli_fetch_assoc($r);

  $title = $data["judul"];
  $img = $data["image"];

  ?>
 
  <meta property="og:url"           content="https://www.anxwer.rf.gd/<?= $uri = $_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Anxwer <?= $title ?>" />
  <meta property="og:description"   content="Dapatkan informasi terkini mengenai kesehatan mental" />
  <meta property="og:image"         content="https://creator.anxwer.rf.gd/<?= $img ?>" />

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<!-- https://developers.facebook.com/docs/plugins/share-button/ -->
<!-- https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview -->

<!-- ANIMASI -->
<!-- https://www.w3schools.com/jquery/jquery_fade.asp -->
  <title>Detail Article</title>
  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

  <!-- FONTAWESOME ICON -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/navbarStyle.css">
  <link rel="stylesheet" href="css/articleStyle.css"> 
  <!-- CSS only -->

</head>

<body>

  <?php
  include "dbconfig.php";

  $idnya = $_GET['id'];
  $r = mysqli_query($connect, "SELECT * FROM articles WHERE id = '" . $idnya . "'");
  $data = mysqli_fetch_assoc($r);
  ?>

    <section id="header">
      <?php include('homepage/navbar.html'); ?>
    </section>

  <!-- TAMPILAN TABLET KEATAS -->
  <section class="d-none d-sm-block">
  <div style="margin: 7em 3em;">
    <div class="container" style="margin: 0 auto; padding-bottom: 2em;">
<!-- https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview -->
      <!-- HEADER -->
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <!-- PEMANGGILAN JUDUL ARTIKEL -->
            <!-- untuk page view list article file nya yg mana? -->
            <!-- untuk page view list article file nya yg mana? -->
            <div class="path" style="font-size: 0.9vw;"><b>home/article/</b><?= $data['judul']; ?></div>
              <!-- Your share button code -->
              <!-- <div >https://creator.anxwer.rf.gd/<?= $img ?></div> -->
              <script src="https://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
              <div class="fb-share-button"
              data-href="https://www.anxwer.rf.gd/<?= $uri = $_SERVER['REQUEST_URI']; ?>" 
              data-layout="button_count" style="padding-top: 1rem">
              </div>
            <div class="judul" style="font-size: 2.5em; font-weight: 900;padding-top: 1rem"><?= $data['judul']; ?></div>
          </div>
        </div>
        <!--<div class="col-md-2 mt-5">-->
          <!-- BUTTON BUAT DOWNLOAD -->
          <!--<button class="button"><a href="http://creator.anxwer.rf.gd/<?= $data['doc']; ?>" style="text-decoration: none; color: white; font-size: 1vw; position:relative;" download>Download PDF</a></button>
        </div>-->
      </div>

        <!-- GAMBAR -->
        <div class="row">
            <div class="col-md-12">
                <div class="gambar text-center">
                    <img style="margin-top: 4em;width: 80%; border-radius:10px; box-shadow: 20px 10px rgba(102, 95, 95, .25); background-size: cover;" src="http://creator.anxwer.rf.gd/<?= $data['image']; ?>">
                </div>
            </div>
        </div> 

      <!-- CONTENT -->
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <!-- PEMANGGILAN ISI KONTEN -->
            <p style="font-size: 1.2vw; text-align: justify; padding: 5em 3em;"><?= nl2br($data['isi']); ?></p>
          </div>
        </div>
      </div>
    
    
        <!-- DOWNLOAD -->
        <div class="row">
            <div class="col-md-12">
                <div class="download text-center">
                    <button class="button" style="padding: 10px;">
                        <a href="http://creator.anxwer.rf.gd/<?= $data['doc']; ?>" style="text-decoration: none; color: white; font-size: 0.8em;" download>
                            <span style="padding: 10px 10px;"><i class="fa fa-file-pdf-o"  aria-hidden="true"></i>&ensp; Unduh PDF </span> 
                        </a>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
    <!-- GAMBAR -->
    <!--<div class="footer">-->
      <!-- SESUAIN SUBDOMAIN -->
      <!--<img class="rounded-circle" style="background-size: cover;" src="http://creator.anxwer.rf.gd/<?= $data['image']; ?>">
    </div>-->
<!-- http://localhost/test/articles/index_detail.php -->
</div>
</section>



  <!-- ------------------------------------------------------------------------------------------------------------ -->


  <!-- TAMPILAN MOBILE -->
  <section class="d-sm-none">
    <div class="item" style="margin: 7em 1em;">
        <div class="container pb-2" style="margin: 0 auto;width: 100%;"> 
            <!-- HEADER -->
            <div class="row">
                <div class="col-sm-6">
                <div class="path text-center" style="font-size: 1.8vw; padding: 3em 3em;">
                    <b>home/article/</b><?= $data['judul']; ?>
                </div>
                </div>
                <div class="col-sm-6">
                    <!--FILLER-->
                </div>
            </div>

            <!-- JUDUL -->
            <div class="row">
                <div class="col-sm-12">
                <div class="title text-center pl-3 pr-3 pt-5">
                    <div class="judulnya" style="font-size: 5vw; font-weight: 900; padding:0;"><?= $data['judul']; ?></div>
                    <hr>
                </div>
                </div>
            </div>

            <!-- GAMBAR -->
            <div class="row">
                <div class="col-sm-12">
                <div class="gambar text-center">
                    <img style="width: 80%; border-radius:10px; box-shadow: 20px 10px rgba(102, 95, 95, .25); background-size: cover;" src="http://creator.anxwer.rf.gd/<?= $data['image']; ?>">
                </div>
                </div>
            </div> 

            <!-- CONTENT -->
            <div class="row">
                <div class="col-sm-12">
                <div class="content p-4">
                    <p style="font-size: 3vw; padding: 0;"><?= nl2br($data['isi']) ?></p>
                    <hr>
                </div>
                </div>
            </div>

            <!-- DOWNLOAD -->
            <div class="row">
                <div class="col-md-12">
                    <div class="download text-center">
                        <button class="button mb-3" style="padding: 10px;">
                            <a href="http://creator.anxwer.rf.gd/<?= $data['doc']; ?>" style="text-decoration: none; color: white; font-size: 0.8em;" download>
                                <span style="padding: 10px 10px;"><i class="fa fa-file-pdf-o"  aria-hidden="true"></i>&ensp; Unduh PDF </span> 
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section id="footer">
    <?php include('homepage/footer.html'); ?>
</section>
  

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- https://freefrontend.com/css-page-transitions/ -->

  <!-- https://www.selbekk.io/blog/2019/08/how-to-fade-in-content-as-it-scrolls-into-view/ -->  <!-- https://freefrontend.com/css-page-transitions/ -->
  <script src="js/script.js"></script>
  <!-- CUSTOM JAVASCRIPT -->
</body>

</html>