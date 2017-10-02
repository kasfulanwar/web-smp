<!DOCTYPE html>
<html> 
<head> 
   <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
   <title>Peta</title> 
   <script type="text/javascript" 
           src="http://maps.google.com/maps/api/js?key=AIzaSyBdWOm-RL8XoSvUQaMqPBKlNVPIxtBoEGE"></script>
</head> 
<body style="font-family: Arial; font-size: 12px;"> 
 <div class='row'>
 	  <div id="panel"   style="width: 300px; float:left;"></div> 
     <div id="map"  style="width: 300px; height: 400px; float:right;"></div> 
   
</div>
  

   <script type="text/javascript"> 

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map = new google.maps.Map(document.getElementById('map'), {
       zoom:10,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel'));

     var request = {
       origin: '46.5610058, 26.9098054', 
       destination: '-7.600023, 112.785480',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script> 
</body> 
</html>