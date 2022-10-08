<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Novel-Design and Construction LTD</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                          <img style="margin-top:auto;" src="images/clientlogo1.png"alt="Novel-Design and Construction LTD Logo">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p style="color: black;">Need Help?</p>
                                    <span style="font-size:12px;">+250 786 951 624</span>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    <span style="font-size:12px;">+250 788 621 025</span>&nbsp;&nbsp;&nbsp;<br>
                                    <span style="font-size:12px;">+250 726 724 361</span>&nbsp;&nbsp;&nbsp;

                                </div>
                                <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>KN 9 AVE, Kigali</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>info@noveldc.com</span></li>
                            </ul><br>
                            <p>Hours : Monday - Friday : 8 Am to 5 Pm</p>
                             </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
    
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.php">Courses</a>
                                        
                                    </li>
                                     <li class="nav-item">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                        <li><a href="architecture.php">Architectural Design</a></li>
                                        <li><a href="structure.php">Structural Design</a></li>
                                        <li><a href="estimation.php">Quantity Estimation</a></li>
                                        <li><a href="management.php">Project Management</a></li>
                                        <li><a href="consultancy.php">Consultancy</a></li>
                                        <li><a href="bpa.php">Building Permit Application</a></li>
                                    </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="active" href="teachers.php">Our Instructors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog.php">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                    </nav> <!-- nav -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
</header>

<!--====== HEADER PART ENDS ======-->
   
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Instructors</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Instructors</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    <?php
            
            include('includes/config.php');
            if(isset($_GET['page']))
         {
             $page = $_GET['page'];
             
         }
         else
         {
            $page = 1;
         }
         $num_per_page = 4;
         $start_from = ($page-1)*$num_per_page;
            $query=mysqli_query($con,"select id, name, post, image from tblteacher where Is_Active = 1 and post='Instructor' limit $start_from,$num_per_page");
            $rowcount=mysqli_num_rows($query);
           
            
        
        ?>
    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
                          <?php
                            while($row=mysqli_fetch_array($query))
                            {?>
               <div class="col-lg-3 col-sm-6">
                   <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                        <img src="admin/teacherimages/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['name']);?>">
                        </div>
                        <div class="cont">
                            
                            <a href="teachers-singel.php?tid=<?php echo htmlentities($row['id']);?>"><h6><?php echo htmlentities($row['name'])?></h6></a>
                            <span><?php echo htmlentities($row['post'])?></span>
                        </div>
                    </div> <!-- singel teachers -->
               </div>
               <?php }?>
           </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                   <center>
                   <nav class="courses-pagination mt-50">

<?php
// getting number of rows uploaded in particula folder
$nquery=mysqli_query($con,"SELECT * FROM tblteacher where Is_Active=1 AND post='instructor'");
$total_record=mysqli_num_rows($nquery);

$total_pages = ceil($total_record/$num_per_page);
if($page>1)
{
echo"<a href='teachers.php?page=".($page-1)."' class='btn btn-danger m-1'>Previous</a>";

}
for($i=1; $i<$total_pages; $i++)
{
echo"<a href='teachers.php?page=".$i."' class='btn btn-primary m-1'>$i</a>";

}
if($i>$page)
{
echo"<a href='teachers.php?page=".($page+1)."' class='btn btn-danger m-1'>Next</a>";
}

?>
</nav>  <!-- courses pagination -->
                   </center>
                </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
    
   <!--====== FOOTER PART START ======-->
    
   <footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="#"><img src="images/clientlogo1.png" alt="Logo"></a>
                        </div>
                        <ul class="mt-20">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Sitemap</h6>
                        </div>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="about.php"><i class="fa fa-angle-right"></i>About us</a></li>
                            <li><a href="courses.php"><i class="fa fa-angle-right"></i>Courses</a></li>
                            <li><a href="blog.php"><i class="fa fa-angle-right"></i>News</a></li>
                        </ul>
                        <ul>
                            <li><a href="teachers.php"><i class="fa fa-angle-right"></i>Teachers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>229X+CW7, KN 9 AVE, Kigali</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+250 786 951 624</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>info@noveldc.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->
    
    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a href="#">Copyright &copy; Novel Design and Construction LTD 2022</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">
                       
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>

</body>
</html>