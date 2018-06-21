<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Event;
use App\School;
use App\User;
use App\EventSchool;
use App\Question;

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
            
           return \Excel::create('Formato Tabulación de encueta satisfaccion cursos charla evento', function($excel) use ($id_even)  {
                
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





       public function reporteExcel2($id_even){

            // estas dos lineas permiten descargar y abrir el archivo excel sin errores en el formato y la extension de este //

            ob_end_clean (); 
            ob_start (); 
            
           return \Excel::create('Formato Tabulación de Asistencia Cursos Charlas Eventos', function($excel) use ($id_even)  {
                
            $excel->sheet('FO_GPD_3203', function ($sheet) use ($id_even) {
            
            $sheet->mergeCells('A1:D1');
            $sheet->row(1,['LISTADO DE SATISFACCION DEL EVENTO CURSOS CHARLAS ']);
            $sheet->ROW(2,['FECHA','NOMBRE DEL CURSO/CONFERENCIA','CONFERENCISTA','NOMBRE','E-mail','TIPO DE DOCUMENTO','NUMERO DOCUMENTO','SEXO','FECHA NACIMIENTO','CELULAR','PROFESION','EMPRESA DONDE LABORA','DOMINIO DEL TEMA','COMUNICACION CON EL GRUPO','EJEMPLO UTILIZADOS','RELEVANCIA','INTERES','PRACTICIDAD DEL TEMA','DURACION','CUMPLIMIENTO HORARIO','LUGAR DEL EVENTO','SUGERENCIAS COMENTARIOS','¿COMO TE ENTERASTE?','¿QUIEN TE ENVIO LA INFORMACION','HAS INVERTIDO ALGUNA VEZ EN LA BOLSA','COMO LE GUSTARIA PAGAR LOS CURSOS','HORARIO L a V ','ASISTIRIA UN FDS','HORARIO FDS','INTERES']);
            
            $consulta = EventSchool::select('questions.created_at','events.nombre_even',
                        'events.organizador_even','students.nombres_est','students.correo_est','students.identificacion_est','students.celular_est','questions.conf1','questions.conf2',
                        'questions.conf3','questions.tem1','questions.tem2','questions.tem3','questions.log1','questions.log2','questions.log3','questions.sugerencia','questions.enterar','questions.informacion','questions.validar1','questions.cursos','questions.hora','questions.validar2','questions.hora1','questions.temas')
                        ->join('events', 'events.id', '=' , 'event_schools.events_id')
                        ->join('schools','schools.id' , '=' , 'event_schools.schools_id')
                        ->join('students','schools.id', '=' , 'students.schools_id')
                        ->join('questions','questions.id', '=' , 'students.id')
                        ->where('events.id','=',"$id_even")
                        ->get();
                        

          
            foreach($consulta as $cons){

                        $row = [];

                        $row[0] = $cons->created_at;
                        $row[1] = $cons->nombre_even;
                        $row[2] = $cons->organizador_even;
                        $row[3] = $cons->nombres_est;
                        $row[4] = $cons->correo_est ;
                        $row[5] =  null;
                        $row[6] = $cons->identificacion_est;
                        $row[7] = null;
                        $row[8] = null;
                        $row[9] = $cons->celular_est;
                        $row[10] = null;
                        $row[11] = null;
                        $row[12] = $cons->conf1;
                        $row[13] = $cons->conf2;
                        $row[14] = $cons->conf3;
                        $row[15] = $cons->tem1;
                        $row[16] = $cons->tem2;
                        $row[17] = $cons->tem3;
                        $row[18] = $cons->log1;
                        $row[19] = $cons->log2;
                        $row[20] = $cons->log3;
                        $row[21] = $cons->sugerencia;
                        $row[22] = $cons->enterar;
                        $row[23] = $cons->informacion;
                        $row[24] = $cons->validar1;
                        $row[25] = $cons->cursos;
                        $row[26] = $cons->hora;
                        $row[27] = $cons->validar2;
                        $row[28] = $cons->hora1;
                        $row[29] = $cons->temas;
                        
                        $sheet->appendRow($row);

            }

            
        });
                
        })->export('XLSX');

    }

    

	

   
}
