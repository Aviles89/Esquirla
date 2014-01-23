<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Dashboard extends MX_Controller {

        public $data,$vParameters,$mainView,$fv;
        public function __construct(){
            parent::__construct();
            session_start();

            if (!isset($_SESSION[$this->nsession]) || (($_SESSION[$this->nsession]['usuario'] == ""))) redirect('login');
            $this->data['fjs'] = '';
            $this->data['js'] = '';
            $this->data['css'] = '';
            $this->mainView = 'dashboard';
            // $this->load->model(array('mcategoria'));
        }

        public function index(){
            $data[''] = '';
            $this->data['contenido'] = $this->load->view($this->mainView.'/index_view',$data,true);
            $this->load->view('templates/main_template',$this->data);
        }
    }