<?php 

$result="";

if(isset($_POST['submit']))
{
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;

$fname = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone =$_POST['message'];
$email_subject = "Someone contacted you about Sfoly";
$email_body = "You have received a new contact from the user: $fname \n mail: $visitor_email .\n.  " ;




// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('enteryour mail', 'Mailer');
$mail->addAddress('enter your mail');     // Add a recipient

$mail->addReplyTo($visitor_email);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email_subject;
$mail->Body    = $email_body;

if(!$mail->send()) {
    $result= "Message could not be sent.";
} else {
     $result="Thanks ".$fname." for contacting us we will respond to you  soon. ";
}
 
}
    
?>  

<!DOCTYPE html>
<html amp lang="en">
<head>

     <title>SpringField Olympiads</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="springfield olympiads private limited we, at Springfield provide best olympiad solutions for students.Springfield Olympiads is one the few establishments which was founded with the aim of not only building competitive spirit but also focusing on developing healthy academic competition among children at the school level.The status-quo of Springfield Olympiads can be attributed  to driving academicians who felt a need to promote/advance science, arithmetic, computer training, English, General Knowledge, and other expert courses.Springfield Olympiads firmly believes that such Olympiads, also help the participants in gaining confidence for competition with the best around them, within the country and internationally and contribute to temperament development. Also when children experience a definite sense of accomplishment, it encourages them to try and do even higher as they advance in age.">
     <meta name="keywords" content="Olympiads, olympiad , maths olympiads , Science olympiads ,national olympiads, springfield olympiads, competitive olympiads,science, arithmetic, computer training, English, General Knowledge, and other expert courses  ">
     <meta name="author" content="nagacharan">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


<script async src="https://cdn.ampproject.org/v0.js"></script>
<link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>

     <link rel="shortcut icon" type="image/x-icon" href="images/springfield_olympiads_private_limited_651397.png" />
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/base-style.css">
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>
<style type="text/css">
  .card{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 40px;
      font-size: 20px;

    }
    .card-body{
      margin-left: 50px;
      margin-right: 50px;
     

    }
</style>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <!-- PRE LOADER -->
      <div class="navi" id="fadeshow1" >
     <ul>
     <li><a  href="regurschool.php">Register</a></li>
     <li><a  href="downform.php">Download Registration form</a></li>
     <li><a  href="becordinate.php">Become a  Coordinator</a></li>
     <li><a  href="ourprocess.php">Our Process</a></li>
    </ul>
     
  </div>  


  
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="top: 38px;">
          <div class="container">
               <div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                 </button>
                 <a href="index.php" class="navbar-brand" ><span>S</span>pring<span>f</span>ield<span></span>&nbsp;<span>Oly</span>mpiads </a>
                 <img title="SpringField" src="images/springfield_olympiads_private_limited_651397.png">

               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse" style="overflow-x: hidden;">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Our Olympiads</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="faq.php" class="smoothScroll">FAQs</a></li>
                         <li><a href="careers.php" class="smoothScroll">Careers</a></li>
                         <li><a href="#contact" class="smoothScroll">  Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
    <section id="home" >
      <div class="container-fluid"> 
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>SpringField Olympiad</h1>
                                             <h3>We, at Springfield Olympiads, provide one of the best Olympiad solutions for school students.</h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Start your journey with our practical courses</h1>
                                             <h3>Our online courses are built in partnership with technology leaders and are designed to meet industry demands.</h3>
                                             <a href="regurschool.php" class="section-btn btn btn-default smoothScroll">Register</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Efficient Learning Methods</h1>
                                             <h3> We, at Springfield Olympiads, provide one of the best Olympiad solutions for school students.</h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
        </div>
     </section> 

    <!-- FEATURE -->
    <!-- <section id="feature" style="margin-top: -50px;">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12">
                         <div class="feature-thumb">
                               <div class="card">
                               <div class="card-body">
                              <h3 style="text-align: center;"><span>1</span>SISO</h3>
                              <p>The Springfield International Science Olympiad (SISO), a test of competence and knowledge in the subject of Science, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards.</p>
                              <a href="Siso.php">know more</a>
                              </div></div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                         <div class="feature-thumb">
                              
                              <h3 style="text-align: center;"><span>2</span>SIMO</h3>
                              <p>The Springfield International Mathematics Olympiad (SIMO), a test of competence and knowledge in the subject of Mathematics, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards. </p>
                               <a href="Simo.php">know more</a>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12" >
                         <div class="feature-thumb">
                              
                              <h3 style="text-align: center;"><span>3</span>SIEO</h3>
                              <p>The Springfield International English Olympiad (SIEO), a test of competence and knowledge in the subject of English, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards. </p>
                               <a href="Sieo.php">know more</a>

                         </div>
                    </div>

               </div>
          </div>
     </section> -->
     <br/>
<div class="container">
  <div class="row">
  <div class="col-lg-4 col-xs-12">
    <div class="card">
      <div class="card-body">
          <h3 style="text-align: center; ">SISO</h3>
           <p>The Springfield International Science Olympiad (SISO), a test of competence and knowledge in the subject of Science, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards.</p>
           <a href="Siso.php">know more</a>
           <br/>
      </div>
    </div> 
  </div>

<div class="col-lg-4 col-xs-12">
    <div class="card">
      <div class="card-body">
         <h3 style="text-align: center;">SIMO</h3>
         <p>The Springfield International Mathematics Olympiad (SIMO), a test of competence and knowledge in the subject of Mathematics, is held based on syllabus prescribed by CBSE/ ICSE and the State Boards. </p>
         <a href="Simo.php">know more</a>
      </div>
    </div> 
  </div>

<div class="col-lg-4 col-xs-12">
    <div class="card">
      <div class="card-body" >
          <h3 style="text-align: center;">SIEO</h3>
          <p>The Springfield International English Olympiad (SIEO), a test of competence and knowledge in the subject of English, is held based on syllabus prescribed by CBSE/ICSE and the State Boards. </p>
          <a href="Sieo.php">know more</a>
          <br/>
      </div>
    </div> 
  </div>

</div>
</div>

     <a class="links" href="#home">^</a>

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12" style="margin-top: -40px;">
                         <div class="about-info">
                              <h2>About us </h2>
                              <p>We, at Springfield Olympiads, provide one of the best Olympiad solutions for school students.</p>
                              <p>Springfield Olympiads is an Educational Organization popularizing academic competition and assisting the development of competitive spirit among school children.......... <a class="knowmore" href="aboutus.php"><u>know more</u></a></p>

                         </div>
                    </div>
                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                      <div >
                           <img style="margin-left:-100px;margin-top:20px;" src="images/courses-image2.jpg">
                      </div>
                 </div>

               </div>
          </div>
        </section>

        <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Student Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Jackson</h4>
                                             <span>IPhO Topper</span>
                                        </div>
                                        <p>You really do help young creative minds to get quality education and ofessional job search assistance. I’d recommend it to everyone!</p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Camila</h4>
                                             <span>SIPhO Topper</span>
                                        </div>
                                        <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Barbie</h4>
                                             <span>SIChO Topper</span>
                                        </div>
                                        <p>We, at Springfield Olympiads, provide one of the best Olympiad solutions for school students Thanks for the amazing course</p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">

                                        <div class="tst-author">
                                             <h4>Andrio</h4>
                                             <span>IOM Topper</span>
                                        </div>
                                        <p>We, at Springfield Olympiads, provide one of the best Olympiad solutions for school students Thanks for the amazing course.</p>
                                        <div class="tst-rating">

                                        </div>
                                   </div>
                              </div>

                         </div>
<a  href="reviews.php">view all</a>
               </div>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>
<h5> <?= $result; ?>  </h5>
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
    <div id="footer1"></div>

     <!-- SCRIPTS -->

     
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>



</body>
</html>
