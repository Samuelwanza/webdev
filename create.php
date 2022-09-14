<!DOCTYPE html>
<html lang="en">
<body>


<?php
include "header.php";
//sinclude "configuration.php";
?>

  <main id="main">
          <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Create Heroes</h2>
        </div>

      <!--div class="row"-->

      <!--div class="col-lg-6"-->
      
      <form method="POST" enctype=multipart/form-data>
        <div class="form-group" >
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
        <div class="group">
          <label for="hero_image">hero_Image</label>
          <input type="file" name="my_image">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <?php
      include "configuration.php";
      try{
        if(isset($_POST["submit"]) && isset($_FILES["my_image"])){
        
            //include "configuration.php";
          
            //echo "<pre>";
            //print_r($_FILES['my_image']);
            //echo "</pre>";
          
          $name = $_POST["name"];
          $real_name = $_POST["realname"];
          $shortBio = $_POST["shortbio"];
          $longBio = $_POST["longbio"];
          
          $img_name = $_FILES['my_image']['name'];
          $img_size = $_FILES['my_image']['size'];
          $tmp_name = $_FILES['my_image']['tmp_name'];
          $error = $_FILES['my_image']['error'];
          
          if ($error=== 0){
            if ($img_size > 125000000){
              $em = "Sorry, your file is too large.";
              header("Location: create.php?error=$em");
            }else{
              $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
              $img_ex_lc = strtolower($img_ex);
          
              $allowed_exs = array("jpg", "jpeg", "png"); 
          
              if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                  
                  // Insert into Database
                try{
                  $insert = "INSERT INTO heroes(hero_name,real_name,short_bio,long_bio,image_url) VALUE ('$name','$real_name','$shortBio','$longBio','$new_img_name')";
                  $query = mysqli_query($conn, $insert);
                  echo "added successfully";
                  //header("Location: heroes.php");
                }
                catch(Exception $e){
                  echo $e->getMessage();
                  exit;
                    
                }
              }else{
                $em = "You can't upload files of this type";
                header("Location: create.php?error=$em");
              }
            }
          }else{
            $em = "unknown error occurred!";
            header("Location: create.php?error=$em");
          }
          
        }
      }catch(Exception $e){
        $e->getMessage();
        exit;}
            $conn->close();


      ?>

    
            
          
          

        
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