
 public function export_excel_tabla(){
       $etiquetas = $this->obj_etiquetas->get_all_etiquetas();
 

       $table = "<table class='table table-bordered table-hover' id='table_ids'  style='text-align:center'>
                       <thead> 
                           <tr>
                               <th>#RFID</th>
                               <th>Certificado</th>
                               <th>Envasadora</th>
                               <th>Fabricante</th>
                               <th>Tara</th>
                               <th>Lugar de Instalación</th>
                               <th>Serie</th>
                               <th>Fecha</th>
                           </tr>
                       </thead>
                       <tbody>";

       $cant = 0;

                           foreach ($etiquetas as $key => $value){
                               $table.="<tr>
                                   <td>&nbsp;".$value->codrfid."</td>
                                   <td>".$value->num_certificado."</td>
                                   <td>".$value->emp_envasadora."</td>
                                   <td>".$value->fabricante."</td>
                                   <td>".$value->tara."</td>
                                   <td>".$value->lugar_instalacion."</td>
                                   <td>".$value->num_serie."</td>
                                   <td>".$value->fecha."</td>
                               </tr>";
                           }
                      $table.= "</tbody>
                   </table>";

       header("Content-type: application/vnd.ms-excel; name='excel'");
       header("Content-Disposition: attachment; filename=exportfile.xls");
       header("Pragma: no-cache");
       header("Expires: 0");

       echo $table;
   }