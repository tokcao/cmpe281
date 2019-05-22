<?php require_once('./farmer_navbar.php') ?>

<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load Charts and the corechart package.
        google.charts.load('current', {'packages': ['corechart']});

        // Draw the pie chart for feedback_30days's when Charts is loaded.
        google.charts.setOnLoadCallback(feedback_30days);

        //Draw the line chart for line_quantity_sale_12m
        google.charts.setOnLoadCallback(line_quantity_sale_12m);

        //Draw the map
        google.charts.load('current', {
            'packages': ['map'],
            'mapsApiKey': 'AIzaSyAmXBEbkjJG4lYiWKZh7AOWCjkfDnUw9xQ'
        });
        google.charts.setOnLoadCallback(drawMapChart);


        // Callback that draws the pie chart for feedback_30days
        function feedback_30days() {
            // Create the data table for rating
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Feedback');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Favorable Feedback', 5],
                ['Negative Feedback', 3],
                ['Others', 1],
            ]);

            var options = {
                title: 'Your Feedback in the past 30 Days',
                width: 400,
                height: 300
            };

            // Instantiate and draw the chart for feedback_30days
            var chart = new google.visualization.PieChart(document.getElementById('feedback_30d'));
            chart.draw(data, options);
        }

        //line chart
        function line_quantity_sale_12m() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales'],
                ['1', 1000],
                ['2', 1170],
                ['3', 1210],
                ['4', 1030],
                ['5', 1600],
                ['6', 1170],
                ['7', 1200],
                ['8', 1030],
                ['9', 1000],
                ['10', 1170],
                ['11', 2000],
                ['12', 1030]

            ]);

            var options = {
                title: 'Quatity of Sales(Past 12 months)(kg)',
                curveType: 'function',
                legend: {position: 'bottom'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('quantity_sale_12m'));

            chart.draw(data, options);
        }

        //map chart
        function drawMapChart() {
            // var map = new google.visualization.Map(document.getElementById('map_markers_div'));
            // map.draw(data, options);
            // var data = new google.visualization.DataTable();
            // data.addColumn('string', 'Address');
            // data.addColumn('string', 'Location');
            var data = google.visualization.arrayToDataTable([
                ['Lat', 'Long', 'Name'],
                [37.4232, -122.0853, 'Farmer1'],
                [37.4289, -122.1697, 'Farmer2'],
                [36.263100, -121.346771, 'Farmer3'],
                [37.4422, -122.1731, 'Farmer4'],
                [35.012424, -119.486834, 'Farmer5']

            ]);

            // data.addRows([
            //     ['Yellowstone National Park, Wyoming, United States', 'YellowStone']
            // ]);
            var options = {
                mapType: 'styledMap',
                zoomLevel: 7,
                showTooltip: true,
                showInfoWindow: true,
                useMapTypeControl: true,
                // User will only be able to view/select custom styled maps.
                mapTypeIds: ['styledMap'],
                maps: {
                    styledMap: {
                        name: 'Styled Map',
                        styles: [
                            {
                                featureType: 'poi.attraction',
                                stylers: [{color: '#fce8b2'}]
                            },
                            {
                                featureType: 'road.highway',
                                stylers: [{hue: '#0277bd'}, {saturation: -50}]
                            },
                            {
                                featureType: 'road.highway', elementType: 'labels.icon',
                                stylers: [{hue: '#000'}, {saturation: 100}, {lightness: 50}]
                            },
                            {
                                featureType: 'landscape',
                                stylers: [{hue: '#259b24'}, {saturation: 10}, {lightness: -22}]
                            }
                        ]
                    }

                }
            };
            var map = new google.visualization.Map(document.getElementById('map_div'));

            map.draw(data, options);

        }
    </script>
</head>

<body>
<!--cards-->
<div class="card mb-3 center_image" style="width:50%">
    <!--     style="max-width: 540px;"-->
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="./images/farm.jpg" class="card-img" alt="farm">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <div>
                    <h4>Average user rating</h4>
                    <h2 class="bold padding-bottom-7">4.3
                        <small>/ 5</small>
                    </h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--fruit image map-->
<div>
    <img src="./images/fruit_stand.jpg" usemap="#image-map" class="center_image">

    <map name="image-map">
        <area target="" alt="cherry" title="cherry" coords="748,500,711,531,918,626,976,577" shape="poly"
              data-toggle="modal" data-target="#cherry">
        <area target="" alt="apple" title="apple" coords="142,177,94,214,86,289,231,319,261,275,188,200"
              shape="poly"
              data-toggle="modal" data-target="#apple">
        <area target="" alt="peaches" title="peaches"
              coords="369,158,307,165,276,208,281,252,410,307,460,281,504,276,466,219"
              shape="poly" data-toggle="modal" data-target="#peaches">
        <area target="" alt="mandarin_orange" title="mandarin_orange"
              coords="319,314,219,406,322,480,415,481,469,451,411,365"
              shape="poly" data-toggle="modal" data-target="#m_orange">
        <area target="" alt="mandarin_orange" title="mandarin_orange"
              coords="832,285,760,305,854,384,923,355"
              shape="poly" data-toggle="modal" data-target="#apricot">
    </map>
</div>

<!-- Trigger the modal with a button -->
<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

<!-- Modal -->
<div id="cherry" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card" style="width: 18rem; height:400px">
            <img class="card-img-top" src="./images/cherry.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cherry</h5>
                <p class="card-text">Raw sweet cherries are 82% water, 16% carbohydrates, 1% protein, and
                    negligible in fat</p>
                <a href="#" class="btn btn-primary">$12</a>
            </div>
        </div>
    </div>
</div>
<div id="apple" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card" style="width: 18rem; height:440px">
            <img class="card-img-top" src="./images/apple.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Apple</h5>
                <p class="card-text">A typical apple serving weighs 242 grams and provides 126 calories with a
                    moderate content of dietary fiber.Otherwise, there is generally low content of essential
                    nutrients.</p>
                <a href="#" class="btn btn-primary">$10</a>

            </div>
        </div>
    </div>
</div>
<div id="peaches" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card" style="width: 18rem; height:500px">
            <img class="card-img-top" src="./images/peaches.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Peaches</h5>
                <p class="card-text">A medium peach, weighing 100 g (3.5 oz), contains small amounts of essential
                    nutrients, but none is a significant proportion of the Daily Value
                </p>
                <a href="#" class="btn btn-primary">$7</a>
            </div>
        </div>
    </div>
</div>
<div id="m_orange" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card" style="width: 18rem; height:520px">
            <img class="card-img-top" src="./images/mandarin_orange.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mandarin Orange</h5>
                <p class="card-text">A mandarin orange contains 85% water, 13% carbohydrates, and negligible
                    amounts
                    of
                    fat and protein. Among micronutrients, only vitamin C is in significant content (32% of the
                    Daily Value) in a 100 gram reference serving, with all other nutrients in low amounts.
                </p>
                <a href="#" class="btn btn-primary">$5</a>
            </div>
        </div>
    </div>
</div>
<div id="apricot" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card" style="width: 18rem; height:500px">
            <img class="card-img-top" src="./images/apricots.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Apricots</h5>
                <p class="card-text">In a 100-gram amount, raw apricots supply 48 Calories and are composed of
                    11%
                    carbohydrates, 1% protein, less than 1% fat and 86% water
                </p>
                <a href="#" class="btn btn-primary">$16</a>
            </div>
        </div>
    </div>
</div>

<table class="columns center_image">
    <tr>
        <td>
            <div id="feedback_30d" style="width: 500px; height: 300px"></div>
        </td>
        <td>
            <div id="quantity_sale_12m" style="width: 500px; height: 300px"></div>
        </td>
    </tr>
</table>

<div style="display:flex">
    <!--consumer review card-->
    <div class="card" style="width: 50%; margin:12px">
        <div class="card-body">
            <h5 class="card-title">Consumer Review</h5>
        </div>
        <ul class="list-group list-group-flush">
            <?php
            $servername = "cmpe281.cncts77r3ktf.us-west-1.rds.amazonaws.com:3306";
            $username = "cmpe281";
            $password = "mypassword";
            $dbname = "cmpe281";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM COMMENT";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<li class=\"list-group-item\">" . $row["comment"] . "</li>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </ul>
    </div>
    <!-- google map-->
    <div id="map_div" class="center_image" style="width:50%; margin:12px"></div>
</div>


</body>
</html>


