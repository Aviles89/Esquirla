<?php
    class login extends CI_Controller {
        public $data,$user,$nsession;
        public function __construct(){
            parent::__construct();
            session_start();
            $this->nsession = $this->config->item('nsession');
            $this->data['fjs'] = '';
            $this->data['js'] = '';
            $this->data['javascripts'] ='';
            $this->data['css'] = '';
            $this->data['titulo'] ='NPANEL | Panel Administrativo ';
            /* Tools */
            $this->load->helper(array('tools'));
            // $this->output->enable_profiler(true);
            /* Modelos */
            $this->load->model(array('musuario'));
        }

        // Vista default
        public function index()
        {
            
            $this->data['mensaje']='';
            if (isset($_POST['usuario'])){
                $u = $this->input->post('usuario',true);
                $p = $this->input->post('password',true);
                $p = sha1($p);
                $res = $this->musuario->checkUser($u,$p);
                if ($res->num_rows() == 1){
                    $ra = $res->row();
                    $status = $ra->status;
                    if ($status == 1){
                        $_SESSION[$this->nsession]['usuario'] 	= $ra->usuario;
                        $_SESSION[$this->nsession]['id'] 	 	= $ra->id;
                        redirect('dashboard');
                    } else {$this->data['mensaje']='Tu cuenta ha sido desactivada.';}
                } else {$this->data['mensaje']='Tu nombre de usuario o contrase&ntilde;a son incorrectos.';}
            } else {
                $this->data['mensaje'] = '';
            }
            $this->load->view('templates/login_template',$this->data);
        }

        //Logout
        function logout(){
            unset($_SESSION[$this->nsession]);
            redirect('login','refresh');
        }
    }