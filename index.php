<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
    <title>RIT Maps</title>
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/base.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/skeleton.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/stylesheets/layout.css"/>
    <!--[if IE]>
      <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
    
    <script src="http://www.openlayers.org/api/OpenLayers.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        map                = new OpenLayers.Map( "basicMap" );
        
        var mapnik         = new OpenLayers.Layer.OSM();
        map.addLayer( mapnik );
        
        var size = new OpenLayers.Size(21,25);
        var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
        var icon = new OpenLayers.Icon('http://www.openlayers.org/dev/img/marker.png', size, offset);

        var academicBuilds      = new OpenLayers.Layer.Markers();
        // academicBuilds.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(0,0),icon));
        map.addLayer( academicBuilds );
        
        var residentialBuilds   = new OpenLayers.Layer.Markers();
        map.addLayer( residentialBuilds );
        
        var academicLots        = new OpenLayers.Layer.Markers();
        map.addLayer( academicLots );
        
        var residentialLots     = new OpenLayers.Layer.Markers();
        map.addLayer( residentialLots );
        
        var visitorParks        = new OpenLayers.Layer.Markers();
        map.addLayer( visitorParks );
        
        var food                = new OpenLayers.Layer.Markers();
        map.addLayer( food );
        
        var shopping            = new OpenLayers.Layer.Markers();
        map.addLayer( shopping );
        
        var bikeRacks           = new OpenLayers.Layer.Markers();
        map.addLayer( bikeRacks );
        
        var busStops            = new OpenLayers.Layer.Markers();
        map.addLayer( busStops  );
        
        var womens              = new OpenLayers.Layer.Markers();
        map.addLayer( womens );
        
        var mens                = new OpenLayers.Layer.Markers();
        map.addLayer( mens );
        
        var atms                = new OpenLayers.Layer.Markers();
        atms.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-8645875.0011304,5324914.9987629),icon));
        atms.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-8646471.5682495,5324952.0229485),icon.clone()));
        atms.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-8646693.1161986,5324753.1672421),icon.clone()));
        atms.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-8646762.9844199,5324829.0071062),icon.clone()));
        atms.addMarker(new OpenLayers.Marker(new OpenLayers.LonLat(-8647347.0110891,5324550.72855),icon.clone()));
        map.addLayer( atms );
        
        
        
        var fromProjection = new OpenLayers.Projection( "EPSG:4326" );   // Transform from WGS 1984
        var toProjection   = new OpenLayers.Projection( "EPSG:900913" ); // to Spherical Mercator Projection
        var position       = new OpenLayers.LonLat( -77.68,43.08 ).transform( fromProjection, toProjection );
        /* var position       = new OpenLayers.LonLat( 13.41,52.52 ).transform( fromProjection, toProjection ); */
        var zoom           = 15; 
        map.setCenter( position, zoom );

        map.events.register("click", map, function(e){
            var position = map.getLonLatFromPixel(e.xy);
            console.log(position);
        });
    });


    
    </script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,200,800' rel='stylesheet' type='text/css'>
</head>
<body id='basicMap'>
    <aside>
        <h5 class='first'>Buildings</h5>
        <label><input type="checkbox" value="Academic Buildings"/>Academic Buildings</label>
        <label><input type="checkbox" value="Residential Buildings"/>Residential Buildings</label>

        <h5 class='margin'>Parking</h5>
        <label><input type="checkbox" value="Academic Lots"/>Academic Lots</label>
        <label><input type="checkbox" value="Residential Lots"/>Residential Lots</label>
        <label><input type="checkbox" value="Visitor Parking"/>Visitor Parking</label>

        <h5 class='margin'>Retail</h5>
        <label><input type="checkbox" value="Food"/>Food</label>
        <label><input type="checkbox" value="Shopping"/>Shopping</label>

        <h5 class='margin'>Misc</h5>
        <label><input type="checkbox" value="Bike Racks"/>Bike Racks</label>
        <label><input type="checkbox" value="Bus Stops"/>Bus Stops</label>
        <label><input type="checkbox" value="Women's Restrooms"/>Women's Restrooms</label>
        <label><input type="checkbox" value="Men's Restrooms"/>Men's Restrooms</label>
        <label><input type="checkbox" value="ATMs"/>ATMs</label>
    </aside>
</body>
</html>