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
          <h2>Register Users</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
      <form method="POST">
  <div class="form-group">
    <label for="name">Userame</label>
    <input type="text"  name="name" id="name" class="form-control" id="" placeholder=" Username">
  </div>
  <div class="form-group">
    <label for="realname">Password</label>
    <input type="password" name="password" class="form-control" id="" placeholder="password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  
      <?php
      include "configuration.php";
      if(isset($_POST['submit'])){
        $username = $_POST["name"];
        $password = $_POST["password"];

        // insert data from the users into database
        $insert = "INSERT INTO users (username, password) VALUE ('$username','$password')";
        $query = mysqli_query($conn, $insert);
        if ($query){ ?>
            <div class="" style="text-align:center; color:green;background-color:white;margin:auto;width:50%;">
              <?php
              echo ("User added Successfully") . "<br>";
              ?>
            </div>
            
        <?php 
        } else  { ?>
        <div class=""  style="text-align:center; color:red;background-color:white;width:50%;margin:auto;">
        <?php

            echo ("Failed to add hero") . "<br>";
        }}
        ?>
        </div>
        <?php
        $conn->close();

      ?>
          
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