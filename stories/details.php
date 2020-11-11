<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO + FB SHARE PLUGIN REQUIREMENT -->
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

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

<!-- https://codepen.io/timrijkse/pen/ALgZpp -->

<!-- ANIMASI -->
<!-- https://www.w3schools.com/jquery/jquery_fade.asp -->
  <title>Detail Stories</title>
  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <!-- FONTAWESOME ICON -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/navbarStyle.css">
  <link rel="stylesheet" href="stories/css/storiesDetails.css">
  <link rel="stylesheet" href="css/font.css">
  
<!-- rest in piece dulu -->
  <!-- CSS only -->
  

  

</head>

<body>
  <?php
  include "dbconfig.php";

  $idnya = $_GET['id'];
  $r = mysqli_query($connect, "SELECT * FROM stories WHERE id = '" . $idnya . "'");
  $data = mysqli_fetch_assoc($r);
  ?>

    <section id="header">
      <?php include('homepage/navbar.html'); ?>
    </section>

  <!-- TAMPILAN TABLET KEATAS -->
  <section class="d-none d-sm-block">
    <div class="container mb-3" style="padding-bottom: 2em;">
<!-- https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview -->
      <!-- HEADER -->
      <div class="row">
        <div class="col-md-10">
          <div class="title">
            <!-- PEMANGGILAN JUDUL ARTIKEL -->
            <div class="path" style="font-size: 0.9vw;"><b>home/stories/</b><?= $data['judul']; ?></div>
              <!-- Your share button code -->
              <script src="https://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
              <div class="fb-share-button"
              data-href="https://www.anxwer.rf.gd/<?= $uri = $_SERVER['REQUEST_URI']; ?>" 
              data-layout="button_count" style="padding-top: 1rem">
              </div>
            <div class="judul" style="font-size: 2.5em; font-weight: 900;padding-top: 1rem"><?= $data['judul']; ?></div>
          </div>
        </div>

      </div>

      <!-- CONTENT -->
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <!-- PEMANGGILAN ISI KONTEN -->
            <p style="padding: 5em 3em; font-size: 1.2vw"><?= nl2br($data['isi']); ?></p>
          </div>
        </div>
      </div>
    </div>

  </section>




  <!-- ------------------------------------------------------------------------------------------------------------ -->


  <!-- TAMPILAN MOBILE -->
  <section class="d-sm-none mx-4">
    <div class="container pb-2 mb-4">

      <!-- HEADER -->
      <div class="row">
        <div class="col-sm-12">
          <div class="path text-center" style="font-size: 1.8vw; padding-top: 3em; padding-bottom: 0;">
            <b>home/stories/</b><?= $data['judul']; ?>
          </div>
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



      <!-- CONTENT -->
      <div class="row">
        <div class="col-sm-12">
          <div class="content p-4">
            <p style="font-size: 3vw; padding: 0;"><?= nl2br($data['isi']) ?></p>
            <hr>
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
  <script>
    $(function() {
      $('#story').submit(function(event){
      if(!confirm("some text")){
            event.preventDefault();
          }
        });
    });
  </script>
</body>

</html>