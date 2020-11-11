<!-- ITAMPILAN LIST -->
 <section id="header-desktop">
     <div class="row pb-2 mx-auto" style="width: 80%;">
         <?php
         $i = 2;

         while ($data = mysqli_fetch_assoc($r)) {
             if ($i == 4) {
                 $i -= 2;
             }
         ?>
             <div class="col-lg-4 col-md-6 col-sm-12 bawah" style="margin-top: 2rem;">
                 <a class="detail" style="text-decoration: none;" href="stories-details.php?id=<?= $data['id']; ?>">
                     <div class="box<?= $i;?> mx-auto ">
                         <div class="row p-4">
                             <div class="col text-white text-right">
                                 <span style="font-size: 0.8em;"><?= $data['tanggal']; ?></span>
                             </div>
                         </div>

                         <div class="row p-4 pb-auto" style="height: 50%;">
                             <div class="col text-white font-weight-bolder">
                                 <span style="font-size: 1.3em;"><?= $data['judul']; ?></span>
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

         <?php $i++; } ?>
     </div>
 </section>