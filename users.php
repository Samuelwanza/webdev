<!DOCTYPE html>
<html lang="en">

<?php
include "configuration.php";
include "header.php";
?>

<body>
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Users</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
          
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            
            <?php
            
    
    $select = 'SELECT id, username,password FROM users';
    $result = $conn->query($select); if ($select) { ?>

      <?php while ($row = $result->fetch_assoc()) { ?>
        
              <div class="member-info"><div class="pic"><img src="" class="img-fluid" alt=""></div>
                <h2><td><?php echo $row["id"]; ?></td></h2>
                <h4><?php echo $row["username"]; ?></h4>
                <p><?php echo $row["password"]; ?></p>
             
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