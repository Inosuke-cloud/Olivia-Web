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
    <link rel="stylesheet" href="../resources/css/styles.css" >

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <title>Manage Post</title>
  </head>
  <body>
  <div id="wrapper">

    <?php 
        include 'dbconfig.php';
                    
        if (isset($_POST['manage']))
        {
            $id = $_POST["id"];
        }

        $result=mysqli_query($connect,"SELECT * FROM stories WHERE `stories`.`id` = $id");
        $data=mysqli_fetch_assoc($result);

        $title=$data['judul'];
        $content=$data['isi'];
        $author=$data['author'];
        $email=$data['email'];
        
    ?>

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
                <a href="../articles-published.php"  class="pl-4">Published Articles </a>
            </li>
            <li>
                <a href="create.php"  class="pl-4">Create New Article </a>
            </li>
            <li>
                <a href="#">User Stories </a>
            </li>
            <li>
            <li>
                <a href="../stories-published.php" class="pl-4">Published Stories </a>
            </li>
            <li>
                <a href="../stories-approval.php" class="pl-4 onpage">Stories Approval </a>
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
                    <button class="btn btn-success font-weight-bold text-white" name="approve" form="story-approval" id="approve"> APPROVE !</button>
                </div>
            </div>

            <div class="row shadow mt-3 tops list-data" >
                <div class="col p-3">
                    <form method="POST" enctype="multipart/form-data" action="approve.php" id="story-approval">
                        <div class="form-row">
                            <div class="col">
                                <?php echo ('<input type="hidden" name="id" value="'.$data["id"].'">'); ?>
                            
                                <label for="form-author">Author</label>
                                <input type="text" class="form-control" id="form-author" name="author" value="<?php echo $author ?>" readonly>  
                            </div>
                            <div class="col-8">                      
                            
                                <label for="form-email">Author Email</label>
                                <input type="text" class="form-control" id="form-email" name="email" value="<?php echo $email ?>" readonly> 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="form-judul">Judul</label>
                                <input type="text" class="form-control" id="form-judul" name="title" value="<?php echo $title ?>">                          
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-content">Story</label>
                            <textarea class="form-control" id="form-content" name="content" style="height: 250px; resize: none;"><?php echo $content ?></textarea>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });

    </script>

   </body>
</html>