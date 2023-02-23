<?php 

    require_once("connection.php");
    $styles = array('even','odd');
    $query = " select * from 2019_results_winning_candidate";
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

          <div class="section-header">
            <h2 class="title" style="text-align: center; color: #808080;">Lok Sabha Elections</h2><hr>
          </div>
          <div class="container" data-aos="fade-up">
            <div class="row gy-4" data-aos="fade-up">
              <h3><u>Lok Sabha Election Results</u></h3>
              <div class="col-lg-7 order-2 order-lg-1">
                <p style="text-align: justify;">
                  The Lok Sabha, constitutionally the House of the People, is the lower house of India's bicameral Parliament, with the upper house being the Rajya Sabha. Members of the Lok Sabha are elected by an adult universal suffrage and a first-past-the-post system to represent their respective constituencies, and they hold their seats for five years or until the body is dissolved by the President on the advice of the council of ministers. The house meets in the Lok Sabha Chambers of the Sansad Bhavan, New Delhi.
                </p>
                <p style="text-align: justify;">
                  The maximum membership of the House allotted by the Constitution of India is 552 (Initially, in 1950, it was 500). Currently, the house has 543 seats which are made up by the election of up to 543 elected members and at a maximum. Between 1952 and 2020, 2 additional members of the Anglo-Indian community were also nominated by the President of India on the advice of Government of India, which was abolished in January 2020 by the 104th Constitutional Amendment Act, 2019.[3][4] The new parliament has a seating capacity of 888 for Lok Sabha.The Lok Sabha (Lower house of the People) was duly constituted for the first time on 17 April 1952 after the first General Elections held from 25 October 1951 to 21 February 1952.
                  General elections were held in India in seven phases from 11 April to 19 May 2019 to elect the members of the 17th Lok Sabha. Votes were counted and the result declared on 23 May.
                </p>
              </div>
              <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up">
                <img src="assets/img/img2019.png" class="img-fluid" alt="" style="height: 100%; width: 100%; padding-top: 1%; padding-right: 1%; padding-left: 1%; padding-bottom: 1%;">
              </div>
            </div>
          </div>

          <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                      <h5 style="text-align: center; color: #148FA8">2019 Lok Sabha Election Results</h5>
                        <table class="table table-bordered">
                            <tr style="background-color: #1F406B; color: white">
                                <th> State </th>
                                <th> Constituency </th>
                                <th> Votes </th>
                                <th> Percentage </th>
                                <th> Party  </th>
                                <th> Candidate </th>
                            </tr>


                            <?php 
                              $i = 1;

                              //$i=0;
                              while($row=mysqli_fetch_assoc($result))
                              {
                                // if($i % 2 == 0) 
                                // {

                                //   $style = "style='background-color:#F6F9FE'";
                                //   }
                                //   else {
                                //   $style = "style='background-color:#DBE7F5'";
                                // }
                                // $i++;

                                 $State = $row['State'];
                                 $Constituency = $row['Constituency'];
                                 $Votes = $row['Votes'];
                                 $Percentage = $row['Percentage'];
                                 $Party = $row['Party'];
                                 $Candidate = $row['Candidate'];
                            ?>
                                <tr class="<?php echo $styles[$i % 2]; ?>">
                                  <td><?php echo $State ?></td>
                                  <td><?php echo $Constituency ?></td>
                                  <td><?php echo $Votes ?></td>
                                  <td><?php echo $Percentage ?></td>
                                  <td><?php echo $Party ?></td>
                                  <td><?php echo $Candidate ?></td>
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
            