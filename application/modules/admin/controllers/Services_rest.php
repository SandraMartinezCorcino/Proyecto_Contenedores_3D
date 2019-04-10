 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 require APPPATH . '/libraries/REST_Controller.php';
class Services_rest extends REST_Controller{
	 function __construct() {
            // Construct the parent class
            parent::__construct();
        }
function students_get()
{
	
    //$result = new Response_students();    
 
    $id = $this->get('id');
    $this->load->model('students_model');
    $student = $this->students_model->get_student($id);
 
    if (!empty($equipment))
    {
        $result->responseCode    = 0;
        $result->responseMessage = 'Equipo encontrado';
        $result->student_data    = $student;
    }
    else
    {
        $result->responseCode    = 1;
        $result->responseMessage = 'El estudiante no existe';
        $result-> student_data   = null;
    }
        
    $this->response($result, 200);
}
}