<?php

ob_start();

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');





class Csv extends MX_Controller  {



    function __construct() {

        parent::__construct();

        $this->load->model('csv_model');

        $this->load->library('csvimport');



       if($this->session->userdata('logged') != 'true'){

           redirect('login');

        }   

    }



    function index() {

        //$data['addressbook'] = $this->csv_model->get_addressbook();

       // $this->load->view('csvindex', $data);

        //$this->load->tmp_admin->render('csvindex');

        $this->load->model('csv_model');

        $this->load->tmp_admin->setLayout('templates/admin_tmp');

        $data['addressbook'] = $this->csv_model->get_addressbook();

        $this->tmp_admin->set('addressbook', $data['addressbook']);

        /*$bahia=$this->tbl_mov_contenedor->bahia_contenedores();

       $this->tmp_admin->set('bahia', $bahia);*/

        

        $this->load->tmp_admin->render('csvindex', 'addressbook');

    }





    public function reporte() {

        $this->load->model('csv_model');

        $tabla = "";

        $i = 0;

        $user=12;

        //var_dump($user);

        $lista=$this->csv_model->recarga_csv($user);

        foreach ($lista as $row) {

            $i++;

            $tabla.= '{"id":"' . $i . '","nom_completo":"' . $row['nom_completo'] . '","fecha_recarga":"' . $row['fecha_recarga'] . '","tipoTransaccion":"' . $row['tipoTransaccion'].'" ,"estado_recarga":"' . $row['estado_recarga'].'" ,"monto":"' . $row['monto'].'" },';

        }

        $tabla = substr($tabla, 0, strlen($tabla) - 1);

        

        echo '{"data":[' . $tabla . ']}';

    } 





    function importcsv() {

         

        $mov_candado = $this->csv_model->select_sandra();



        

        $nom_completo[0]=$mov_candado[0]['CONTENEDOR'];

        $ultima_fecha[0]=$mov_candado[0]['FECHA'];



        $fecha=$ultima_fecha[0];

                

        $nombre=$nom_completo[0];



       // $mov_candado = $this->csv_model->select_sandra();

       // $data1=array('mov_candado' => $mov_candado);

       // var_dump($data1);

        $data['addressbook'] = $this->csv_model->get_addressbook();

        $data['error'] = '';    //initialize image upload error array to empty



        $config['upload_path'] = './uploads/';

        $config['allowed_types'] = 'csv';

        $config['max_size'] = '1000';



        $this->load->library('upload', $config);





        // If upload failed, display error

        if (!$this->upload->do_upload()) {

            $data['error'] = $this->upload->display_errors();



        $data['error'] = $this->csv_model->get_addressbook();

        $this->tmp_admin->set('error', $data['error']);

        /*$bahia=$this->tbl_mov_contenedor->bahia_contenedores();

       $this->tmp_admin->set('bahia', $bahia);*/

        

        $this->load->tmp_admin->render('csvindex', 'error');



            //$this->load->view('csvindex', $data);

        } else {

            $file_data = $this->upload->data();

            $file_path =  './uploads/'.$file_data['file_name'];

            

            if ($this->csvimport->get_array($file_path)) {

                $csv_array = $this->csvimport->get_array($file_path);

                $data2=array('csv_array' => $csv_array);

                //var_dump($data2);

                //var_dump($data1);







                foreach ($csv_array as $row ) {

                   // if ($row['Tipo de transacción']=='TE PAGÓ'){



                        if ($row['Origen']==$nombre and $row['Fecha de operación']==$fecha) {



                            break; 

                        } 



                    else{    

                    $insert_data = array(

                       'tipoTransaccion'=>$row['Tipo de transacción'],

                       'nom_completo'=>$row['Origen'],

                       'monto'=>$row['Monto'],

                       'fecha_recarga'=>$row['Fecha de operación'],

                        

                    );

                    $this->csv_model->insert_csv($insert_data);

                    

          }

      //}



                } 

                $this->session->set_flashdata('success', 'Archivo Csv importado exitosamente');

                redirect(base_url().'admin/csv');

                //echo "<pre>"; print_r($insert_data);

            } else 

                $data['error'] = "Error occured";

                $this->load->view('csvindex', $data);

            }

            

        } //









       /* function importcsv() {

       // $mov_candado = $this->csv_model->select_sandra();

       // $data1=array('mov_candado' => $mov_candado);

       // var_dump($data1);



        $mov_candado = $this->csv_model->select_sandra();

    



        $nom_completo[0]=$mov_candado[0]['nom_completo'];

        $ultima_fecha[0]=$mov_candado[0]['fecha_recarga'];



        $fecha=$ultima_fecha[0];

                

        $nombre=$nom_completo[0];

        



        $data['addressbook'] = $this->csv_model->get_addressbook();

        $data['error'] = '';    //initialize image upload error array to empty



        $config['upload_path'] = './uploads/';

        $config['allowed_types'] = 'csv';

        $config['max_size'] = '1000';



        $this->load->library('upload', $config);





        // If upload failed, display error

        if (!$this->upload->do_upload()) {

            $data['error'] = $this->upload->display_errors();



            $this->load->view('csvindex', $data);

        } else {

            $file_data = $this->upload->data();

            $file_path =  './uploads/'.$file_data['file_name'];

            

            if ($this->csvimport->get_array($file_path)) {

                $csv_array = $this->csvimport->get_array($file_path);

                $data2=array('csv_array' => $csv_array);

                //var_dump($data2);

                //var_dump($data1);



                //foreach ($mov_candado as $key => $value) {









                foreach ($csv_array as $row ) {

                    if ($row['tipoTransaccion']=='IN'){



                        if ($row['nom_completo']==$nombre and $row['fechaCreacion']==$fecha) {



                            break; 

                        }   # code...

                        else   

                        {



                            $insert_data = array(

                             'tipoTransaccion'=>$row['tipoTransaccion'],

                             'nom_completo'=>$row['de'],

                             'monto'=>$row['monto'],

                             'fecha_recarga'=>$row['fechaCreacion'],



                         );

                            $this->csv_model->insert_csv($insert_data);

                        }

                    }

                }

            }    

        }

        $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');

        redirect(base_url().'admin/csv');

                //echo "<pre>"; print_r($insert_data);

    } 

}

}





    else {

    $data['error'] = "Error occured";

    $this->load->view('csvindex', $data);

} 



        } //*/



   



        public function logout(){                     

        $this->session->unset_userdata('logged');

        redirect('admin');

   }









}

/*END OF FILE*/

