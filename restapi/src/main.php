
<?php
//echo "SI LLEGA FECHA____]";
$registros = array();
$resultado = array();
$mostrar = array();
$datos = array();

$datos_aux['A1'] = array();
$suma_a1 = 0;
$contar_a1 = 1;
$datos_aux['A2'] = array();
$suma_a2 = 0;
$contar_a2 = 1;
$datos_aux['A3'] = array();
$suma_a3 = 0;
$contar_a3 = 1;
$datos_aux['B1'] = array();
$suma_b1 = 0;
$contar_b1 = 1;
$datos_aux['B2'] = array();
$suma_b2 = 0;
$contar_b2 = 1;
$datos_aux['C1'] = array();
$suma_c1 = 0;
$contar_c1 = 1;
$datos_aux['C2'] = array();
$datos_aux['D'] = array();
$suma_d = 0;
$contar_d = 1;
$datos_aux['E'] = array();
$suma_e = 0;
$contar_e = 1;


$empresa = ($_GET["empresa"] ?? "");
$oficina = ($_GET["oficina"] ?? "");
$fechaInicio = ($_GET["fechaInicio"] ?? "");
$fechaFin = ($_GET["fechaFin"] ?? "");


$strsql = "cnxprc_repor_carte_m()";
//$registros=Ejecutar_procedimiento($strsql,7);
//$prueba=count($registros);
$registros = array(
    array(
        947, "0604460147", "VICENTE PAUL MENDOZA TAPAY", "310104003063", 66, "A2", 19150.00, "02/17/2019", "GINA_MONTESDEOCA", "MATRIZ", "MICROCREDITO", 14.0000, 770.11, 1538.61, 1219.40, 828.73, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 4356.85, 14.5573703, "ALAUSI", "ALAUSI - COMUNIDAD NIZAG ALTO", "CASADO", "ESTUDIANTE"
    ),
    array(
        931, "0604469130", "JORGE DAVID MARCATOMA YUICELA", "310104003287", 48, "C1", 11000.00, "06/04/2019", "JUAN CREDITO", "MATRIZ", "MICROCREDITO", 14.5000, 355.28, 170.18, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 525.46, 1.7556987, "ALAUSI", "COMUNIDAD NIZAG ALTO", "CASADO", "ESTUDIANTE"
    ),
    array(
        883, "0604672592", "JUAN SALOMON TAPAY MENDOZA", "310102000002", 55, "C1", 23800.00, "10/29/2019", "GINA_MONTESDEOCA", "MATRIZ", "CONSUMO", 12.0000, 627.11, 949.46, 984.54, 2060.01, 6987.34, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 11608.46, 38.7868876, "ALAUSI", "COMUNIDAD NIZAG ALTO", "CASADO", "OBRERO"
    ),
    array(
        4789, "0604392969", "ANGEL PATRICIO CAIZAGUANO GUALLI", "310104004035", 46, "E", 5500.00, "08/06/2020", "GINA_MONTESDEOCA", "MATRIZ", "MICROCREDITO", 22.5000, 327.57, 499.21, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 826.78, 2.7624873, "QUITO", "AMBATO Y VENEZUELA", "CASADO", "COMERCIANTE"
    ),
    array(
        577, "0604251827", "SEGUNDO MANUEL TENEMAZA SAQUISILLI", "310104004202", 40, "E", 13500.00, "10/12/2020", "GINA_MONTESDEOCA", "MATRIZ", "MICROCREDITO", 17.0000, 721.10, 1094.69, 762.80, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 2578.59, 8.6157406, "CUMANDÁ", "CUMANDA AV. LOS FUENTES GOMEZ, RENDON", "CASADO", "AGRICULTOR"
    ),
    array(
        475, "0604949933", "NESTOR EFRAIN BARROS MAROTO", "310104004222", 57, "D", 15500.00, "10/26/2020", "GINA_MONTESDEOCA", "MATRIZ", "MICROCREDITO", 18.0000, 597.69, 907.99, 958.70, 2050.77, 2242.37, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6757.52, 22.5786339, "ALAUSI", "Alausi GASPAR DE SANGURIMA Y GOMEZ RENDON (SAN JOSE DE TAPI)", "CASADO", "NO DEFINIDA...!"
    ),
);

$calificacion = array();
try {
    if (count($registros)) {
        //echo "SI HAY DATOS " . count($registros);
        //$datos['registros']=$registros;
        for ($i = 0; $i < count($registros); $i++) {
            switch ($registros[$i][5]) {
                case 'A1':
                    $datos_aux['A1'] = ["calificacion" => $registros[$i][5], "total" => $suma_a1 + $registros[$i][15], "contar" => $contar_a1++];
                    break;
                case 'A2':
                    $datos_aux['A2'] = ["calificacion" => $registros[$i][5], "total" => $suma_a2 + $registros[$i][15], "contar" => $contar_a2++];
                    break;
                case 'A3':
                    $datos_aux['A3'] = ["calificacion" => $registros[$i][5], "total" => $suma_a3 + $registros[$i][15], "contar" => $contar_a3++];
                    break;
                case 'B1':
                    $datos_aux['B1'] = ["calificacion" => $registros[$i][5], "total" => $suma_b1 + $registros[$i][15], "contar" => $contar_b1++];
                    break;
                case 'B2':
                    $datos_aux['B2'] = ["calificacion" => $registros[$i][5], "total" => $suma_b2 + $registros[$i][15], "contar" => $contar_b2++];
                    break;
                case 'C1':
                    $datos_aux['C1'] = ["calificacion" => $registros[$i][5], "total" => $suma_c1 + $registros[$i][15], "contar" => $contar_c1++];
                    break;
                case 'C2':
                    $datos_aux['C2'] = ["calificacion" => $registros[$i][5], "total" => $suma_c2 + $registros[$i][15], "contar" => $contar_c2++];
                    break;
                case 'D':
                    $datos_aux['D'] = ["calificacion" => $registros[$i][5], "total" => $suma_d + $registros[$i][15], "contar" => $contar_d++];
                    break;
                case 'E':
                    $datos_aux['E'] = ["calificacion" => $registros[$i][5], "total" => $suma_e + $registros[$i][15], "contar" => $contar_e++];
                    break;
                default:
                    # code...
                    break;
            }
        }




        //array_push($datos_aux, $objeto[$i]);

        echo "\n\n D";
        echo json_encode($datos_aux['D']['total']);
        echo "\n\n E";
        echo json_encode($datos_aux['C1']['total']);

        echo "\n\n SUMA".($datos_aux['D']['total']+$datos_aux['C1']['total']);


        print("\n");
        //array_push($mostrar['datos'], $objeto[$i]);
    } else {
        $resultado['datos'] = array("mensaje" => 'No hay información');
        echo json_encode($resultado);
    }
} catch (Exception $e) {
    echo 'Excepción capturada: ' . $e->getMessage() . "\n";
} finally {
    echo "Segundo finally.\n";
}

function obtener_calificacion()
{
    $calificacion = array();
}

?>