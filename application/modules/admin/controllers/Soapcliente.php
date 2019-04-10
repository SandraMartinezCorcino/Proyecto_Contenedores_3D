 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Soapcliente extends CI_Controller
{
   function __construct() {
	  parent::__construct();
    $this->load->library('Nusoap_library');
	  }
	  
	function index(){
	
	$client = new SoapClient('http://192.168.1.18:81/SavarFerroles/Service1.asmx?WSDL');
    $result = $client->consultar();
	//$datos=array();

	
	  function obj2array($obj) {
	  $out = array();
	  foreach ($obj as $key => $val) {
	    switch(true) {
	        case is_object($val):
	         $out[$key] = obj2array($val);
	         break;
	      case is_array($val):
	         $out[$key] = obj2array($val);
	         break;
	      default:
	        $out[$key] = $val;
	    }
	  }
	  return $out;
	}
	
	$resultado = obj2array($result);
	//echo var_dump($resultado);
	
    foreach($resultado as $hijo){
	$hijo['nombre_contenedor'] ;

		}
		return ($datos);

}
	  
	  
	
	





}