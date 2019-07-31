<?php namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 * 
 * For security be sure to declare any new methods as protected or private.
 * 
 * @package CodeIgniter
 */
 
use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [ ];

	/**
	 * Constructor.
	 *
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();

        if(session_status() == PHP_SESSION_NONE){
            session()->start();
        }

        if (session()->admin){
            session()->destroy();
            session()->start();
            session()->regenerate();
        }
	}

    public function web_view($seccion) {
        $dir =  scandir('../app/Views/templates/' );
        $cont=  scandir('../app/Views/contenedores/' );

        echo view('index');
        for ($i = 2; $i < count($cont);$i++ ){
            echo view('contenedores/'.$cont[$i]) ;
        }
        for ($i = 2; $i < count($dir);$i++ ){
            echo view('templates/'.$dir[$i]) ;
        }
        echo view('footer', $seccion);
    }

    public function format_uri( $string, $separator = '-' ) {
        $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
        $special_cases = array( '&' => 'and', "'" => '');
        $string = mb_strtolower( trim( $string ), 'UTF-8' );
        $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
        $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
        $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
        $string = preg_replace("/[$separator]+/u", "$separator", $string);
        return $string;
    }

    public function rAJAX($data , $codigo = 200 , $mensaje = 'OK') {
        $json_response = json_encode($data);
        return $this->response->setStatusCode($codigo , $mensaje)->setContentType('application/json')->setBody($json_response)->send();
    }

}
