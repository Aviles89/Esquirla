<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class configuracion extends MX_Controller {
    public $data,$user;
	public function __construct()
	{
		parent::__construct();
		session_start();
        if (!isset($_SESSION[$this->nsession]) || (($_SESSION[$this->nsession]['usuario'] == ""))) redirect('login');

        $this->data['fjs'] = '';
        $this->data['js'] = '
        <script type="text/javascript" src="js/plugins/borrar.js"></script>
		<script type="text/javascript" src="js/plugins/jquery-impromptu.js"></script>
        ';
        $this->data['css'] = '
        <link href="css/impromptu.css" media="screen" rel="stylesheet" type="text/css" />
        ';

        /* Tools */
        $this->load->helper(array('tools','url','date','text'));
        /* Modelos */
        $this->load->model(array('mconfiguracion'));
        
	}

    public function index()
    {
        $data['q'] = $this->mconfiguracion->getList();
        $this->data['contenido'] = $this->load->view('configuracion/index_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }
    public function force()
    {
        $data['q'] = $this->mconfiguracion->getListForce();
        $this->data['contenido'] = $this->load->view('configuracion/index_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }
    public function editar($id = NULL)
    {
        if (!is_null($id)) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('string','Value','xss');
            if (isset($_POST['string'])){
                $pData['string'] = $this->input->post('string',TRUE);
                //$pData['status'] = $this->input->post('status',TRUE);
                $this->mconfiguracion->actualizar($pData,$id);
                $data['msg'] = "Usuario editado";
                redirect($this->router->class);
            }
            $qInfo = $this->mconfiguracion->getID($id);
            $info = $qInfo->row();
            $data['id'] = $info->id;
            $data['descripcion'] = $info->descripcion;
            $data['string'] = $info->string;
            $data['status'] = $info->status;
            $data['msg'] ="";
            $this->data['contenido'] = $this->load->view('configuracion/editar_view',$data,true);
            $this->load->view('templates/main_template',$this->data);
        } else{
            redirect($this->router->class);
        }
    }

}

/* End of file  */
/* Location: ./application/controllers/ */