<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Google maps </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="bootstrap.min.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				
			}
			/* Custom container */
			.container-narrow {
				margin: 0 auto;
				max-width: 700px;
			}
			.container-narrow > hr {
				margin: 30px 0;
			}
			/* Main marketing message and sign up button */
			.jumbotron {
				margin: 60px 0;
				text-align: center;
			}
			.jumbotron h1 {
				font-size: 72px;
				line-height: 1;
			}
			.jumbotron .btn {
				font-size: 21px;
				padding: 14px 24px;
			}
			/* Supporting marketing content */
			.marketing {
				margin: 60px 0;
			}
			.marketing p + h4 {
				margin-top: 28px;
			}
</style>
	</head>
	<body>
		

					   <script type="text/javascript" 
           src="http://maps.google.com/maps/api/js?key=AIzaSyBdWOm-RL8XoSvUQaMqPBKlNVPIxtBoEGE"></script>


 <div class='row'>
     <div id="map"  style="width: 100%; height: 400px; float:right;"></div> 
   
</div>
  

   <script type="text/javascript"> 
   // navigator.geolocation.getCurrentPosition(showPosition);

     navigator.geolocation.getCurrentPosition(showPosition);
     function showPosition(position){
     	var directionsService = new google.maps.DirectionsService();
     	var directionsDisplay = new google.maps.DirectionsRenderer();

     	var map = new google.maps.Map(document.getElementById('map'), {
       zoom:10,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     	});

     	directionsDisplay.setMap(map);

     	var start = "" + position.coords.latitude + ", " + position.coords.longitude + ""; 
    var end = '-7.600023, 112.785480';   

     var request = {
       origin: start, 
       destination: end,
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });

     }

    
   </script> 
						</div>
							</div>
							</body>
							</html>
