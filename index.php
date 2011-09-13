<!DOCTYPE html>
<html lang="en">
<head>
	<title>GMAP</title>
    <meta charset="utf-8">
    <style type="text/css">
  		html { height: 100% }
        body { height: 100%; margin: 0; padding: 0 }
    	#map_canvas { height: 100%}
    </style>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
            function initialize() {
            		// docs 
            		// http://code.google.com/apis/maps/documentation/javascript/
            		// My old house 43.241435,-77.626403
                    var latlng = new google.maps.LatLng(43.241435,-77.626403);
                    var myOptions = {
	                     				zoom: 8, // 0 - 21 range
	                      				center: latlng,
	                      				mapTypeId: google.maps.MapTypeId.HYBRID // types [ROADMAP, SATELLITE, TERRAIN, HYBRID]
                    				};
                   
                    var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
                    
                   // var image = 'flag.png';
                    var beachMarker = new google.maps.Marker({
     															position: latlng,
      															map: map,
      															
							    							    //icon: image 
							  								});
							  								
                  }         
                  //load the map
                  google.maps.event.addDomListener(window, 'load', initialize);
                  
                  
    </script>
</head>
<body>
    <div id="map_canvas">
        <!-- google map -->
    </div>
</body>
</html>
