<?php

   include "lib/MPDF57/mpdf.php";
   
   include "conexion.inc";
   
   $filtro = $_GET["FIL"];
   $orden = $_GET["ORD"];
   $tipoOrden = $_GET["TIPO"];
   $sql  = "SELECT p.idPERS,p.nomPERS,p.dirPERS,p.telPERS,d.nomDTO ";
   $sql .= "FROM personas AS p ";
   $sql .= "JOIN departamentos AS d ";
   $sql .= "ON p.dtoPERS=d.idDTO ";
   $sql .= "$filtro ";
   $sql .= "ORDER BY $orden $tipoOrden";

   $result = mysql_query($sql,$conex);   
   
   $texto =      "
        <table id='lst'>
         <thead>
         <tr>
           <th> ID </th>
           <th> NOMBRE</th>
           <th>DIRECCION</th>
           <th>TELEFONO</th>
           <th>DEPARTAMENTO</th> 
           </tr>       
         </thead>
         "; 
         $contenido="<tbody>";       
        while ($regPERS = mysql_fetch_array($result)) {
            // convertir caracteres
            $id             = $regPERS["idPERS"];
            $nombre         = utf8_encode($regPERS["nomPERS"]);            
            $direccion      = utf8_encode($regPERS["dirPERS"]);
            $telefono       = $regPERS["telPERS"];
            $departamento   = utf8_encode($regPERS["nomDTO"]);                        

           $contenido.= " <tr><td style='text-align: right;'>$id</td>\n'           
              <td>$nombre</td>\n
              <td>$direccion</td>\n
              <td style='text-align: right;'>$telefono</td>\n
              <td>$departamento</td>\n
                                                                       
            </tr>\n";
        } // end while
        // cerrar conexión
        mysql_close($conex); 
        
        $contenido.="</tbody></table>" ;
        
        $textoEntero=$texto.$contenido;
        
        $clase = file_get_contents('EstilosPersonas.css');
        
        $mpdf = new mPDF('c','A4'); 
        
        $mpdf->writeHTML ("$clase",1);
        
        $mpdf->writeHTML ("$textoEntero");
        
           $mpdf->Output('Reporte5.pdf','I');
     

?>