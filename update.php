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
          <h2>Update Heroes</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
      <form method="POST">
      <div class="form-group">
    <label for="name">Id</label>
    <input type="text"  name="hero_id" id="name" class="form-control" id="" placeholder="Enter hero_Id">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  name="name" id="name" class="form-control" id="" placeholder="hero name">
  </div>
  <div class="form-group">
    <label for="realname">Real name</label>
    <input type="text" name="realname" id="realname" class="form-control" id="" placeholder="real name">
  </div>
  <div class="form-group">
    <label for="shortbio">Shortbio</label>
    <textarea class="form-control" name="shortbio" id="" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="longbio">Long bio</label>
    <textarea class="form-control" name="longbio" id="" rows="3"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  
      <?php
      include "configuration.php";
      if (isset($_POST['submit'])) {
        $hero_id=$_POST["hero_id"];
        $name = $_POST["name"];
        $real_name = $_POST["realname"];
        $shortBio = $_POST["shortbio"];
        $longBio = $_POST["longbio"];

        // insert data from the users into database
        try{$insert = "UPDATE heroes SET hero_name='$name',real_name='$real_name',short_bio='$shortBio',long_bio='$longBio' WHERE id=$hero_id";
        
            $query = mysqli_query($conn, $insert);}
        
          catch(Exception $e){
            echo $e->getMessage();
            exit;
          if ($query) { 
              echo ("Update successful") . "<br>";
          } else {
              echo ("failed to update data") . "<br>";
        }}}
          $conn->close();
  
        ?>

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