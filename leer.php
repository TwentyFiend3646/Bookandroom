<?php

require 'conexion.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$nombreArchivo='./pisos.xlsx';
$documento= IOFactory::load($nombreArchivo);
$totalHojas=$documento->getSheetCount();

for($indiceHoja=0;$indiceHoja<$totalHojas;$indiceHoja++){
    $hojaActual=$documento->getSheet($indiceHoja);
    $numeroFilas=$hojaActual->getHighestDataRow();
    
}
