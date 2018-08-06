@extends('layouts.master')
@section('content')

    <div class="row clearfix ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
                 <div class="header">
                 </div>
                 <div class= "body">
                 <canvas id="bar-chart" width="800" height="350"></canvas>
                 </div>
            </div>     
        </div>
    
    </div>    

    
    
    
    <div class="row clearfix">
                <!-- Contextal Classes -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">playlist_add_check</i>
                                </div>
                                <div class="content">
                                    <div class="text"id="percentageOne"></div>
                                    <h2>
                                        <small>Aqui puedes ver cuantos participantes se han registrado en el mes</small>
                                    </h2>
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div class="body align-center">
                            <canvas id="meterOne">
                            </canvas>    
                        </div>
                    </div>
                </div>
                <!-- #END# Contextal Classes -->
                <!-- Contextual Classes With Linked Items -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tacometro
                                <small>Aqui puedes ver cuantos participantes se han registrado en el mes</small>
                            </h2>
                            
                        </div>
                        <div class="body align-center">
                            <h1 class="text-muted" id="percentageOne">0%</h1>
                            <canvas id="meterOne">
                            </canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Contextual Classes With Linked Items -->
            </div>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script src="{{asset('js/gauge.min.js')}}"></script>


    <script type="text/javascript">
    var totalStudent = "{{ count($students) }}";

    var schoolsStudents = {
        "schoolData": []
    }

    @foreach($consultas as $t)
    schoolsStudents.schoolData.push({
        'id': "{{ $t->id }}",
        'name':"{{ $t->nombre_esc }}",
        'cant': "{{ $t->cant }}"
    });
    @endforeach

    console.log(schoolsStudents);

    var nameEntidades = [];
    var cantidadesEst = [];

    for (var i = 0; i < schoolsStudents.schoolData.length; i++) {
	    nameEntidades.push(schoolsStudents.schoolData[i].name)
        cantidadesEst.push(schoolsStudents.schoolData[i].cant)
    }

    console.log(nameEntidades);
    console.log(cantidadesEst);

    new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
    
      labels: nameEntidades,
      datasets: [
        {
          label: "Total Estudiantes",
          backgroundColor: [],
          data: cantidadesEst,
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Visualizacion De Registros De Asistentes Por Institucion'
      }
    }
    
});

   var opts = {
            angle: 0, // The span of the gauge arc
            lineWidth: 0.45, // The line thickness
            radiusScale: 1.1, // Relative radius
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
                { strokeStyle: "#DF0101", min: 0, max: 20 }, // Red from 100 to 130
                { strokeStyle: "#FFBF00", min: 20, max: 80 }, // Yellow
                { strokeStyle: "#BFFF00", min: 80, max: 100 }  // Red
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
            
            var statusPerson = document.getElementById("percentageOne").innerHTML = "ESTUDIANTES REGISTRADOS " + totalStudent;
                
        }, 1000);

    </script>
@endsection