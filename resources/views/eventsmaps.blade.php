@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    MAPA
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="mapdiv" style="height: 500px"></div>
                    <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
                    <script>
                        map = new OpenLayers.Map("mapdiv");
                        map.addLayer(new OpenLayers.Layer.OSM());

                        var lonLat = new OpenLayers.LonLat(-0.1279688, 51.5077286)
                                .transform(
                                        new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                                        map.getProjectionObject() // to Spherical Mercator Projection
                                );

                        var zoom = 0;
                        var newl = new OpenLayers.Layer.Text("text", {location: "textfile.txt"});
                        map.addLayer(newl);
                        var markers = new OpenLayers.Layer.Markers("Markers");
                        map.addLayer(markers);

                        map.setCenter(lonLat, zoom);
                    </script>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection