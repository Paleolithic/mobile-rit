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
        var fromProjection = new OpenLayers.Projection( "EPSG:4326" );   // Transform from WGS 1984
        var toProjection   = new OpenLayers.Projection( "EPSG:900913" ); // to Spherical Mercator Projection
        var position       = new OpenLayers.LonLat( -77.68,43.08 ).transform( fromProjection, toProjection );
        /* var position       = new OpenLayers.LonLat( 13.41,52.52 ).transform( fromProjection, toProjection ); */
        var zoom           = 15; 

        map.addLayer( mapnik );

        var academicBuilds      = new OpenLayers.Layer.Markers();
        var residentialBuilds   = new OpenLayers.Layer.Markers();
        var academicLots        = new OpenLayers.Layer.Markers();
        var residentialLots     = new OpenLayers.Layer.Markers();
        var visitorParks        = new OpenLayers.Layer.Markers();
        var food                = new OpenLayers.Layer.Markers();
        var shopping            = new OpenLayers.Layer.Markers();
        var bikeRacks           = new OpenLayers.Layer.Markers();
        var busStops            = new OpenLayers.Layer.Markers();
        var womens              = new OpenLayers.Layer.Markers();
        var mens                = new OpenLayers.Layer.Markers();
        var atms                = new OpenLayers.Layer.Markers();
        
        map.addLayer( academicBuilds );
        map.addLayer( residentialBuilds );
        map.addLayer( academicLots );
        map.addLayer( residentialLots );
        map.addLayer( visitorParks );
        map.addLayer( food );
        map.addLayer( shopping );
        map.addLayer( bikeRacks );
        map.addLayer( busStops  );
        map.addLayer( womens );
        map.addLayer( mens );
        map.addLayer( atms );
        
        map.setCenter( position, zoom );
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