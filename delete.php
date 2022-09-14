<?php
if($_POST){
  include "configuration.php";
  $hero_id=$_POST["hero_id"];
  $query="DELETE From heroes where id='$hero_id'";
  $result=mysqli_query($conn,$query);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
include "configuration.php";
?>

<main id="main">
         <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Delete Heroes</h2>

          <form action="delete.php" method="post"
          class="delete_hero_form">
          <label  class="label">Hero ID : </label>
          <input type="text" name="hero_id"><br><br>
          <button type="submit" value="Delete hero">DELETE</button>
        </form>
        </div>

        <div class="row">

          <div class="col-lg-6">
          
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            
            <?php
            
    
    $select = 'SELECT id, hero_name, real_name, short_bio, long_bio,image_url FROM heroes';
    $result = $conn->query($select); if ($select) { ?>

      <?php while ($row = $result->fetch_assoc()) { ?>
        
              <div class="member-info">
              <div class="pic"><img src="./uploads/<?php echo $row["image_url"]?>" class="img-fluid" alt=""></div>
                <h2><td><?php echo $row["id"]; ?></td></h2>
                <h4><?php echo $row["hero_name"]; ?></h4>
                <span><?php echo $row["real_name"]; ?></span>
                <p><?php echo $row["short_bio"]; ?></p>
                <p><?php echo $row["long_bio"]; ?> </p>
              </div>
              <?php  }
        } 
        else {
            echo "o result";
        }  
        $conn->close(); ?>
            </div>
            
          </div>
  
          
        </div>
        

      </div>
    </section><!-- End Team Section -->
    
 
  </main><!-- End #main -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
