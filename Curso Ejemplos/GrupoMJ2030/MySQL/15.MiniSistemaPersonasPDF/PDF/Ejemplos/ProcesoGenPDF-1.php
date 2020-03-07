<?php
  $contenido = "
 <p>
   Este texto es generado por HTML, y no contiene estilos
 </p><br />
 <p style='color: blue;'>
   Este texto es generado por HTML, y contiene un estilo en línea
 </p><br /> 
 <p class='rojo'>
   Este texto es generado por HTML, y contiene una clase declarada
   en la cabecera del documento
 </p><br />
 <p id='destacado'>
   Este texto es generado por HTML, contiene el estilo destacado
   declarado en el mismo documento HTML 
 </p><br />
 <p class='externo'>
   Este texto es generado por HTML, pero contiene un estilo declarado
   en un documento externo de .css
 </p><br />  
"; 

 
    // importar la librería
    include "../lib/MPDF57/mpdf.php";
    // crear objeto PDF
    $mpdf = new mPDF('c','A4');
    // escribir en el pdf
    $mpdf->writeHTML("$contenido");        
    // generar PDF
    $mpdf->Output('Reporte7.pdf','I');
 ?>