 <?php
    $a = 10;
    $b = 20;
    $c = $a+$b;
    $titular    = "<h2>titular nivel 2</h2>";
    $contenido  ="<p>este es mi primer párrafo</p>";
    $contenido .="<p>Este es mi segundo párrafo</p>";
    $contenido .="<span class='rojo'>El resultado es: $c</span>";
    
    $html = $titular.$contenido;
    // importar la librería
    include "../lib/MPDF57/mpdf.php";
    // crear objeto PDF
    $mpdf = new mPDF('c','A4');
    // escribir en el pdf
    $mpdf->writeHTML("<h1 style='color:blue;'>este es un titular</h1>");    
    $mpdf->writeHTML("<span style='color:green;'>este es un texto</span>");
    $mpdf->writeHTML("<p style='color:red;'>este es un párrafo</p>");    
    $mpdf->writeHTML("<p style='color:orange;'>el resultado es $c</p>");
    $mpdf->writeHTML("$html");        
    // generar PDF
    $mpdf->Output('Reporte6.pdf','I');
 ?>