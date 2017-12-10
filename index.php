<!doctype html>

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Injection Protection</title>

         <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
        </script>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google fonts links-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

          
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/mapdata/index.js?1"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="https://www.highcharts.com/samples/maps/demo/all-maps/jquery.combobox.js"></script>

<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/style.css?v=1.0">


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/maps/modules/map.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>

<!-- Flag sprites service provided by Martijn Lafeber, https://github.com/lafeber/world-flags-sprite/blob/master/LICENSE -->
<link rel="stylesheet" type="text/css" href="https://cloud.github.com/downloads/lafeber/world-flags-sprite/flags32.css" />
       




    </head>
    <body>
       

        <!-- Sections -->
        
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Home</a></li>
                        
                        
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <h1>Scan your website for SQL injections</h1>
                                    <p>Injection protection allows website owners to check their website security levels for free.</p>

                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                            <div class="home-contact">
                                                <form class="form form-vertical" action="lib/results.php" method="POST">
                                                    <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter your website URL" name="input_value"></input>
                                                        <button type="submit" class="btn btn-success" name="submit" onclick="clearform()" >Submit</button>
                                                    </div>
                                                 </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </header>

        <!-- Sections -->
        <section id="features" class="features sections">
            
                            <div class="container">
    <div class="row">
        <div id="container1"></div>
        <div class ="col-sm-6 col-md-6"></div>
        <div class ="col-sm-6 col-md-6"></div>
        <div class ="col-sm-6 col-md-6"></div>
        <div class ="col-sm-6 col-md-6"></div>
    </div>
    
    <script type="text/javascript">
    
    Highcharts.chart('container1', {

    title: {
        text: 'Solar Employment Growth by Sector, 2010-2016'
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com'
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Installation',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: 'Manufacturing',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }, {
        name: 'Sales & Distribution',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }, {
        name: 'Project Development',
        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    }, {
        name: 'Other',
        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
    
    </script>
                        
 

<div id="wrapper">
    <div id="container"></div>
    
</div>

<script type="text/javascript">

    $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=world-population-history.csv&callback=?', function (csv) {

    // Parse the CSV Data
    /*Highcharts.data({
        csv: data,
        switchRowsAndColumns: true,
        parsed: function () {
            console.log(this.columns);
        }
    });*/

    // Very simple and case-specific CSV string splitting
    function CSVtoArray(text) {
        return text.replace(/^"/, '')
            .replace(/",$/, '')
            .split('","');
    }

    csv = csv.split(/\n/);

    var countries = {},
        mapChart,
        countryChart,
        numRegex = /^[0-9\.]+$/,
        quoteRegex = /\"/g,
        categories = CSVtoArray(csv[1]).slice(4);

    // Parse the CSV into arrays, one array each country
    $.each(csv.slice(2), function (j, line) {
        var row = CSVtoArray(line),
            data = row.slice(4);

        $.each(data, function (i, val) {

            val = val.replace(quoteRegex, '');
            if (numRegex.test(val)) {
                val = parseInt(val, 10);
            } else if (!val) {
                val = null;
            }
            data[i] = val;
        });
        countries[row[1]] = {
            name: row[0],
            code3: row[1],
            data: data
        };
    });

    // For each country, use the latest value for current population
    var data = [];
    for (var code3 in countries) {
        if (countries.hasOwnProperty(code3)) {
            var value = null,
                year,
                itemData = countries[code3].data,
                i = itemData.length;

            while (i--) {
                if (typeof itemData[i] === 'number') {
                    value = itemData[i];
                    year = categories[i];
                    break;
                }
            }
            data.push({
                name: countries[code3].name,
                code3: code3,
                value: value,
                year: year
            });
        }
    }

    // Add lower case codes to the data set for inclusion in the tooltip.pointFormat
    var mapData = Highcharts.geojson(Highcharts.maps['custom/world']);
    $.each(mapData, function () {
        this.id = this.properties['hc-key']; // for Chart.get()
        this.flag = this.id.replace('UK', 'GB').toLowerCase();
    });

    // Wrap point.select to get to the total selected points
    Highcharts.wrap(Highcharts.Point.prototype, 'select', function (proceed) {

        proceed.apply(this, Array.prototype.slice.call(arguments, 1));

        var points = mapChart.getSelectedPoints();
        if (points.length) {
            if (points.length === 1) {
                $('#info #flag').attr('class', 'flag ' + points[0].flag);
                $('#info h2').html(points[0].name);
            } else {
                $('#info #flag').attr('class', 'flag');
                $('#info h2').html('Comparing countries');

            }
        

            if (!countryChart) {
                countryChart = Highcharts.chart('country-chart', {
                    chart: {
                        height: 250,
                        spacingLeft: 0
                    },
                    credits: {
                        enabled: false
                    },
                    title: {
                        text: null
                    },
                    subtitle: {
                        text: null
                    },
                    xAxis: {
                        tickPixelInterval: 50,
                        crosshair: true
                    },
                    yAxis: {
                        title: null,
                        opposite: true
                    },
                    tooltip: {
                        split: true
                    },
                    plotOptions: {
                        series: {
                            animation: {
                                duration: 500
                            },
                            marker: {
                                enabled: false
                            },
                            threshold: 0,
                            pointStart: parseInt(categories[0], 10)
                        }
                    }
                });
            }

            $.each(points, function (i) {
                // Update
                if (countryChart.series[i]) {
                    /*$.each(countries[this.code3].data, function (pointI, value) {
                        countryChart.series[i].points[pointI].update(value, false);
                    });*/
                    countryChart.series[i].update({
                        name: this.name,
                        data: countries[this.code3].data,
                        type: points.length > 1 ? 'line' : 'area'
                    }, false);
                } else {
                    countryChart.addSeries({
                        name: this.name,
                        data: countries[this.code3].data,
                        type: points.length > 1 ? 'line' : 'area'
                    }, false);
                }
            });
            while (countryChart.series.length > points.length) {
                countryChart.series[countryChart.series.length - 1].remove(false);
            }
            countryChart.redraw();

        } else {
            $('#info #flag').attr('class', '');
            $('#info h2').html('');
            $('#info .subheader').html('');
            if (countryChart) {
                countryChart = countryChart.destroy();
            }
        }
    });

    // Initiate the map chart
    mapChart = Highcharts.mapChart('container', {

        title: {
            text: 'Population history by country'
        },

        subtitle: {
            text: 'Source: <a href="http://data.worldbank.org/indicator/SP.POP.TOTL/countries/1W?display=default">The World Bank</a>'
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            type: 'logarithmic',
            endOnTick: false,
            startOnTick: false,
            min: 50000
        },

        tooltip: {
            footerFormat: '<span style="font-size: 10px">(Click for details)</span>'
        },

        series: [{
            data: data,
            mapData: mapData,
            joinBy: ['iso-a3', 'code3'],
            name: 'Current population',
            allowPointSelect: true,
            cursor: 'pointer',
            states: {
                select: {
                    color: '#a4edba',
                    borderColor: 'black',
                    dashStyle: 'shortdot'
                }
            }
        }]
    });

    // Pre-select a country
     mapChart.get('us').select();
});
</script>
    
    
    

        






        <!-- Sections -->
        

        <!-- Sections -->

        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Made </i> by <a target="_blank"> Injection Protection </a>2016. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="js/scripts.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
