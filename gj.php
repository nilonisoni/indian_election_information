<?php 

    require_once("connection.php");
    $styles = array('even','odd');
    $query = " select * from gj_election_results_data";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indian Election Information</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <style type="text/css">
  .even 
  {
      background-color: #F6F9FE;
  }
  .odd 
  {
      background-color: #DBE7F5;
  }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <h4>Indian Election Information<span>.</span></h4>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="voters.html">For Voters</a></li>
          <li class="dropdown"><a href="#"><span>Results</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="pc.php">Lok Sabha Elections<br>(PC)</a></li>
              <li><a href="ac.html">Vidhan Sabha Elections<br>(AC)</a></li>
              <li><a href="summary.html">Summary results</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#recent-blog-posts">Blog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="inner-page">
      <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-10 order-2 order-lg-1">
              <br><hr>
            </div>
            <div class="col-lg-2 order-2 order-lg-1">
              <a class="nav-link scrollto" href="ac.html" style="color: #148FA8; background-color: #dddddd; text-align: center; border-radius: 5%;">Back</a>
            </div>
          </div>
          <div class="section-header">
            <h2 class="title" style="text-align: center; color: #808080;">Lok Sabha Elections</h2><hr>
          </div>
          <div class="container" data-aos="fade-up">
            <div class="row gy-4" data-aos="fade-up">
              <h3><u>Gujarat Assembly Election Results</u></h3>
              <div class="col-lg-11 order-2 order-lg-1">
                <p style="text-align: justify;">
                  Gujarat Legislative Assembly or Gujarat Vidhan Sabha is the unicameral legislature of the Indian state of Gujarat, in the state capital Gandhinagar. Presently, 182 members of the Legislative Assembly are directly elected from single-member constituencies (seats). 13 constituencies are reserved for scheduled castes and 27 constituencies for scheduled tribes. From its majority party group or by way of a grand coalition cabinet of its prominent members, the state's Executive namely the Government of Gujarat is formed.
                </p>
              </div>
            </div>
            <br>
          </div>

          <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr style="background-color: #1F406B; color: white">
                                <th> State_Name </th>
                                <th> Year </th>
                                <th> Candidate </th>
                                <th> Party  </th>
                                <th> Votes </th>
                                <th> Constituency_Name </th>
                            </tr>


                            <?php 
                              $i = 1;

                              //$i=0;
                              while($row=mysqli_fetch_assoc($result))
                              {
                                 $State_Name = $row['State_Name'];
                                 $Year = $row['Year'];
                                 $Candidate = $row['Candidate'];
                                 $Party = $row['Party'];
                                 $Votes = $row['Votes'];
                                 $Constituency_Name = $row['Constituency_Name'];
                            ?>
                                <tr class="<?php echo $styles[$i % 2]; ?>">
                                  <td><?php echo $State_Name ?></td>
                                  <td><?php echo $Year ?></td>
                                  <td><?php echo $Candidate ?></td>
                                  <td><?php echo $Party ?></td>
                                  <td><?php echo $Votes ?></td>
                                  <td><?php echo $Constituency_Name ?></td>
                                </tr>        
                            <?php 
                                $i++;
                                }  
                            ?>                                                                    
                              
                        </table>
                    </div>
                </div>
            </div>
          </div>

      </div>
    </section><!-- End Inner Page -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-10 col-md-12">
            <div class="footer-info">
              <h3>Indian Election Information</h3>
              <p>
                Darshan University<br>
                Rajkot, Gujarat, India<br><br>
                <strong>Phone:</strong> +91 81417 50052<br>
                <strong>Email:</strong> 190540107198@darshan.ac.in<br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Indian Election Information</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by Soni Niloni Mahesh
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
            