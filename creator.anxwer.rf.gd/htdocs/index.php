<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="resources/css/styles.css" >

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  
    <title>Anxwer Creator</title>
  </head>
  <body>
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#" class="font-weight-bold">
                    Anxwer / Creators
                </a>
            </li>
            <li>
                <a href="#">Articles </a>
            </li>
            <li>
                <a href="articles-published.php"  class="pl-4">Published Articles </a>
            </li>
            <li>
                <a href="pages/create.php"  class="pl-4">Create New Article </a>
            </li>
            <li>
                <a href="#">User Stories </a>
            </li>
            <li>
                <a href="stories-published.php" class="pl-4">Published Stories </a>
            </li>
            <li>
                <a href="stories-approval.php" class="pl-4">Stories Approval </a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
        <div class="row border-bottom shadow p-3 tops">
                <div class="col-8 ">

                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> MENU</a>

                </div>

                <div class="col-4 text-right">
                <form class="form-inline d-flex justify-content-center md-form form-sm">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                        aria-label="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>

                </div>
            </div>

            <div class="row shadow mt-3 tops list-data" >
                <div class="col p-2 text-center">
                    <div > Please choose a tab on the sidebar. </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
    </script>

   </body>
</html>