<?php
class Error extends Controller {
	public $data;
	public function __construct(){
		parent::__construct();
		session_start();/* Parametros SEO */
		$this->meta_description 	='';
		$this->meta_keywords 		='';
		$this->meta_robots 			='index,follow';$this->meta_rating ='GENERAL';$this->meta_distribution 	='GLOBAL';$this->meta_copyright ='REJOYADA';$this->meta_author ='REJOYADA';
		$this->metatags='<meta name="description" content="'.$this->meta_description.'" /><meta name="keywords" content="'.$this->meta_keywords.'" /> <meta name="robots" content="'.$this->meta_robots.'" /> <meta name="rating" content="'.$this->meta_rating.'" /> <meta name="distribution" content="'.$this->meta_distribution.'" /> <meta name="copyright" content="'.$this->meta_copyright.'" /> <meta name="author" content="'.$this->meta_author.'" /> ';
		$this->data['controlador'] = 'avances';
		$this->data['javascripts']		='';
		$this->data['css']				='
		<link href="css/avances.css" rel="stylesheet" type="text/css" />
		';
		$this->data['meta_tags']		=$this->metatags;
		$this->data['titulo'] 			='SADH';
		/* Helpers */
		//$this->load->helper('');
		/* Modelos */	
		//$this->load->model('galeria');	
	}
 
	function error_404()
	{
		redirect('login','refresh');
	}
}
?>