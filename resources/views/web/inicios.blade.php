@extends('layouts.master')
@section('content')

    <div class="row clearfix">
        <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">
             <div class="card">
                 <div class="header">
                 </div>
                 <div class= "body">
                 </div>
            </div>     
        </div>    
    </div>    
    <div class="row clearfix">

        <div class="container-fluid" align="center" id="ocultarTacometro">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        Tacometro
                        </div>
                            <br>
                            <div class="body">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-muted" id="percentageOne">0%</h1>
                                        <canvas id="meterOne">
                                        </canvas>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </div>        
                </div>    
            </div>    
        </div>
        <div class="container-fluid" align="center" id="ocultarTacometro">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        Tacometro
                        </div>
                            <br>
                            <div class="body">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-muted" id="percentageOne">0%</h1>
                                        <canvas id="meterOne">
                                        </canvas>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </div>        
                </div>    
            </div>    
        </div>
    </div>
   
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="{{asset('js/gauge.min.js')}}"></script>


    <script type="text/javascript">

    

    
      
        
          
           var totalStudent = "{{count($students)}}"
          
        
        console.log(totalStudent);
      
      

      
    
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
         ['Enero',  165,      938,         522,             998,           450,      614.6],
         ['Febrero',  135,      1120,        599,             1268,          288,      682],
         ['Marzo',  157,      1167,        587,             807,           397,      623],
         ['Abril',  139,      1110,        615,             968,           215,      609.4],
         ['Mayo',  136,      691,         629,             1026,          366,      569.6]
      ]);

    var options = {
      title : 'Monthly Coffee Production by Country',
      vAxis: {title: 'Cups'},
      hAxis: {title: 'Month'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }


   var opts = {
            angle: 0, // The span of the gauge arc
            lineWidth: 0.45, // The line thickness
            radiusScale: 1, // Relative radius
            pointer: {
                length: 0.6, // // Relative to gauge radius
                strokeWidth: 0.035, // The thickness
                color: '#000000' // Fill color
            },
            limitMax: false,     // If false, max value increases automatically if value > maxValue
            limitMin: false,     // If true, the min value of the gauge will be fixed
            colorStart: '#6FADCF',   // Colors
            colorStop: '#8FC0DA',    // just experiment with them
            strokeColor: '#E0E0E0',  // to see which ones work best for you
            generateGradient: true,
            highDpiSupport: true,     // High resolution support
            staticZones: [
                { strokeStyle: "#BFFF00", min: 0, max: 20 }, // Red from 100 to 130
                { strokeStyle: "#FFBF00", min: 20, max: 80 }, // Yellow
                { strokeStyle: "#DF0101", min: 80, max: 100 }  // Red
            ],
            staticLabels: {
                font: "10px sans-serif",  // Specifies font
                labels: [20, 60, 80, 100],  // Print labels at these values
                color: "#000000",  // Optional: Label text color
                fractionDigits: 0  // Optional: Numerical precision. 0=round off.
            }
        };

        var targetOne = document.getElementById('meterOne'); // your canvas element
        
        var gaugeOne = new Gauge(targetOne).setOptions(opts); // create sexy gauge!
        

        gaugeOne.maxValue = 100; // set max gauge value
        gaugeOne.setMinValue(0);  // Prefer setter over gauge.minValue = 0
        gaugeOne.animationSpeed = 32; // set animation speed (32 is default value)
        //gaugeOne.set(50); // set actual value

       

       
        //gaugeTwo.set(50); // set actual value
        setInterval(function() {
            gaugeOne.set(totalStudent); // set actual value
            
            var statusPerson = document.getElementById("percentageOne").innerHTML = "Estudiantes Registrados " + totalStudent;
                
        }, 1000);

    </script>
@endsection