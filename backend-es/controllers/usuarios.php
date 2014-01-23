<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends MX_Controller {
    public $data,$user;
    public function __construct(){
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
        $this->load->model(array('musuario',));
        /* Lbrerias */
        // $this->load->library(array('email','session'));
        /*Session Regresar*/

    }

    // Listado
    public function index(){
        $data['q'] = $this->musuario->getList();
        $this->data['contenido'] = $this->load->view('usuarios/index_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }

    public function nuevo(){
        // Mensajes
        $data['msg'] = '';
        /* VALIDAR FORMULARIO */
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usuario','Usuario','required|xss');
        $this->form_validation->set_rules('password','Password','required|xss');
        if ($this->form_validation->run() == FALSE ){
            $this->data['contenido'] = $this->load->view('usuarios/nuevo_view',$data,true);
            $this->load->view('templates/main_template',$this->data);
        } else {
            $pData['usuario'] = $this->input->post('usuario',TRUE);
            $password = $this->input->post('password',TRUE);
            $pData['password'] = sha1($password);
            $id = $this->musuario->insertar($pData);
           // $this->ver($id,$pData);
            redirect($this->router->class);
        }
    }

    public function editar($id){
        // $this->output->enable_profiler(TRUE);
        // Mensajes
        $data['msg'] = '';
        // $data['roles'] = $this->rol_usuario->getList();
        /* VALIDAR FORMULARIO*/
        $this->load->library('form_validation');
        // $this->form_validation->set_rules('usuario','Usuario','required|xss');
        $this->form_validation->set_rules('password','Password','xss');
        if (isset($_POST['password'])){
            
                
                // $pData['usuario'] = $this->input->post('usuario',TRUE);
                $password =  $this->input->post('password',TRUE);
                if ($password!='' && !empty($password)){
                    $pData['password'] = sha1($password);
                }
                $pData['status'] = $this->input->post('status',TRUE);
                $this->usuario->actualizar($pData,$id);
                $data['msg'] = "Usuario editado";

            
        }
        // Obteniendo la informacion
        $qInfo = $this->musuario->getById($id);
        $info = $qInfo->row();
        $data['id'] = $info->id;
        $data['usuario'] = $info->usuario;
        $data['status'] = $info->status;
        $this->data['contenido'] = $this->load->view('usuarios/editar_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }

    public function ver($id = null){
        if ($id == null){
            redirect($this->router->class);
        } else {
            // info
            $qInfo = $this->usuario->getById($id);
            $info = $qInfo->row();
            $cData['id'] = $info->id;
            $cData['usuario'] = $info->usuario;
            $cData['password'] = $info->password;
            $cData['txtstatus'] = $info->txtstatus;
            $this->data['contenido'] = $this->load->view('usuarios/ver_view',$cData,true);
            $this->load->view('templates/main_template',$this->data);
        }
    }

    public function eliminar(){
        $id = $this->input->post('elid');
        $cValor = "true";
        $this->usuario->borrar($id);
        $data = json_encode(array("valor" => $cValor));
        echo $data;
    }
}