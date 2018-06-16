<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Event;
use App\School;
use App\User;
use App\EventSchool;

class ReporteController extends Controller
{


    public function reporte($id_even){

		$consulta = EventSchool::select('events.nombre_even','events.lugar_even',
                    'students.nombres_est','students.apellidos_est','students.correo_est',
                    'students.identificacion_est','students.celular_est','students.autizacion_uso_datos_personales_est' )
                    ->join('events', 'events.id', '=' , 'event_schools.events_id')
                    ->join('schools','schools.id' , '=' , 'event_schools.schools_id')
                    ->join('students','schools.id', '=' , 'students.schools_id')
                    ->where('events.id','=',"$id_even")
                    ->get();
                    
        $pdf = PDF::setPaper('legal')->loadView('reportes.reporteAsistentes',compact('consulta'));

        return $pdf->stream();
    }


    


   public function reporteExcel($id_even){

            // estas dos lineas permiten descargar y abrir el archivo excel sin errores en el formato y la extension de este //

            ob_end_clean (); 
            ob_start (); 
            
           return \Excel::create('Formato Tabulación de Asistencia Cursos Charlas Eventos', function($excel) use ($id_even)  {
                
            $excel->sheet('FO_GPD_3203', function ($sheet) use ($id_even) {
            
            $sheet->mergeCells('A1:D1');
            $sheet->row(1,['LISTADO DE ASISTENTES AL EVENTO']);
            $sheet->ROW(2,['NOMBRE EVENTO','LUGAR ','NOMBRES ESTUDIANTE','APELLIDOS ESTUDIANTE',
                           'CORREO','IDENTIFICACION','CELULAR','AUTORIZACION']);
            
            $consulta = EventSchool::select('events.nombre_even','events.lugar_even',
                        'students.nombres_est','students.apellidos_est','students.correo_est',
                        'students.identificacion_est','students.celular_est','students.autizacion_uso_datos_personales_est' )
                        ->join('events', 'events.id', '=' , 'event_schools.events_id')
                        ->join('schools','schools.id' , '=' , 'event_schools.schools_id')
                        ->join('students','schools.id', '=' , 'students.schools_id')
                        ->where('events.id','=',"$id_even")
                        ->get();
                        

          
            foreach($consulta as $cons){

                        $row = [];

                        $row[0] = $cons->nombre_even;
                        $row[1] = $cons->lugar_even;
                        $row[2] = $cons->nombres_est;
                        $row[3] = $cons->apellidos_est;
                        $row[4] = $cons->correo_est;
                        $row[5] = $cons->identificacion_est;
                        $row[7] = $cons->celular_est;
                        if($cons->autizacion_uso_datos_personales_est ==1){

                            $row[8] ='Si';
                        }else{
                            $row[8] ='No';
                        }
                        

                        $sheet->appendRow($row);

            }

            
        });
                
        })->export('XLSX');

    }

    

	

   
}
