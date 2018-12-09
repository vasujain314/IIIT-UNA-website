<!DOCTYPE html>
<head>
	<style>
  .footer{
  background-color: white;
  position: relative;
  padding-top: 20px;
  padding-bottom: 20px;
  bottom: 0px;
}  




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
 <footer class="footer ">
    <div class="container" style="color: white;">
      <div class="row">
        <div class="col-sm-2">
          <ul  class="list-unstyled">
            <li style=" padding: 7px;"><strong>LINKS</strong></li>
            <li><a style=" padding: 7px;" href="index.html">Home</a></li>
            <li><a style=" padding: 7px;" href="contact.html">About</a></li>
            <li><a style=" padding: 7px;" href="feedback.html">feedback</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h5><strong>Our Address</strong></h5>
          <address>
            FF-126,Paras Trinity<br>
            sector 63, Gurgaon<br>
            Delhi-NCR<br>
            <i class="fa fa-phone fa-lg"></i>: +91 704-263-3055<br>
            <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:alrightdentalclinic@gmail.com">alrightdentalclinic@gmail.com</a>
          </address>
        </div>
        <div class="col-sm-4 align-self-center">
          <div class="text-center align-self-center">
            <div id='printoutPanel'></div>
        
        <div id='myMap' style='width: auto; height: 200px;'></div>
        <script type='text/javascript'>
            function loadMapScenario() {
                var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                    /* No need to set credentials if already passed in URL */
                    center: new Microsoft.Maps.Location(28.421883,77.109078),
                    mapTypeId: Microsoft.Maps.MapTypeId.birdseye });
                var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(28.421883,77.109078), { title: 'alright dental' });
                var polyline = new Microsoft.Maps.Polyline([new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078),
                    new Microsoft.Maps.Location(28.421883,77.109078)], { strokeColor: 'lightblue', strokeThickness: 5 });
                var layer = new Microsoft.Maps.Layer();
                layer.add([pushpin, polyline]);
                map.layers.insert(layer);
                
            }
        </script>
        <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AtzBR8MzztKkXstzT92ik-oi87ZF4kiY94t7a1awKWWD0gnnZVe90AH7QWux7QFL&callback=loadMapScenario' async defer></script>
          </div>
        </div>
    <div class="col-sm-3" >
       <ul  class="list-unstyled">
            <li><a style=" padding: 7px;" href="contact.html">Contact us</a></li>
            <li><a style=" padding: 7px;" href="team.html">Meet our team</a></li>
            <li><a style=" padding: 7px;" href="quality.html">Quality</a></li>
            <li><a style=" padding: 7px;" href="plans.html">alright plans</a></li>
          </ul>
    </div>
  </div>
  </div>
  </footer>
        <!-- tiny-footer -->
        <div class="container-fluid">
            <div class="row">
                <div class="tiny-footer">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="tiny-section-social">
                            <div class="">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
</body>
</html>
  








 










