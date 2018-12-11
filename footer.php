<!DOCTYPE html>
<head>
	<style>

</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Indian Institue Of Information Technoogy,UNA(H.P)</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>



 <footer class="footer" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container" style="color: white;" >
        <div class="col-lg-3">
          <h5><strong class="footer-title">Our Address</strong></h5>
          <address>
            Indian Institute Of Information Technology,Una<br>
            Himachal pradesh<br>
            India<br>
            <i class="fa fa-phone fa-lg"></i>: +91 375893573787<br>
            <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:director@iiitu.ac.in" class="footer-title" style="font-size:16px;">feedback@iiitu.ac.in</a>
          </address>
        </div>
        <div class="col-lg-4 align-self-center">
          <div class="text-center align-self-center">
            <div id='printoutPanel'></div>
        
        <div id='myMap' style='width: auto; height: 200px;'></div>
        <script type='text/javascript'>
            function loadMapScenario() {
                var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                    /* No need to set credentials if already passed in URL */
                    center: new Microsoft.Maps.Location(31.4808,76.1991),
                    mapTypeId: Microsoft.Maps.MapTypeId.birdseye });
                var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(31.4808,76.1991), { title: 'IIIT UNA' });
                var polyline = new Microsoft.Maps.Polyline([new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991),
                    new Microsoft.Maps.Location(31.4808,76.1991)], { strokeColor: 'lightblue', strokeThickness: 5 });
                var layer = new Microsoft.Maps.Layer();
                layer.add([pushpin, polyline]);
                map.layers.insert(layer);
                
            }
        </script>
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AtzBR8MzztKkXstzT92ik-oi87ZF4kiY94t7a1awKWWD0gnnZVe90AH7QWux7QFL&callback=loadMapScenario' async defer></script>
        </div>
        </div>
        <div class="col-lg-3" align="center" >
       <ul  class="list-unstyled">
            <li><a class="footer-title" style="font-size:20px;" href="tender.html" >Tender</a></li>
            <li><a class="footer-title" style="font-size:20px;" href="contact.html" >Contact us</a></li>
            <li><a class="footer-title" style="font-size:20px;" href="academic.html" >Academics</a></li>
            <li><a class="footer-title" style="font-size:20px;" href="recruitment.html" >Recruitment</a></li>
            <li><a class="footer-title" style="font-size:20px;" href="grievances.html" >Grievances portal</a></li>
          </ul>
    </div>
        <div class="col-lg-2 " align="center">
          <ul  class="list-unstyled">
            <li><a  href="index.html" class="footer-title" style="font-size=16px;">Home</a></li>
            <li><a  href="campus.html" class="footer-title"style="font-size=16px;">campus</a></li>
            <li><a  href="admission.html" class="footer-title"style="font-size=16px;">Admissions</a></li>
            <li><a  href="cse-dept.html" class="footer-title"style="font-size=16px;">Departments</a></li>
            <li><a  href="directordesk.html" class="footer-title"style="font-size=16px;">Director's desk</a></li>
            
          </ul>
        </div>
    
  </div>
  </div>
  </footer>
        <!-- tiny-footer -->
        <div class="container-fluid tiny-footer" style="padding-top: 4px; padding-bottom: 4px; ">
            <div class="row">
                    <div class="col-lg-6">
                        <div class="tiny-section-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" align="right">
                        Made with &hearts; by VASU,VIPUL,DEV.
                    </div>
                </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
</body>
</html>
  








 










