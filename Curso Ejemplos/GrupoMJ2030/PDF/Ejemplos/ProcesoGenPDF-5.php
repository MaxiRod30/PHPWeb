<?php
  // cargar archivo de estilos
    $contenido2 = file_get_contents("01.Posicionamiento.html");
 
    // importar la librería
    include "../lib/MPDF57/mpdf.php";
    // crear objeto PDF
    $mpdf = new mPDF('c','A4');
    // escribir html en PDF    
    $mpdf->writeHTML("$contenido2");
            
    // generar PDF
    $mpdf->Output('Reporte10.pdf','I');
 ?>