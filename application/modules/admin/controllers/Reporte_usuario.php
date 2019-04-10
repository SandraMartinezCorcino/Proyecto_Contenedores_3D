 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporte_usuario extends MX_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('Excel');
        $this->load->database();
        $this->load->model('tbl_usuario','obj_usuario');
               
        if($this->session->userdata('logged') != 'true'){
           redirect('login');
           
        }

    }
    public function index(){    
    $data['mov_usuario']=$this->tbl_usuario->get_usuario();
    $this->tmp_admin->set('usuario',$data['mov_usuario']);
    $this->load->tmp_admin->render('usuario/usuario_view');
    }

 public function exportarExcel(){
         //load our new PHPExcel library
        $this->load->library('excel');
        $data['mov_usuario']=$this->tbl_usuario->get_usuario();
        $objPHPExcel = new PHPExcel();
         $estiloInformacion = new PHPExcel_Style();
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D1:K1');
        $Line=4;
        $sheet = $this->excel->getActiveSheet();
        $sheet ->setCellValue('D1','Usuarios del Sistema');
        $sheet ->setCellValue('D3','Item');
        $sheet ->setCellValue('E3','Nombre');
        $sheet ->setCellValue('F3','Contraseña');
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        foreach ($data['mov_usuario'] as $key=>$fila){
            $sheet ->setCellValue('D'.$Line,$key+1);
            $sheet ->setCellValue('E'.$Line,$fila->ubicacion );
            $sheet -> setCellValue('F'.$Line, $fila->fecha_ingreso_almacen);
            ++$Line;
            }
            /*estilos*/

     $estiloTituloReporte = array(
            'font' => array(
                'name' => 'Arial',
                'bold' => true,
                'italic' => true,
                'strike' => false,
                'size' => 14,
                'color' => array(
                    'rgb' => '000000'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array(
                    'argb' => 'C6D3F7')
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_NONE
                )
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'rotation' => 0,
                'wrap' => TRUE
            )
        );

        $estiloTituloColumnas = array(
            'font' => array(
                'name' => 'Arial',
                'bold' => true,
                'color' => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
                'rotation' => 90,
                'startcolor' => array(
                    'rgb' => '000066'
                ),
                'endcolor' => array(
                    'argb' => '000066'
                )
            ),
            'borders' => array(
                'top' => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
                    'color' => array(
                        'rgb' => '143860'
                    )
                ),
                'bottom' => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
                    'color' => array(
                        'rgb' => '143860'
                    )
                )
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'wrap' => TRUE
            )
        );


       
        $estiloInformacion->applyFromArray(array(
            'font' => array(
                'name' => 'Arial',
                'color' => array(
                    'rgb' => '000000'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array(
                    'argb' => 'DFE5F7')
            ),
           'borders' => array(
                'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
        )));
        
       // $j = $j - 1;
        $objPHPExcel->getActiveSheet()->getStyle('D1:G1')->applyFromArray($estiloTituloReporte);
        $objPHPExcel->getActiveSheet()->getStyle('D4:G4')->applyFromArray($estiloTituloColumnas);
       // $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A5:D" . $j);




                    
    $writer = new PHPExcel_Writer_Excel5($this->excel);
    header('Content-type: application/vnd.ms-excel');
    $writer->save('php://output');
}
}