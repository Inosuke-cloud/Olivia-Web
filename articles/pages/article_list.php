<!-- <?php
 include "dbconfig.php"; 
?> -->

<!-- ITAMPILAN LIST -->
<section id="header-desktop">
    <div class="row pt-2 pb-2 mx-auto" style="width: 80%;">
        <?php
        $i = 1;
        while ($data = mysqli_fetch_assoc($r)) {
            if ($i == 3) {
                $i -= 2;
            }
        ?>
            <div class="col-md-4 col-sm-6 col-xs-12 pt-5">
                <a class="detail" style="text-decoration: none;" href="../../article_detail.php?id=<?= $data['id']; ?>">
                    <div class="box<?= $i++; ?> mx-auto ">
                        <div class="row p-4">
                            <div class="col text-white text-right">
                                <span style="font-size: 0.8em;"><?= $data['tanggal']; ?></span>
                            </div>
                        </div>

                        <div class="row p-4 pb-auto">
                            <div class="col text-white font-weight-bolder">
                                <span style="font-size: 2em;"><?= $data['judul']; ?></span>
                            </div>
                        </div>

                        <div class="row p-4">
                            <div class="col text-white">
                                <span style="font-size: 0.8em; clear:both;"><?= $data['author']; ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</section>