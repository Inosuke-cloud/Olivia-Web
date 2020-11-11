

<?php 

include "pages/dbconfig.php";
$result=mysqli_query($connect,"SELECT * FROM stories WHERE approval_status = 1");

?>

<?php

$i=1;

while($data=mysqli_fetch_assoc($result)) {
    //print_r($brs);

    echo ('<tr>');
    echo ('<td>'.$data["id"].'</td>');
    echo ('<td>'.$data["author"].'</td>');
    echo ('<td>'.$data["judul"].'</td>');
    echo ('<form method="POST" action="pages/sp_manage.php" id="manage'.$data["id"].'">');
    echo ('<input type="hidden" name="id" value="'.$data["id"].'">');
    echo ('</form>');
    echo ('<form method="POST" action="pages/s_delete.php" id="delete'.$data["id"].'">');
    echo ('<input type="hidden" name="id" value="'.$data["id"].'">');
    echo ('</form>');
    echo ('<td>');
    echo ('<div class="btn btn-group m-0 p-0">');
    echo ('<button form="manage'.$data["id"].'" class="btn btn-primary" name="manage">Manage</button>');
    echo ('<button onclick="hapus('.$data["id"].')" id="delete" class="btn btn-danger" name="delete">Delete</button>');
    echo ('</div');
    echo ('</td>');
    echo ('</tr>');
}
?>


<script type="text/javascript">
    

function hapus(pid) {
    var proceed = confirm('Yakin ingin menghapus artikel ini?');
    var id = pid;

    if (proceed) {
        $.ajax({
            type: 'post', // the method (could be GET btw)
            url: 'pages/s_delete.php', // The file where my php code is
            data: {
                'id': id // all variables i want to pass. In this case, only one.
            },
            success: function(data) { // in case of success get the output, i named data
                alert('Artikel dihapus') // do something with the output, like an alert
                location.reload();
            }
        });
    } else {
        
    }

    
}


</script>